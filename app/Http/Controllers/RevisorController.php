<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BecomeRevisor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;


class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        return view ('revisor.index' , compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato correttamente');
    }

    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio riufiutato correttamente');
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'Complimenti hai richiesto di diventare revisore')->with('status', 'success');
    }
    
    public function makeRevisor(User $user){
        Artisan::call('presto:MakeUserRevisor', ["email" => $user->email]);
        
        $message = "Complimenti {$user->name}, ora sei un revisore. Puoi accettare o rifutare gli articoli inseriti. Hai una grossa responsabilità. Non sprecarla!";
        
        return redirect('account')->with('message', $message)->with('status', 'success');
    }
    
    
}
