@extends('layouts.app')

@section('content')
    @isset($representation)
        <h1>Réserver une place pour la représentation du spectacle "{{ $representation->show->title }}"</h1>

        @if(session('error'))
            <div>{{ session('error') }}</div>
        @endif

        <form action="{{ route('shows.reservations.store', $representation->id) }}" method="POST">
            @csrf
            <label for="place_number">Numéro de place :</label>
            <input type="number" name="places" id="places" required>
            <button type="submit">Réserver</button>
        </form>
    @else
        <div>La représentation spécifiée n'existe pas.</div>
    @endisset
@endsection
