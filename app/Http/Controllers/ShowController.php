<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Location;
use App\Models\Representation;
use App\Models\Representation_user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;



class ShowController extends Controller
{
    public function index(Request $request)
    {
        // Récupérer les critères de tri depuis la requête
        $sortBy = $request->input('sortBy', 'title'); // Par défaut, trier par titre
        $sortDirection = $request->input('sortDirection', 'asc'); // Par défaut, trier en ordre croissant

        // Récupérer les spectacles en fonction des critères de tri
        $query = Show::query();

        // Filtrer par localisation si une localisation est sélectionnée
        $locationId = $request->input('location_id');
        if ($locationId) {
            $query->where('location_id', $locationId);
        }

        // Filtrer par fourchette de prix si des valeurs min et max sont fournies
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        if ($minPrice !== null && $maxPrice !== null) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        }

        $shows = $query->orderBy($sortBy, $sortDirection)->get();

        // Récupérer toutes les localisations pour les filtres
        $locations = Location::all();

        return view('shows.index', compact('shows', 'locations'));
    }

    public function reserve($id)
    {
        try {
            // Représentation spécifique à réserver
            $representation = Representation::findOrFail($id);
    
            return view('shows.reserve', compact('representation'));
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'La représentation spécifiée n\'existe pas.');
        }
    }


    public function storeReservation(Request $request, $id)
{
    // Valider les données de la requête
    $request->validate([
        'places' => 'required|integer|min:1', // Modifier 'place_number' en 'places'
    ]);

    // Vérifier si le numéro de place spécifié est disponible pour la représentation
    $representation = Representation::findOrFail($id);

    // Vérifier si la place spécifiée est déjà réservée pour cette représentation
    $reservedPlaceExists = Representation_user::where('representation_id', $id)
        ->where('places', $request->places)
        ->exists();

    if ($reservedPlaceExists) {
        return redirect()->back()->with('error', 'La place spécifiée est déjà réservée pour cette représentation.');
    }

    // Créer une nouvelle réservation
    $reservation = new Representation_user();
    $reservation->representation_id = $id;
    $reservation->user_id = Auth::id();
    $reservation->places = $request->places;
    $reservation->save();

    return redirect()->route('shows.index')->with('success', 'Réservation effectuée avec succès.');
}

public function userReservations()
{
    // Récupérer les réservations de l'utilisateur connecté
    $userId = auth()->id();
    $reservations = Representation_user::where('user_id', $userId)->with('representation')->get();

    return view('shows.user_reservations', compact('reservations'));
}

    
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Recherche dans les champs 'title' et 'description'
        $shows = Show::where('title', 'like', "%$query%")
                     ->orWhere('description', 'like', "%$query%")
                     ->get();

        // Récupérer toutes les localisations pour les filtres
        $locations = Location::all();

        return view('shows.index', compact('shows', 'locations'));
    }

    public function create()
    {
        return view('shows.create');
    }

    public function store(Request $request)
{
    try {
        $validatedData = $request->validate([
            'slug' => 'required',            
            'title' => 'required',
            'description' => 'required',
            'poster_url' => 'required',
            'location_id' => 'required',
            'price' => 'required|numeric',
        ]);

        Show::create($validatedData);

        return redirect()->route('shows.index')->with('success', 'Spectacle ajouté avec succès.');
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
}


    public function edit($id)
    {
        $show = Show::findOrFail($id);
        return view('shows.edit', compact('show'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'poster_url' => 'required',
            'location_id' => 'required',
            'bookable' => 'required',
            'price' => 'required|numeric',
        ]);

        $show = Show::findOrFail($id);
        $show->update($validatedData);

        return redirect()->route('shows.index')->with('success', 'Spectacle mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $show = Show::findOrFail($id);
        $show->delete();

        return redirect()->route('shows.index')->with('success', 'Spectacle supprimé avec succès.');
    }
}
