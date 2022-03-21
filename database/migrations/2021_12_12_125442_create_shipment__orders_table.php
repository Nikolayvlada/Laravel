<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment__orders', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->string('hwb');
            $table->decimal('total_pkg')->nullable();
            $table->decimal('total_volume')->nullable();
            $table->decimal('total_charge')->nullable();
            $table->decimal('total_value')->nullable();
            $table->decimal('total_weight')->nullable();
            $table->string('shipment_type')->nullable();
            $table->string('shipment_service')->nullable();
            $table->string('shipment_reason')->nullable();
            $table->string('sender_company')->nullable();
            $table->string('sender_fullname')->nullable();
            $table->string('sender_country')->nullable();
            $table->string('sender_countrycode')->nullable();
            $table->string('sender_address1')->nullable();
            $table->string('sender_address2')->nullable();
            $table->string('sender_zipcode')->nullable();
            $table->string('sender_city')->nullable();
            $table->string('sender_state')->nullable();
            $table->string('sender_phone')->nullable();
            $table->string('sender_email')->nullable();
            $table->string('receiver_company')->nullable();
            $table->string('receiver_fullname')->nullable();
            $table->string('receiver_country')->nullable();
            $table->string('receiver_countrycode')->nullable();
            $table->string('receiver_address1')->nullable();
            $table->string('receiver_address2')->nullable();
            $table->string('receiver_zipcode')->nullable();
            $table->string('receiver_city')->nullable();
            $table->string('receiver_state')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('receiver_email')->nullable();
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
        Schema::dropIfExists('shipment__orders');
    }
}
