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
        $this->middleware(['auth']);
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

    public function update(Post $post, Request $request) {
            $formField = $request->validate([
                'body' =>'required'
            ]);
            $post->comments()->update($formField);
            return back();
            
        }

    public function destroy(Post $post, Request $request) {

       $post->comments()->delete(); 
        return back();
    }
}
