<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OpenWeatherComponent extends Component
{
    public $weather_icon;
    public $weather_desc;
    public $humid_num;
    public $temp_num;

    public function getWeather() {
        // https://api.openweathermap.org/data/2.5/weather?lat=14.6333&lon=121.1&appid=829f9766c6d78c97c199003b10fc4f7e
    }

    public function try() {
        dd('clicked');
    }

    public function render()
    {
        return view('livewire.open-weather-component');
    }
}
