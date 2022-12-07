<?php

namespace App\Services\Interfaces;

interface ShipmentCacheServiceInterface
{
    public function put(string $key, $data, $time);
    public function get($key);
    public function destroy($key);
}