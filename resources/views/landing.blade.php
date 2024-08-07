<!DOCTYPE html>
<html class="text-light bg-dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Marken</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Marken</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/landing') }}">Vær</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/form') }}">Skjema</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="dropdown text-light bg-dark d-flex align-items-center ">
            <h1 class="me-2">Værmelding for</h1> <button class="btn btn-secondary dropdown-toggle d-inline p-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Ålesund</button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Bergen</a></li>
                <li><a class="dropdown-item" href="#">Oslo</a></li>
            </ul>
        </div>

    </header>

    <table class="table table-hover ">
        <thead>
            <tr>
                <th class="text-light bg-dark">
                    Temperatur
                </th>
                <th class="text-light bg-dark">
                    Vindhastighet
                </th>
                <th class="text-light bg-dark">
                    Neste time
                </th>

            </tr>
        </thead>
        <tbody id="tableRows"></tbody>
    </table>


    {{--Lager tabell til å vise værmelding fra yr--}}
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


                    rows += `<tr><td class="text-light bg-dark">${airTemp}</td><td class="text-light bg-dark">${windSpeed}</td><td class="text-light bg-dark">${weatherNextHour}</td>`;
                } else {
                    rows += `<tr><td>Ingen Data</td></tr>`;
                }
                document.getElementById("tableRows").innerHTML = rows;
            })
            .catch(error => console.log(error));
    </script>
</body>

</html>