@extends('layout.app')

@section('main')
    <h1>Viaggi:</h1>
    <ol>
        @foreach ($travelss as $travel)
            <li>{{ $travel->location }}, prezzo: {{ $travel->price }}, partenza: {{ $travel->departure_at }}, ritorno:
                {{ $travel->return_at }}</li>
        @endforeach
    </ol>
@endsection
