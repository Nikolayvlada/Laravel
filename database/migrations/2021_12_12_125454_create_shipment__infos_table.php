<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment__infos', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->integer('shipment_id');
            $table->string('item_name')->nullable();
            $table->string('hs_code')->nullable();
            $table->string('qty')->nullable();
            $table->string('type')->nullable();

            $table->decimal('unit_price')->nullable();
            $table->decimal('subtotal')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipment__infos');
    }
}
