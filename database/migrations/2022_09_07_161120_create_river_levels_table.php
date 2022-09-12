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
        Schema::create('river_levels', function (Blueprint $table) {
            $table->id();
            // river status (from python)
            // river level (from python)
            // year = 2022 (carbon auto year)
            // month = April (carbon auto month)
            // day = 18 (carbon auto day)
            // time = 4:00 pm (carbon auto time)
            // week = Monday (carbon auto week)
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
        Schema::dropIfExists('river_levels');
    }
};
