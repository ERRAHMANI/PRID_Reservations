@extends('layouts.app')

@section('content')
    <h1>Tous les spectacles</h1>

    <!-- Formulaire de recherche -->
    <form action="{{ route('shows.search') }}" method="GET">
        <input type="text" name="query" placeholder="Rechercher...">
        <button type="submit">Rechercher</button>
    </form>

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

    <ul>
        @foreach ($shows as $show)
            <li>
                <h2>{{ $show->title }}</h2>
                <p>{{ $show->description }}</p>
                <img src="{{ $show->poster_url }}" alt="{{ $show->title }}">
                <p>Prix : {{ $show->price }}</p>
            </li>
        @endforeach
    </ul>
@endsection
