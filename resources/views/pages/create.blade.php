@extends('layouts.main-layout')
@section('content')
    
    <h1>create new movie</h1>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form>
        <label for="title">titolo:</label>
        <input type="text" name="title" placeholder="title">

        <label for="release">titolo:</label>
        <input type="date" name="release">

        <input type="submit" name="create">
    </form>

@endsection