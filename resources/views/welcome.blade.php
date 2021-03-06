<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="app">

            <div class="container">
                        <div>
                            <example-component></example-component>
                        </div>
                </div>

            <div class="inner"> Laravel version {{ App::VERSION() }}</div>

        </div>

        <script src="{{ asset('js/app.js') }}" defer></script>


    </body>
</html>
