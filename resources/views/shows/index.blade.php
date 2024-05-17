@extends('layouts.app')

@section('content')
    <h1>Tous les spectacles</h1>

    <!-- Formulaire de recherche -->
    <form action="{{ route('shows.search') }}" method="GET">
        <input type="text" name="query" placeholder="Rechercher...">
        <button type="submit">Rechercher</button>
    </form>
    <!-- Ajoutez ce lien uniquement si l'utilisateur est un admin -->
    @can('admin')
        <a href="{{ route('shows.create') }}">Ajouter un spectacle</a>
    @endcan

    <!-- Formulaire de tri -->
    <form action="{{ route('shows.index') }}" method="GET">
        <select name="sortBy">
            <option value="title">Trier par nom</option>
            <option value="price">Trier par prix</option>
        </select>
        <select name="sortDirection">
            <option value="asc">Croissant</option>
            <option value="desc">Décroissant</option>
        </select>
        <button type="submit">Trier</button>
    </form>

    <!-- Formulaire de filtre -->
    <form action="{{ route('shows.index') }}" method="GET">
        <!-- Filtre par localisation -->
        <select name="location_id">
            <option value="">Toutes les localisations</option>
            @foreach($locations as $location)
                <option value="{{ $location->id }}">{{ $location->designation }}</option>
            @endforeach
        </select>
        <!-- Filtre par fourchette de prix -->
        <input type="number" name="min_price" placeholder="Prix minimum">
        <input type="number" name="max_price" placeholder="Prix maximum">
        <!-- Bouton pour appliquer les filtres -->
        <button type="submit">Appliquer les filtres</button>
    </form>

    <ul>
        @foreach ($shows as $show)
            <li>
                <h2>{{ $show->title }}</h2>
                <p>{{ $show->description }}</p>
                <img src="{{ $show->poster_url }}" alt="{{ $show->title }}">
                <p>Prix : {{ $show->price }}</p>
                <p>Réservable : {{ $show->bookable == 1 ? 'oui' : 'non' }}</p>
                <!-- Affichage de la localisation -->
                <p>Localisation : {{ $show->location->designation }} ({{ $show->location->address }})</p>
                <!-- Ajouter un lien de réservation -->
                <a href="{{ route('shows.reservations.reserve', $show->id) }}">Réserver une place</a>
                <!-- Ajoutez ces liens uniquement si l'utilisateur est un admin -->
                @can('admin')
                    <a href="{{ route('shows.edit', $show->id) }}">Modifier</a>
                    <form action="{{ route('shows.destroy', $show->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                @endcan
            </li>
        @endforeach
    </ul>

    
@endsection
