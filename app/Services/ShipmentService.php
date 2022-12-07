<?php

namespace App\Services;

use App\Http\Resources\ShipmentTransformer;
use App\LookUps\ShipmentStatusLookups;
use App\Models\Shipment;
use App\Repositories\Interfaces\ShipmentRepositoryInterface;
use App\Services\Interfaces\ShipmentCacheServiceInterface;
use App\Services\Interfaces\ShipmentServiceInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ShipmentService extends BaseService implements ShipmentServiceInterface
{
    protected ShipmentCacheServiceInterface $cacheService;

    public function __construct(ShipmentRepositoryInterface $repository, ShipmentCacheServiceInterface $cacheService)
    {
        parent::__construct($repository);
        $this->cacheService = $cacheService;
    }

    public function getStartAndEndDateWeekPerYear(int $weekNumber, int $year): array
    {
        $date = Carbon::now();
        $date->setISODate($year, $weekNumber);

        return [
            'start_of_week' => $date->startOfWeek()->toDateTimeString(),
            'end_of_week' => $date->endOfWeek()->toDateTimeString()
        ];
    }

    public function update(int $id, array $data): Model
    {
        $updatedModel = parent::update($id, $data);
        $this->forgetCache($updatedModel);
        return $updatedModel;
    }

    public function create(array $data): ?Model
    {
        $createdModel =  parent::create($data);
        $this->forgetCache($createdModel);
        return $createdModel;
    }

    public function destroy(int $id): bool
    {
        $this->forgetCache($this->repository->getById($id));
        return parent::destroy($id);
    }

    private function groupByStatus($shipmentsCollection): array
    {
        $shipmentsCollection = ShipmentTransformer::collection($shipmentsCollection);
        $groupedShipments[ShipmentStatusLookups::DELIVERED] = array_values($shipmentsCollection->where('status',
            ShipmentStatusLookups::DELIVERED)->toArray());
        $groupedShipments[ShipmentStatusLookups::CANCELLED] = array_values($shipmentsCollection->whereIn('status',
            [ShipmentStatusLookups::CANCELLED, ShipmentStatusLookups::DESTROYED])->toArray());
        $groupedShipments[ShipmentStatusLookups::ONGOING] = array_values($shipmentsCollection->whereIn('status',
            [ShipmentStatusLookups::IN_FACILITY, ShipmentStatusLookups::IN_TRANSIT])->toArray());
        return $groupedShipments;
    }

    public function listStatics(array $requestOption)
    {
        $date = Carbon::now();
        $week = $requestOption['week'];
        $year = $requestOption['year'] ?? $date->format('Y');
        $shipmentsCollection = $this->cacheService->getStaticsPerWeek($week, $year);

        if (!empty($shipmentsCollection)) {
            return $shipmentsCollection;
        }

        $weekDate = $this->getStartAndEndDateWeekPerYear($week, $year);
        $shipments = $this->repository->where('date_created', $weekDate['start_of_week'], '>=')
            ->where('date_created', $weekDate['end_of_week'], '<=')->orderBy('last_update')->get();

        if ($shipments->isEmpty()) {
            return [];
        }

        $groupedShipments = $this->groupByStatus($shipments);

        $this->cacheService->setStaticsPerWeek($groupedShipments, $week, $year);

        return $groupedShipments;
    }

    protected function forgetCache(Shipment $shipment): void
    {
        $this->cacheService->forgetStaticsPerWeek(
            (int) $shipment->date_created->format('W'),
            (int) $shipment->date_created->format('Y')
        );
    }
}
