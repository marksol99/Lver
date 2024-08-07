<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Marken</title>

</head>

<body>
    <header>
    </header>
    <div class="navbar" id="topNav">
        <a href="{{ url('/landing') }}">
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/128/16396/16396870.png" alt="sky">
            </div>
        </a>
        <a href="{{ url('/form') }}">
            <div class="card" href="#person">
                <img src="https://cdn-icons-png.flaticon.com/128/13717/13717667.png" alt="skjema ikon">
            </div>
        </a>
    </div>

</body>

</html>