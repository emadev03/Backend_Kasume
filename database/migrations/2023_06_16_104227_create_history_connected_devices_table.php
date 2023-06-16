<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryConnectedDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_connected_devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('connected_device_id')->nullable();
            $table->foreign('connected_device_id')->references('id')->on('connected_devices')->onDelete('cascade')->onUpdate('cascade');
            $table->string('model_name');
            $table->integer('code');
            $table->string('ward_of_origin');
            $table->integer('room');
            $table->string('patient_name');
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
        Schema::dropIfExists('history_connected_devices');
    }
}
