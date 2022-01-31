@extends('layouts.main-layout')
@section('content')

    <h3>{{$movie -> title}}</h3>
    <h4>{{$movie -> release}}</h4>

@endsection