<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\PostLiked;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    //
    public function index() {
        $user = auth()->user();
        $posts = Post::where('user_id', $user->id)->latest()->with(['likes'])->paginate(20);

        return view('dashboard', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
