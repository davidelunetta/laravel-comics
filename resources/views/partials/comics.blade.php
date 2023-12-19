@extends('layout')

@section('content')

    <h1>DC Comics</h1>
    <div class="container">
        @foreach($comics as $comic)
            <div class="comic">
                <h2>{{ $comic['title'] }}</h2>
                <img src="{{ $comic['thumb']}}" alt="cover">
                <p>{{ $comic['description'] }}</p>
                <p>Prezzo: {{ $comic['price'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
