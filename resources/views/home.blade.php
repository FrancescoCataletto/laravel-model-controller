@extends('layouts.main')

@section('content')
@foreach ($movies as $movie)
<div>
    <ul>
        <li>{{$movie->title}}</li>
        <li>{{$movie->original_title}}</li>
        <li>{{$movie->nationality}}</li>
        <li>{{$movie->date}}</li>
        <li>{{$movie->vote}}</li>
    </ul>
</div>
@endforeach

@endsection