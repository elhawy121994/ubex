<?php

namespace Tests\Feature\Http;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShipmentsControllerTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
        $this->seed(DatabaseSeeder::class);
    }

    /**
     *@dataProvider weekDataProvider
     * @return void
     */
    public function testingListStaticsPerWeekSuccessfully($week, $year, $responseData)
    {
        $response = $this->getJson("api/v1/shipments/statics?year={$year}&week={$week}");
        $response->assertStatus(202);
        $response->assertJson($responseData);
    }

    public function weekDataProvider(): array
    {
        return [
            [
                "week" => 6,
                "year" => 2020,
                "response" => [
                    "DELIVERED" => [
                        [
                            "ID" => 16,
                            "Shipment" => "313612598",
                            "Type" => "NONDOC",
                            "DateCreated" => "2020-02-03T12:22:17.000000Z",
                            "LastUpdate" => "2020-02-09T23:54:40.000000Z",
                            "Status" => "DELIVERED",
                            "UpdatedBy" => 32
                        ],
                        [
                            "ID" => 2,
                            "Shipment" => "240374250",
                            "Type" => "NONDOC",
                            "DateCreated" => "2020-02-04T08:47:30.000000Z",
                            "LastUpdate" => "2020-02-11T12:04:57.000000Z",
                            "Status" => "DELIVERED",
                            "UpdatedBy" => 32
                        ],
                        [
                            "ID" => 1,
                            "Shipment" => "262505566",
                            "Type" => "DOC",
                            "DateCreated" => "2020-02-03T22:00:07.000000Z",
                            "LastUpdate" => "2020-02-15T15:25:12.000000Z",
                            "Status" => "DELIVERED",
                            "UpdatedBy" => 32
                        ]
                    ],
                    "CANCELLED" => [],
                    "ONGOING" => [
                        [
                            "ID" => 8,
                            "Shipment" => "284184080",
                            "Type" => "DOC",
                            "DateCreated" => "2020-02-04T00:07:41.000000Z",
                            "LastUpdate" => "2020-02-15T05:43:05.000000Z",
                            "Status" => "IN FACILITY",
                            "UpdatedBy" => 32
                        ]
                    ]
                ]
            ],
            [
                "week" => 5,
                "year" => 2020,
                "responseData" => [
                    "DELIVERED" => [
                        [
                            "ID" => 20,
                            "Shipment" => "256542236",
                            "Type" => "DOC",
                            "DateCreated" => "2020-01-31T20:07:35.000000Z",
                            "LastUpdate" => "2020-02-02T17:16:09.000000Z",
                            "Status" => "DELIVERED",
                            "UpdatedBy" => 30
                        ],
                        [
                            "ID" => 14,
                            "Shipment" => "305585398",
                            "Type" => "NONDOC",
                            "DateCreated" => "2020-01-28T11:25:55.000000Z",
                            "LastUpdate" => "2020-02-07T23:47:05.000000Z",
                            "Status" => "DELIVERED",
                            "UpdatedBy" => 32
                        ],
                        [
                            "ID" => 5,
                            "Shipment" => "279150858",
                            "Type" => "NONDOC",
                            "DateCreated" => "2020-01-28T22:16:57.000000Z",
                            "LastUpdate" => "2020-02-08T14:41:47.000000Z",
                            "Status" => "DELIVERED",
                            "UpdatedBy" => 30
                        ],
                        [
                            "ID" => 6,
                            "Shipment" => "233874385",
                            "Type" => "NONDOC",
                            "DateCreated" => "2020-02-02T01:52:00.000000Z",
                            "LastUpdate" => "2020-02-09T00:08:45.000000Z",
                            "Status" => "DELIVERED",
                            "UpdatedBy" => 31
                        ],
                        [
                            "ID" => 7,
                            "Shipment" => "249498391",
                            "Type" => "NONDOC",
                            "DateCreated" => "2020-02-02T15:40:09.000000Z",
                            "LastUpdate" => "2020-02-16T05:05:01.000000Z",
                            "Status" => "DELIVERED",
                            "UpdatedBy" => 31
                        ]
                    ],
                    "CANCELLED" => [
                        [
                            "ID" => 15,
                            "Shipment" => "310723760",
                            "Type" => "NONDOC",
                            "DateCreated" => "2020-02-01T13:55:45.000000Z",
                            "LastUpdate" => "2020-02-09T00:22:17.000000Z",
                            "Status" => "CANCELLED",
                            "UpdatedBy" => 32
                        ],
                        [
                            "ID" => 12,
                            "Shipment" => "327262432",
                            "Type" => "NONDOC",
                            "DateCreated" => "2020-01-29T14:51:46.000000Z",
                            "LastUpdate" => "2020-02-09T18:11:59.000000Z",
                            "Status" => "DESTROYED",
                            "UpdatedBy" => 31
                        ]
                    ],
                    "ONGOING" => [
                        [
                            "ID" => 10,
                            "Shipment" => "288457269",
                            "Type" => "NONDOC",
                            "DateCreated" => "2020-02-01T16:38:41.000000Z",
                            "LastUpdate" => "2020-02-04T13:32:59.000000Z",
                            "Status" => "IN TRANSIT",
                            "UpdatedBy" => 30
                        ],
                        [
                            "ID" => 13,
                            "Shipment" => "305440058",
                            "Type" => "NONDOC",
                            "DateCreated" => "2020-01-30T22:14:27.000000Z",
                            "LastUpdate" => "2020-02-15T11:02:49.000000Z",
                            "Status" => "IN FACILITY",
                            "UpdatedBy" => 31
                        ],
                        [
                            "ID" => 9,
                            "Shipment" => "240361756",
                            "Type" => "NONDOC",
                            "DateCreated" => "2020-01-29T00:31:03.000000Z",
                            "LastUpdate" => "2020-02-16T16:51:37.000000Z",
                            "Status" => "IN TRANSIT",
                            "UpdatedBy" => 30
                        ]
                    ]
                ]
            ]
        ];
    }
}
