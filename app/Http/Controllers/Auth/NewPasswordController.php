<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    
     public function showChangePasswordForm()
    {
        return view('auth.change-password');
    }
     public function changePassword(Request $request)
     {
         $request->validate([
             'current_password' => 'required',
             'password' => 'required|confirmed|min:8',
         ]);
 
         $user = $request->user();
 
         if (!Hash::check($request->current_password, $user->password)) {
             return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect']);
         }
 
         $user->update(['password' => Hash::make($request->password)]);
 
         return redirect()->route('dashboard')->with('success', 'Password updated successfully');
     }
}
