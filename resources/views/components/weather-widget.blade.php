<div>
    <div class="w-128 mx-auto bg-gray-900 text-white text-sm rounded overflow-hidden">

        {{--                Current Weather                 --}}
        <div class="current-weather relative">
            <div class="flex items-center justify-between px-4 py-6">
                <div class="flex-col items-center">
                    <div class="text-5xl font-semibold">{{ round($weather['current']['temp']) }}&#176;C</div>
                    <div class="text-gray-400">Feels like {{ round($weather['current']['feels_like']) }}&#176;C</div>
                </div>
                {{--                    Description                 --}}
                <div class="ml-5">
                    <div class="font-semibold">{{ ucfirst($weather['current']['weather'][0]['description']) }}</div>
                    <div class="text-gray-400">Berlin, Germany</div>
                </div>

                <div class="">
                    <img src="http://openweathermap.org/img/wn/{{ $weather['current']['weather'][0]['icon'] }}@2x.png" alt="weather icon">
                </div>
            </div>
            <button class="absolute right-0 bottom-0 mb-2 mr-2 text-xs">Toggle</button>

        </div>
        {{--                Future Weather                  --}}
        <ul class="future-weather bg-gray-700 px-4 py-7 space-y-8">
            @foreach(array_slice($futureWeather,0,5) as $dailyWeather)
                <li class="grid grid-cols-weather items-center">
                    <div class="text-gray-400">{{ strtoupper(\Carbon\Carbon::createFromTimestamp($dailyWeather['dt'])->format('D')) }}</div>
                    <div class="flex items-center">
                        <div class="">
                            <img src="http://openweathermap.org/img/wn/{{ $dailyWeather['weather'][0]['icon'] }}.png" alt="weather icon">
                        </div>
                        <div class="">{{ ucfirst($dailyWeather['weather'][0]['description']) }}</div>
                    </div>
                    <div class="text-right text-xs">
                        <div>{{ round($dailyWeather['temp']['max']) }}&#176;C</div>
                        <div>{{ round($dailyWeather['temp']['min']) }}&#176;C</div>
                    </div>
                </li>
            @endforeach

        </ul>

    </div>
</div>
