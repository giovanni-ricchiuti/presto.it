<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;


class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Announcement::query();
    
        if ($request->has('category') && $request->input('category') !== '') {
            $query->where('category_id', $request->input('category'));
        }
    
        if ($request->has('order') && $request->input('order') === 'recenti') {
            $query->orderBy('created_at', 'desc');
        } elseif ($request->has('order') && $request->input('order') === 'vecchi') {
            $query->orderBy('created_at', 'asc');
        }
    
        $announcements = $query->with('user')->where('is_accepted', true)->Paginate(6);
    
        $categories = Category::all();
    
        return view('announcements.index', compact('announcements', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        return view('announcements.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreArticleRequest $request, Announcement $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $article)
    {
        //
    }

   

}