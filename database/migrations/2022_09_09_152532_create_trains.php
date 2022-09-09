<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 150);
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 12);
            $table->smallInteger('number_carriages')->unsigned();
            $table->boolean('in_time');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains');
    }
}
