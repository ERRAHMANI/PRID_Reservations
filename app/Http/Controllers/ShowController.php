<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Location;

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
}
