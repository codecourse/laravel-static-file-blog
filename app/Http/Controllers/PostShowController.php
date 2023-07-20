<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostShowController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
