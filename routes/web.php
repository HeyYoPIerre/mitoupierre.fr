<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

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

Auth::routes([
    'login' => true,
    'register' => false,
    'reset' => true, // Réinitialisation de mot de passe
    'verify' => false, // Vérification d'email
]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::middleware('auth')->group(function () {
    // Mes routes protégées par mot de passe
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/admin/photos', [PhotoController::class, 'index'])->name('photos.index');
    Route::post('/admin/photos', [PhotoController::class, 'store'])->name('photos.store');
    Route::get('/admin/photos/create', [PhotoController::class, 'create'])->name('photos.create');
    Route::delete('/admin/photos/{image}', [PhotoController::class, 'destroy'])->name('photos.destroy');

});

