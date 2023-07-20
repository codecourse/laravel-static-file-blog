<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sheets\Facades\Sheets;

class PostIndexController extends Controller
{
    public function __invoke()
    {
        dd(Sheets::collection('posts')->all());

        return view('posts.index');
    }
}
