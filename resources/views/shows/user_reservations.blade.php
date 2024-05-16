@extends('layouts.app')

@section('content')

    <h1>Mes Réservations</h1>

    @foreach($reservations as $reservation)
        @if ($reservation->representation)
            <div>
                <h2>{{ $reservation->representation->show->title }}</h2>
                <p>Date: {{ $reservation->representation->when }}</p>
                <p>Places: {{ $reservation->places }}</p>
            </div>
        @endif
    @endforeach

@endsection
