<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'update', 'destroy']);
    }
     
    public function index(Post $post) {
        return view('comments.index', [
            'post' => $post
        ]);
    }
    //
    public function store(Post $post, Request $request) {
        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body' => $request->body
        ]);
        // if ($request->user()->id != $post['user_id']) {
        //      DB::table('notifications')->insert([
        //         'user_id' => $request->user()->id,
        //         'message' =>  $request->user()->name . ' commented on your post'
        //     ]);      
        // 
               
        return redirect('posts');
        
    }

    public function update(Comment $comment, Request $request) {
            $formField = $request->validate([
                'body' =>'required'
            ]);
            $comment->update($formField);
            return back();
            
        }

    public function destroy(Comment $comment) {
        Gate::authorize('delete', $comment);

       $comment->delete(); 
        return back();
    }
}
