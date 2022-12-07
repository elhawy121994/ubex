<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('number', 45);
            $table->string('type', 45);
            $table->timestamp('date_created');
            $table->timestamp('last_update');
            $table->enum('status', [
                'DELIVERED',
                'CANCELLED',
                'IN TRANSIT',
                'SCHEDULED',
                'DESTROYED',
                'UNKNOWN',
                'IN FACILITY'
            ]);
            $table->foreignId('updated_by');

            $table->index(['status', 'date_created']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
