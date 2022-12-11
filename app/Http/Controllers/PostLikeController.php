<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PostLikeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    //
    public function store(Post $post, Request $request) {

        if ($post->likedBy($request->user())){
            abort(403, 'Unauthorized action');
        }

        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        if (!$post->likes()->onlyTrashed()->where('user_id', $request->user()->id)->count()) {
            if ($request->user()->id != $post['user_id']) {
                 DB::table('notifications')->insert([
                    'user_id' => $request->user()->id,
                    'message' =>  $request->user()->name . ' liked your post'
                ]);      
            }
           
        } 

        return back();
    }

    public function destroy(Post $post, Request $request) {
        $request->user()->likes()->where('post_id', $post->id)->delete();

        return back();
    }
}
