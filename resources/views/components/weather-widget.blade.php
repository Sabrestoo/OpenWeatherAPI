<div>
    <div class="w-128 mx-auto bg-gray-900 text-white text-sm rounded overflow-hidden">

        {{--                Current Weather                 --}}
        <div class="current-weather relative">
            <div class="flex items-center justify-between px-4 py-6">
                <div class="flex-col items-center">
                    <div class="text-5xl font-semibold">{{ round($currentWeather['current']['temp']) }}&#176;C</div>
                    <div class="text-gray-400">Feels like {{ round($currentWeather['current']['feels_like']) }}&#176;C</div>
                </div>
                {{--                    Description                 --}}
                <div class="ml-5">
                    <div class="font-semibold">{{ ucfirst($currentWeather['current']['weather'][0]['description']) }}</div>
                    <div class="text-gray-400">Berlin, Germany</div>
                </div>

                <div class="">
                    <img src="http://openweathermap.org/img/wn/{{ $currentWeather['current']['weather'][0]['icon'] }}@2x.png" alt="weather icon">
                </div>
            </div>
            <button class="absolute right-0 bottom-0 mb-2 mr-2 text-xs">Toggle</button>

        </div>
        {{--                Future Weather                  --}}
        <ul class="future-weather bg-gray-700 px-4 py-7 space-y-8">
            <li class="grid grid-cols-weather items-center">
                <div class="text-gray-400">Tue</div>
                <div class="flex items-center">
                    <div class="">icon</div>
                    <div class="">Clear Sky</div>
                </div>
                <div class="text-right text-xs">
                    <div>5&#176;C</div>
                    <div>4&#176;C</div>
                </div>
            </li>

            <li class="grid grid-cols-weather items-center">
                <div class="text-gray-400">Tue</div>
                <div class="flex items-center">
                    <div class="">icon</div>
                    <div class="">Clear Sky</div>
                </div>
                <div class="text-right text-xs">
                    <div>5&#176;C</div>
                    <div>4&#176;C</div>
                </div>
            </li>

            <li class="grid grid-cols-weather items-center">
                <div class="text-gray-400">Tue</div>
                <div class="flex items-center">
                    <div class="">icon</div>
                    <div class="">Clear Sky</div>
                </div>
                <div class="text-right text-xs">
                    <div>5&#176;C</div>
                    <div>4&#176;C</div>
                </div>
            </li>

            <li class="grid grid-cols-weather items-center">
                <div class="text-gray-400">Tue</div>
                <div class="flex items-center">
                    <div class="">icon</div>
                    <div class="">Clear Sky</div>
                </div>
                <div class="text-right text-xs">
                    <div>5&#176;C</div>
                    <div>4&#176;C</div>
                </div>
            </li>

            <li class="grid grid-cols-weather items-center">
                <div class="text-gray-400">Tue</div>
                <div class="flex items-center">
                    <div class="">icon</div>
                    <div class="">Clear Sky</div>
                </div>
                <div class="text-right text-xs">
                    <div>5&#176;C</div>
                    <div>4&#176;C</div>
                </div>
            </li>

        </ul>

    </div>
</div>
