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
