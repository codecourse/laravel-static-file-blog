<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sheets\Facades\Sheets;

class PostIndexController extends Controller
{
    public function __invoke()
    {
        return view('posts.index', [
            'posts' => Sheets::collection('posts')->all()->sortByDesc('date')->paginate(10)
        ]);
    }
}
