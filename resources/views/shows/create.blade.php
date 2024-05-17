@extends('layouts.app')

@section('content')
    <h1>Créer un nouveau spectacle</h1>

    <form action="{{ route('shows.store') }}" method="POST">
        @csrf

        <div>
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" required>
        </div>
        <div>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>

        <div>
            <label for="poster_url">URL de l'affiche</label>
            <input type="text" id="poster_url" name="poster_url" required>
        </div>

        <div>
            <label for="location_id">ID de la localisation</label>
            <input type="number" id="location_id" name="location_id" required>
        </div>


        <div>
            <label for="price">Prix</label>
            <input type="number" id="price" name="price" required>
        </div>

        <div>
            <button type="submit">Créer le spectacle</button>
        </div>
    </form>
@endsection
