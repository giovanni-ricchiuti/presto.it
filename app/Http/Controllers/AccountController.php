<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function index(){

        $user = auth()->user();

        return view('account.index', compact('user'));
    }

    public function settings(){
        return view ('account.settings');
    }

    public function settingsStore(Request $request){
        $user = User::find(auth()->user()->id);

        $user->update([
            'name' => $request->name,
            'password' => $request->password,
        ]);
        return redirect()->back()->with(['success' => 'Dati modificati correttamente.']);
    }
}
