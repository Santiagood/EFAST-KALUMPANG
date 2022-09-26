<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_weather', function (Blueprint $table) {
            $table->id();
            $table->text('weather_main')->nullable();
            $table->text('weather_desc')->nullable();
            $table->text('weather_icon')->nullable();
            $table->integer('humidity_reading')->nullable();
            $table->text('temperature_reading')->nullable();
            // $table->text('date_time')->nullable();
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
        Schema::dropIfExists('open_weather');
    }
};
