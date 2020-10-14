<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pickUpAddress');
            $table->string('Name');
            $table->string('PhoneNumber');
            $table->string('pickUpDate');
            $table->string('pickUpTime');
            $table->string('NumberOFLabour');
            $table->string('DropoffAddress');
            $table->string('VehicleType');
            $table->string('Price');
            $table->string('comment');
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
        Schema::dropIfExists('booking');
    }
}
