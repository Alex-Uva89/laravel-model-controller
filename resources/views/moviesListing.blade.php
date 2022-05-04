<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">

        <h1>Film da vedere</h1>
        
        <ul>
            @foreach ($movie as $movie)
                <li>
                    <span> {{ $movie->title }}</span>
                    <span class="movie-voto">Gradimento: {{ $movie->vote }} </span>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>

