<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ShowController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/shows', [ShowController::class, 'index'])->name('shows.index');
Route::get('/shows/search', [ShowController::class, 'search'])->name('shows.search');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'delete'])->name('profile.delete');
    Route::get('/change-password', [NewPasswordController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/change-password', [NewPasswordController::class, 'changePassword'])->name('password.update');
    
});



Route::get('/artist', [ArtistController::class, 'index'])->name('artist.index');
Route::get('/artist/{id}', [ArtistController::class, 'show'])
	->where('id', '[0-9]+')->name('artist.show');
Route::get('/artist/create', [ArtistController::class, 'create'])->name('artist.create');
Route::post('/artist', [ArtistController::class, 'store'])->name('artist.store');
Route::get('/artist/edit/{id}', [ArtistController::class, 'edit'])
		->where('id', '[0-9]+')->name('artist.edit');
Route::put('/artist/{id}', [ArtistController::class, 'update'])
		->where('id', '[0-9]+')->name('artist.update');
Route::post('/artist/{id}', [ArtistController::class, 'destroy'])
	->where('id', '[0-9]+')->name('artist.delete');



Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register.create');

    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
});
Route::get('/shows', [ShowController::class, 'index'])->name('shows.index');


Route::middleware(['auth'])->group(function () {
    Route::get('/shows/create', [ShowController::class, 'create'])->name('shows.create');
    Route::post('/shows', [ShowController::class, 'store'])->name('shows.store');
    Route::get('/shows/edit/{id}', [ShowController::class, 'edit'])->name('shows.edit');
    Route::put('/shows/{id}', [ShowController::class, 'update'])->name('shows.update');
    Route::delete('/shows/{id}', [ShowController::class, 'destroy'])->name('shows.destroy');
    Route::get('/shows/{id}/reserve', [ShowController::class, 'reserve'])->name('shows.reservations.reserve');
    Route::post('/shows/{id}/reserve', [ShowController::class, 'storeReservation'])->name('shows.reservations.store');
    Route::get('/user/reservations', [ShowController::class, 'userReservations'])->name('user.reservations');
});






require __DIR__.'/auth.php';

