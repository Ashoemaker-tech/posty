<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Store notifications
    public function store(Request $request, Post $post)
    {
        
        if (!$post->comments()->onlyTrashed()->where('user_id', $request->user()->id)->count()) {
        }
    }
}
