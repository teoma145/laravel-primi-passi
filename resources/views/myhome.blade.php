<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            .centrale{
                color:blue;
                width:25%;
                margin: 0 auto;
            }
        </style>

        <style>
            
        </style>
    </head>
    <body class="antialiased">
        <div class='centrale'>
            <h1>Primi passi in Laravel</h1>
            <h3>Hello World</h3>
            <h5>{{$name}}</h5>
            <h5>{{$age}}</h5>
            <a href="{{route('info')}}">clicca per andare a info</a>
        </div>
    </body>
</html>
