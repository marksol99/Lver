<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marken</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   </head> 
   <body>
            <header>
                <div class="navbar" id="topNav">
                    <a href="{{ url('/landing') }}">
                    <div class="card">
                        <img src="https://cdn-icons-png.flaticon.com/128/16396/16396870.png">
                        <p>1</p>
                    </div>
                    </a>
                    <div class="card" href="#person">
                        <p>2</p>
                    </div>
                

                </div>
            
            
        </header>
        <form action="welcomen.php" method="POST">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        </form>

   </body>
</html>
