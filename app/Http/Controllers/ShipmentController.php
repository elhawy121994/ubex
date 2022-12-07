<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListShipmentRequest;
use App\Services\Interfaces\ShipmentServiceInterface;

class ShipmentController extends BaseController
{

    protected ShipmentServiceInterface $shipmentService;

    public function __construct(ShipmentServiceInterface $shipmentService)
    {
        $this->shipmentService = $shipmentService;
    }

    public function index(ListShipmentRequest $request)
    {
        $requestOption = $request->validated();
        $shipments = $this->shipmentService->list($requestOption);
        return $this->accepted($shipments);
    }
}
