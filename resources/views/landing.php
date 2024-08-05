<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Marken</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <form class="container-fluid justify-content-start">
                <button class="btn btn-outline-success me-2" type="button" href="{{ url('/landing') }}">Main button</button>
                <a href="{{ url('/landing') }}">
                    <button class="btn btn-sm btn-outline-secondary" type="button">button </button>
                </a>
            </form>

        </nav>
        <div class="dropdown">
            <h1>Værmelding for</h1> <button class="btn btn-secondary dropdown-toggle" style="float: right;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Ålesund</button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Bergen</a></li>
                <li><a class="dropdown-item" href="#">Oslo</a></li>
            </ul>
        </div>

    </header>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>
                    Temperatur
                </th>
                <th>
                    Vindhastighet
                </th>
                <th>
                    Neste time
                </th>
                <th>
                    Oppdatert
                </th>
            </tr>
        </thead>
        <tbody id="tableRows"></tbody>
    </table>

    <script>
        fetch("https://api.met.no/weatherapi/locationforecast/2.0/compact?lat=51.5&lon=0")
            .then(response => response.json())
            .then(data => {
                const timeseries = data.properties.timeseries;
                let rows = "";
                if (timeseries.length > 0) {
                    const entry = timeseries[0]
                    const windSpeed = entry.data.instant.details.wind_speed;
                    const airTemp = entry.data.instant.details.air_temperature;
                    const weatherNextHour = entry.data.next_1_hours.summary.symbol_code ? entry.data.next_1_hours.summary.symbol_code : "N/A";
                    const lastUpdate = entry.time;


                    rows += `<tr><td>${airTemp}</td><td>${windSpeed}</td><td>${weatherNextHour}</td><td>${lastUpdate}</td></tr>`;
                } else {
                    rows += `<tr><td>Ingen Data</td></tr>`;
                }
                document.getElementById("tableRows").innerHTML = rows;
            })
            .catch(error => console.log(error));
    </script>



</body>

</html>