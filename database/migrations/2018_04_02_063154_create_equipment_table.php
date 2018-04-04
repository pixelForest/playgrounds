<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('answer');
            $table->timestamps();
        });

        Schema::create('equipment_response', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('response_id')->unsigned()->index();
            $table->foreign('response_id')->references('id')->on('responses')->onDelete('cascade');
            $table->integer('equipment_id')->unsigned()->index();
            $table->foreign('equipment_id')->references('id')->on('equipment')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
        Schema::dropIfExists('equipment_response');
    }
}
