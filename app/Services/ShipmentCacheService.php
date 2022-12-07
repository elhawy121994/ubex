<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use App\Services\Interfaces\ShipmentCacheServiceInterface;

class ShipmentCacheService implements ShipmentCacheServiceInterface
{
    public function put(string $key, $data, $time)
    {
        return Cache::put($key, $data, $time);
    }

    public function get($key)
    {
        return Cache::get($key);
    }

    public function destroy($key)
    {
        return Cache::forget($key);
    }

    public function setStaticsPerWeek($data, int $week, int $year)
    {
        $key = $this->getStaticsKey($week, $year);
        $this->put($key, $data, 24*60*60);
    }

    public function forgetStaticsPerWeek(int $week, int $year)
    {
        $key = $this->getStaticsKey($week, $year);
        $this->destroy($key);
    }

    public function getStaticsPerWeek(int $week, int $year)
    {
        $key = $this->getStaticsKey($week, $year);

        return $this->get($key);
    }

    private function getStaticsKey(int $week, int $year)
    {
        return 'YEAR_'. $year. '_WEEK_'.$week;
    }
}
