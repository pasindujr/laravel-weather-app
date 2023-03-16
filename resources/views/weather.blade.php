<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container h-100 text-center mx-auto justify-content-center">
    <div class="row h-100 justify-content-center align-items-center my-auto mt-4">
        <div class="col-md-6">
            <h2>Get Weather Report</h2>
            <form class="mb-3" method="post" action="{{ route('weather.getWeather') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="Enter city or country name">
                    @if ($errors->has('city'))
                        <span class="text-danger">{{ $errors->first('city') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>

            @isset($weatherData)
                @if($weatherData['cod'] != 404)

                    <div class="card">
                        <h5 class="card-header">Weather Report for {{ $weatherData['name'] }}</h5>
                        <div class="card-body">
                            <p><strong>Temperature:</strong> {{ $weatherData['main']['temp'] }}°C</p>
                            <p><strong>Weather:</strong> {{ $weatherData['weather'][0]['description'] }}</p>
                            <p><strong>Humidity:</strong> {{ $weatherData['main']['humidity'] }}%</p>
                            <p><strong>Wind Speed:</strong> {{ $weatherData['wind']['speed'] }} km/h</p>
                        </div>
                    </div>
                @else
                    <div class="panel card-body">
                        <div class="card-title">
                            <h3 class="text-warning">Weather Report not found</h3>
                        </div>
                    </div>
                @endif
            @endisset
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
