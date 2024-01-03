<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Category;

class PageController extends Controller
{
    public function home(){

        /* $announcements = Announcement::latest()->take(2)->get(); */

        $announcements = Announcement::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');


        return view('index', compact('announcements'));
    }

    public function showCategory(Category $category) {

        $announcements = $category->announcements()->get();
        return view('categoryShow', compact('announcements', 'category'));

    }

    public function searchAnnouncements (Request $request)
    {
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(6);
        return view('announcements.index', compact ('announcements'));
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }

    
}
