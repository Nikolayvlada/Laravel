<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentPkgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment__pkgs', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->integer('shipment_id');
            $table->string('qty_pkg')->nullable();
            $table->string('type_pkg')->nullable();
            $table->decimal('lenght_pkg')->nullable();
            $table->decimal('width_pkg')->nullable();
            $table->decimal('height_pkg')->nullable();
            $table->decimal('weight_pkg')->nullable();
            $table->decimal('volume_pkg')->nullable();
            $table->decimal('total_weight')->nullable();
            $table->decimal('charge_pkg')->nullable();
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
        Schema::dropIfExists('shipment__pkgs');
    }
}
