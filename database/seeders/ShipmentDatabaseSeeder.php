<?php

namespace Database\Seeders;

use App\Models\Administration\Bus;
use App\Models\Administration\Line;
use App\Models\Administration\Seat;
use App\Models\Administration\Station;
use App\Models\Administration\Trip;
use App\Models\Shipment;
use Illuminate\Database\Seeder;

class ShipmentDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Shipment::firstOrCreate(
            ['number' => '262505566'],
            [
                'number' => '262505566',
                'type' => 'DOC',
                'date_created' => '2020-02-03T22:00:07Z',
                'last_update' => '2020-02-15T15:25:12Z',
                'status' => 'DELIVERED',
                'updated_by' => 32
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '240374250'],
            [
                'number' => '240374250',
                'type' => 'NONDOC',
                'date_created' => '2020-02-04T08:47:30Z',
                'last_update' => '2020-02-11T12:04:57Z',
                'status' => 'DELIVERED',
                'updated_by' => 32
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '385858604'],
            [
                'number' => '385858604',
                'type' => 'NONDOC',
                'date_created' => '2020-02-10T05:01:45Z',
                'last_update' => '2020-02-14T01:27:15Z',
                'status' => 'CANCELLED',
                'updated_by' => 30
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '251021833'],
            [
                'number' => '251021833',
                'type' => 'NONDOC',
                'date_created' => '2020-02-15T05:19:15Z',
                'last_update' => '2020-02-17T22:22:44Z',
                'status' => 'SCHEDULED',
                'updated_by' => 30
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '279150858'],
            [
                'number' => '279150858',
                'type' => 'NONDOC',
                'date_created' => '2020-01-28T22:16:57Z',
                'last_update' => '2020-02-08T14:41:47Z',
                'status' => 'DELIVERED',
                'updated_by' => 30
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '233874385'],
            [
                'number' => '233874385',
                'type' => 'NONDOC',
                'date_created' => '2020-02-02T01:52:00Z',
                'last_update' => '2020-02-09T00:08:45Z',
                'status' => 'DELIVERED',
                'updated_by' => 31
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '249498391'],
            [
                'number' => '249498391',
                'type' => 'NONDOC',
                'date_created' => '2020-02-02T15:40:09Z',
                'last_update' => '2020-02-16T05:05:01Z',
                'status' => 'DELIVERED',
                'updated_by' => 31
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '284184080'],
            [
                'number' => '284184080',
                'type' => 'DOC',
                'date_created' => '2020-02-04T00:07:41Z',
                'last_update' => '2020-02-15T05:43:05Z',
                'status' => 'IN FACILITY',
                'updated_by' => 32
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '240361756'],
            [
                'number' => '240361756',
                'type' => 'NONDOC',
                'date_created' => '2020-01-29T00:31:03Z',
                'last_update' => '2020-02-16T16:51:37Z',
                'status' => 'IN TRANSIT',
                'updated_by' => 30
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '288457269'],
            [
                'number' => '288457269',
                'type' => 'NONDOC',
                'date_created' => '2020-02-01T16:38:41Z',
                'last_update' => '2020-02-04T13:32:59Z',
                'status' => 'IN TRANSIT',
                'updated_by' => 30
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '208868966'],
            [
                'number' => '208868966',
                'type' => 'DOC',
                'date_created' => '2020-02-11T02:24:49Z',
                'last_update' => '2020-02-18T02:55:18Z',
                'status' => 'DELIVERED',
                'updated_by' => 30
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '327262432'],
            [
                'number' => '327262432',
                'type' => 'NONDOC',
                'date_created' => '2020-01-29T14:51:46Z',
                'last_update' => '2020-02-09T18:11:59Z',
                'status' => 'DESTROYED',
                'updated_by' => 31
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '305440058'],
            [
                'number' => '305440058',
                'type' => 'NONDOC',
                'date_created' => '2020-01-30T22:14:27Z',
                'last_update' => '2020-02-15T11:02:49Z',
                'status' => 'IN FACILITY',
                'updated_by' => 31
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '305585398'],
            [
                'number' => '305585398',
                'type' => 'NONDOC',
                'date_created' => '2020-01-28T11:25:55Z',
                'last_update' => '2020-02-07T23:47:05Z',
                'status' => 'DELIVERED',
                'updated_by' => 32
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '310723760'],
            [
                'number' => '310723760',
                'type' => 'NONDOC',
                'date_created' => '2020-02-01T13:55:45Z',
                'last_update' => '2020-02-09T00:22:17Z',
                'status' => 'CANCELLED',
                'updated_by' => 32
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '313612598'],
            [
                'number' => '313612598',
                'type' => 'NONDOC',
                'date_created' => '2020-02-03T12:22:17Z',
                'last_update' => '2020-02-09T23:54:40Z',
                'status' => 'DELIVERED',
                'updated_by' => 32
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '206955218'],
            [
                'number' => '206955218',
                'type' => 'NONDOC',
                'date_created' => '2020-01-31T16:08:57Z',
                'last_update' => '2020-01-31T23:50:28Z',
                'status' => 'UNKNOWN',
                'updated_by' => 32
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '313435520'],
            [
                'number' => '313435520',
                'type' => 'NONDOC',
                'date_created' => '2020-02-10T07:25:54Z',
                'last_update' => '2020-02-11T05:23:19Z',
                'status' => 'DELIVERED',
                'updated_by' => 30
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '373042425'],
            [
                'number' => '373042425',
                'type' => 'NONDOC',
                'date_created' => '2020-02-11T11:18:50Z',
                'last_update' => '2020-02-02T11:17:26Z',
                'status' => 'CANCELLED',
                'updated_by' => 32
            ]
        );
        Shipment::firstOrCreate(
            ['number' => '256542236'],
            [
                'number' => '256542236',
                'type' => 'DOC',
                'date_created' => '2020-01-31T20:07:35Z',
                'last_update' => '2020-02-02T17:16:09Z',
                'status' => 'DELIVERED',
                'updated_by' => 30
            ]
        );
    }
}
