<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function showUsers()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }

    public function manageUsers()
    {
        $user = Auth::user();

        if ($user) {
            return view('admin.manage', compact('user'));
        } else {
            return redirect()->route('login');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->back()->with('success', 'Dati utente aggiornati con successo.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.showUsers')->with('success', 'Utente eliminato con successo.');
    }

}

