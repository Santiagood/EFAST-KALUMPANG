<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\OpenWeather;
use RakibDevs\Weather\Weather;

class OpenWeatherSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'openweatherupdate:every30Minutes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'an artisan command to retrieve latest openweather data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
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
