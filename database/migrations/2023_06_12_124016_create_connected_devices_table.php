<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectedDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connected_devices', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('ward_of_origin');
            $table->integer('room');
            $table->string('patient_name');
            $table->boolean('status')->default(1);
            $table->foreign("code")->references('id')->on('devices')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('connected_devices');
    }
}
