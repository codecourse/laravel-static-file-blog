<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostIndexController extends Controller
{
    public function __invoke()
    {
        return view('posts.index');
    }
}
