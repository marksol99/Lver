<!DOCTYPE html>
<html class="text-light bg-dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                        <a class="nav-link" href="{{ url('/') }}">Skjema</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>



    {{-- Forsøk på å lage skjema som postes til databasen --}}

    <form class="bg-dark text-light" action="{{ route('person.store')}}" method="POST">
        @csrf
        <div class="mb-3">

            <label for="formGroup1" class="form-label">Fødselsnummer </label>
            <input type="text" name="personalId" required>
        </div>
        <div class="mb-3">
            <label for="formGroup2" class="form-label">Fornavn </label>
            <input type="text" name="firstName" required>
        </div>
        <div class="mb-3">
            <label for="formGroup3" class="form-label">Etternavn</label>
            <input type="text" name="lastName" required>

        </div>

        <div class="mb-3">
            <label for="formGroup4" class="form-label">Telefon nummer</label>
            <input type="text" name="phonenumber" required>
        </div>
        <div class="mb-3">
            <label for="formGroup5" class="form-label">Kjønn</label>
            <select name="gender">
                <option value="mann">Mann</option>
                <option value="kvinne">Kvinne</option>
                <option value="annet">Annet</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="formGroup6" class="form-label">E-Mail</label>
            <input type="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="formGroup7" class="form-label">Adresse</label>
            <input type="text" name="address" required>
        </div>
        <div class="mb-3">
            <label for="formGroup8" class="form-label">Postnr.</label>
            <input type="number" name="postCode" required>
        </div>
        <div class="mb-3">
            <label for="formGroup9" class="form-label">Poststed</label>
            <input type="text" name="place" required>
        </div>
        <button type="submit">Send inn</button>
    </form>


</body>

</html>