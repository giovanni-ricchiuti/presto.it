<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\AccountController::class, 'index'])->name('account');

Route::get('/author/{user}', [App\Http\Controllers\AuthorController::class, 'show'])->name('author.show');