<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function show(User $user)
{
    $articles = $user->announcements;

    return view('authors.show', compact('user', 'articles'));
}
}
