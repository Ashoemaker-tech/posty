<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
    //
    public function store(Post $post, Request $request) {

        if ($post->commentedBy($request->user())){
            return response(null, 409);
        }

        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body' => $request->body
        ]);

        return back();
        
    }

    public function destroy(Comment $comment, Request $request) {

       $request->user()->comments()->where('id', $comment->id)->delete();
        
        return back();
    }
}
