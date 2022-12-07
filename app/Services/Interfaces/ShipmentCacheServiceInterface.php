<?php

namespace App\Services\Interfaces;

interface ShipmentCacheServiceInterface
{
    public function put(string $key, $data, $time);
    public function get($key);
    public function destroy($key);
    public function forgetStaticsPerWeek(int $week, int $year);
    public function getStaticsPerWeek(int $week, int $year);

}