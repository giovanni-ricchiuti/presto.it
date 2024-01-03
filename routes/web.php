<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');

/* Route::resource('announcements', App\Http\Controllers\AnnouncementController::class)->middleware(['auth', 'verified']); */
Route::resource('announcements', App\Http\Controllers\AnnouncementController::class)->except(['show']);
Route::get('announcements/{announcement}', [App\Http\Controllers\AnnouncementController::class, 'show'])->name('announcements.show')->middleware(['auth', 'verified']);


Route::get('/categoria/{category}', [App\Http\Controllers\PageController::class, 'showCategory'])->name('showCategory');

// Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');

/* Sezione revisore */
Route::get('revisor/home', [App\Http\Controllers\RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('accetta/annuncio/{announcement}', [App\Http\Controllers\RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');
Route::patch('rifiuta/annuncio/{announcement}', [App\Http\Controllers\RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');
Route::get('/richiesta/revisore', [App\Http\Controllers\RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/rendi/revisore/{user}', [App\Http\Controllers\RevisorController::class, 'makeRevisor'])->name('make.revisor');

/* Sezione annunci per utente */
Route::get('/author/{user}', [App\Http\Controllers\AuthorController::class, 'show'])->name('author.show');

Route::get('/search', [App\Http\Controllers\PageController::class, 'searchAnnouncements'])->name('announcements.search');

Route::get('/auth/redirect', function () { return Socialite::driver('google')->redirect();})->name('login.google');

Route::get('/auth/callback', function () {    $user = Socialite::driver('google')->user();  $user->token;  });

Route::get('auth/google', [App\Http\Controllers\LoginController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', [App\Http\Controllers\LoginController::class, 'handleGoogleCallback']);

/* Amministrazione */

Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'showUsers'])->middleware('admin')->name('admin.users');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/manage', [App\Http\Controllers\AdminController::class, 'manageUsers'])->name('admin.manage');
    Route::put('/admin/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/destroy/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
});

Route::post('/lingua/{lang}', [App\Http\Controllers\PageController::class, 'setLanguage'])->name('set_language_locale');