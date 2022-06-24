@extends('layouts.main')

@section('content')
<div id="main">
    @foreach ($movies as $movie)
    <div id="single-card">
        <ul>
            <li><span>Titolo:</span> {{$movie->title}}</li>
            <li><span>Titolo originale:</span> {{$movie->original_title}}</li>
            <li><span>Paese:</span> {{$movie->nationality}}</li>
            <li><span>Anno di produzione:</span> {{$movie->date}}</li>
            <li><span>Voto:</span> {{$movie->vote}}</li>
        </ul>
    </div>
    @endforeach
</div>
@endsection