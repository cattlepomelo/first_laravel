<?php

namespace App\Http\Controllers;

use App\Models\Post;  // Izmanto Post modeli
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Metode, kas izvada visus postus
    public function showPosts()
    {
        // Iegūst visus ierakstus no "posts" tabulas
        $posts = Post::all();

        // Atgriež skatu un padod 'posts' mainīgo skatā
        return view('posts.index', compact('posts'));
    }
}
