<?php

namespace Database\Seeders;

use App\Models\OpenWeather;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use RakibDevs\Weather\Weather;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wt = new Weather();
        $data = $wt->getCurrentByCity('City of Marikina');

        $main = $data->weather[0]->main;
        $desc = $data->weather[0]->description;
        $icon = $data->weather[0]->icon;
        $humi = $data->main->humidity;
        $temp = $data->main->temp;

        OpenWeather::create([
            'weather_main'=>$main,
            'weather_desc'=>$desc,
            'weather_icon'=>$icon,
            'humidity_reading'=>$humi,
            'temperature_reading'=>$temp,
        ]);
    }
}
