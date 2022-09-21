<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->text('river_status'); // river status (from python)
            $table->double('river_level'); // river level (from python)
            // $table->integer('year')->default(Carbon::now()->year); // year = 2022 (carbon auto year)
            // $table->text('month')->default( Carbon::now()->translatedFormat('F')); // month = April (carbon auto month)
            // $table->integer('day')->default(Carbon::now()->day); // day = 18 (carbon auto day)
            // $table->text('time')->default(Carbon::now()->format('g:i a')); // time = 4:00 pm (carbon auto time)
            // $table->date('date')->default(Carbon::now()->format('Y-m-d'));
            $table->integer('year');
            $table->string('month');
            $table->integer('day');
            $table->text('time');
            $table->date('date');
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
