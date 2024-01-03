<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        
        $searchOption = $request->input('search_option');

        $results = Announcement::where($searchOption, 'like', "%$query%")->with('user')->paginate(6);

        $announcements = Announcement::where('is_accepted', true)->paginate(6);

        return view('search.results', compact('results', 'announcements'));
    }
}