<?php

namespace App\Repositories;

use App\Models\Shipment;
use App\Repositories\Interfaces\ShipmentRepositoryInterface;

class ShipmentRepository extends BaseRepository implements ShipmentRepositoryInterface
{
    public function __construct(Shipment $model)
    {
        parent::__construct($model);
    }
}
