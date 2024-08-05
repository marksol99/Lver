<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marken</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <header>
            <h1>Vølkommen</h1>
        </header>
   </head>
   <body>
   <form action="welcomen.php" method="POST">
        Fornavn: <input type="text" name="fornavn"><br>
        Etternavn: <input type="text" name="etternavn"><br>
        Fødselsnummer: <input type="text" name="fødselsnummer"><br>
        Adresse: <input type="text" name="adresse"><br>
        Postnummer: <input type="text" name="postnummer"><br>
        Poststed: <input type="text" name="poststed"><br>
        Telefonnummer: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>

        <input type="submit">

        

   </body>
</html>