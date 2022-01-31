@extends('layouts.main-layout')
@section('content')
    
    <h2>lista movies</h2>

    <ul>

        @foreach ($movies as $movie)
            <li>
                <b>
                    <a href="{{route('show', $movie ->id)}}">
                            {{$movie -> title }}  {{$movie -> release}}
                    </a>
                </b>
            </li>
        @endforeach

    </ul>
@endsection