@extends('template.templatePage')

@section('title', 'Movie list')

@section('content')
<body>
    <div class="container">

        <h1>Film da vedere</h1>
        
        <ul>
            @foreach ($movie as $movie)
                <li class="tooltip">
                    <span class="movie-title">{{ $movie->title }}</span>
                    <span class="tooltiptext"> Titolo originale: {{ $movie->original_title }} </span>
                
                    <span class="movie-voto">Gradimento: {{ $movie->vote }} </span>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
@endsection

