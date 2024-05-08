<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Role;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'login' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'langue' => ['required', 'string', 'in:fr,en'],
        ]);
    
        // Récupérer le rôle 'membre' depuis la base de données
        $memberRole = Role::where('role', 'membre')->first();
    
        // Créer l'utilisateur avec les données fournies par le formulaire
        $user = User::create([
            'login' => $request->login,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'langue' => $request->langue,
        ]);
    
        // Attacher le rôle 'membre' au nouvel utilisateur
        $user->roles()->attach($memberRole);
    
        // Déclencher l'événement Registered pour l'utilisateur nouvellement créé
        event(new Registered($user));
    
        // Connecter l'utilisateur après son inscription
        Auth::login($user);
    
        // Rediriger l'utilisateur vers la page d'accueil
        return redirect(RouteServiceProvider::HOME);
    }
    
}
