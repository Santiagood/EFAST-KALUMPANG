<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenWeather extends Model
{
    use HasFactory;

    protected $fillable = [
        'weather_main',
        'weather_desc',
        'weather_icon',
        'humidity_reading',
        'temperature_reading',
        // 'date_time',
    ];
}
