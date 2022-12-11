<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function index() {

        $posts = Post::latest()->with(['user', 'likes', 'comments'])->paginate(20);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }
    public function show  (Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'body' => 'required'
        ]);
        
        $request->user()->posts()->create($request->only('body'));
        
        return back();
    }

    public function update  (Post $post, Request $request) {
        $formField = $request->validate([
            'body' => 'required'
        ]);
        $post->update($formField);
        return back();
        }

    public function destroy(Post $post) {

        Gate::authorize('delete', $post);

        $post->delete();

        return back();
    }
}
