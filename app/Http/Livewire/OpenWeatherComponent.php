<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\OpenWeather;
use RakibDevs\Weather\Weather;

class OpenWeatherComponent extends Component
{
    public $weather_icon;
    public $weather_main;
    public $weather_desc;
    public $humid_num;
    public $temp_num;
    public $time;

    public function resetVariables() {
        $this->weather_icon = null;
        $this->weather_main = null;
        $this->weather_desc = null;
        $this->humid_num = null;
        $this->temp_num = null;
        $this->time = null;
    }

    public function loadVariables() {
        $openweatherdata = OpenWeather::select('id','weather_main','weather_desc','weather_icon','humidity_reading','temperature_reading', 'created_at')->orderBy('created_at','desc')->first();
        $this->weather_icon = $openweatherdata->weather_icon;
        $this->weather_main = $openweatherdata->weather_main;
        $this->weather_desc = $openweatherdata->weather_desc;
        $this->humid_num = $openweatherdata->humidity_reading;
        $this->temp_num = $openweatherdata->temperature_reading;
        $this->time = \Carbon\Carbon::parse($openweatherdata->created_at)->format('g:i a');
    }

    public function refreshWeather() {
        $this->resetVariables();
        $this->loadVariables();
    }

    public function render()
    {
        return view('livewire.open-weather-component',[
            'weather_icon' => $this->weather_icon,
            'weather_main' => $this->weather_main,
            'weather_desc' => $this->weather_desc,
            'humid_num' => $this->humid_num,
            'temp_num' => $this->temp_num,
            'time' => $this->time,
        ]);
    }
}
