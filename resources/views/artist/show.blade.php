@extends('layouts.main')
@section('title', 'Fiche d\'un artiste')

@section('content')
    <h1>{{ $artist->firstname }} {{ $artist->lastname }}</h1>

    <div><a href="{{ route('artist.edit' ,$artist->id) }}">Modifier</a></div>

<form method="post" action="{{ route('artist.delete', $artist->id) }}">
		@csrf
		<input type="hidden" name="method" value="DELETE">
		<button>Supprimer</button>
</form>

    <nav><a href="{{ route('artist.index') }}">Retour à l'index</a></nav>
@endsection
