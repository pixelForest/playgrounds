<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('gender');
            $table->integer('age')->unsigned();
            $table->string('time_of_day');
            $table->integer('equipment')->unsigned();
            $table->integer('environment')->unsigned();
            $table->integer('features')->unsigned();
            $table->integer('place')->unsigned();
            $table->integer('crowd')->unsigned();
            $table->integer('element')->unsigned();
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
        Schema::dropIfExists('responses');
    }
}
