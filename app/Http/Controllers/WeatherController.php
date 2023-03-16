<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeatherRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        return view('weather');
    }

    public function getWeather(WeatherRequest $request)
    {

        $city = $request->input('city');
        $apiKey = config('weather.openweathermap_api_key');
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric");
        $weatherData = $response->json();

        return view('weather', compact('weatherData'));
    }

}
