<?php

namespace App\Services\Interfaces;

interface ShipmentServiceInterface extends BaseServiceInterface
{
    public function getStartAndEndDateWeekPerYear(int $weekNumber, int $year): array;
}
