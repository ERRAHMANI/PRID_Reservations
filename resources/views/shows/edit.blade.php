@extends('layouts.app')

@section('content')
    <h1>Modifier le spectacle</h1>

    <form action="{{ route('shows.update', $show->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" value="{{ $show->title }}" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4" required>{{ $show->description }}</textarea>
        </div>

        <div>
            <label for="poster_url">URL de l'affiche</label>
            <input type="text" id="poster_url" name="poster_url" value="{{ $show->poster_url }}" required>
        </div>

        <div>
            <label for="location_id">ID de la localisation</label>
            <input type="number" id="location_id" name="location_id" value="{{ $show->location_id }}" required>
        </div>

        <div>
            <label for="bookable">Réservable</label>
            <input type="checkbox" id="bookable" name="bookable" {{ $show->bookable ? 'checked' : '' }}>
        </div>

        <div>
            <label for="price">Prix</label>
            <input type="number" id="price" name="price" value="{{ $show->price }}" required>
        </div>

        <div>
            <button type="submit">Enregistrer les modifications</button>
        </div>
    </form>
@endsection
