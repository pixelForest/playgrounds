<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uniques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('answer');
            $table->timestamps();
        });

        Schema::create('response_unique', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('response_id')->unsigned()->index();
            $table->foreign('response_id')->references('id')->on('responses')->onDelete('cascade');
            $table->integer('unique_id')->unsigned()->index();
            $table->foreign('unique_id')->references('id')->on('uniques')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uniques');
        Schema::dropIfExists('response_unique');
    }
}
