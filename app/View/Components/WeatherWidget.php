<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WeatherWidget extends Component
{

    public $weather;
    public $futureWeather;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($weather, $futureWeather)
    {
        $this->weather = $weather;
        $this->futureWeather = $futureWeather;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.weather-widget');
    }
}
