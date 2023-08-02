<!-- resultados.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Event Results</h2>
        @foreach ($events as $event)
            <div class="event">
                <h3>{{ $event->title }}</h3>
                <p>{{ $event->description }}</p>
                <!-- Display other event details as needed -->
            </div>
        @endforeach
        <button class="btn btn-primary" id="requestInfo">Request Information</button>
    </div>
@endsection
