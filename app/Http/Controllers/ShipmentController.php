<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShipmentRequest;
use App\Http\Requests\ListShipmentRequest;
use App\Services\Interfaces\ShipmentServiceInterface;
use Illuminate\Http\JsonResponse;

class ShipmentController extends BaseController
{

    protected ShipmentServiceInterface $shipmentService;

    public function __construct(ShipmentServiceInterface $shipmentService)
    {
        $this->shipmentService = $shipmentService;
    }

    public function store(CreateShipmentRequest $request)
    {
        $requestData = $request->validated();
        $createdObject = $this->shipmentService->create($requestData);
        return $this->created($createdObject);
    }

    public function statics(ListShipmentRequest $request): JsonResponse
    {
        $requestOption = $request->validated();
        $shipments = $this->shipmentService->listStatics($requestOption);
        return $this->accepted($shipments);
    }
}
