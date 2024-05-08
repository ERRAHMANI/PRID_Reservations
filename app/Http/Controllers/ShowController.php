<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show; // Assurez-vous d'importer le modèle Show

class ShowController extends Controller
{
    
    public function index(Request $request)
    {
        // Récupérer les critères de tri depuis la requête
        $sortBy = $request->input('sortBy', 'title'); // Par défaut, trier par titre
        $sortDirection = $request->input('sortDirection', 'asc'); // Par défaut, trier en ordre croissant

        // Récupérer les spectacles en fonction des critères de tri
        $shows = Show::orderBy($sortBy, $sortDirection)->get();

        return view('shows.index', compact('shows'));
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Recherche dans les champs 'title' et 'description'
        $shows = Show::where('title', 'like', "%$query%")
                     ->orWhere('description', 'like', "%$query%")
                     ->get();

        return view('shows.index', compact('shows'));
    }
}
