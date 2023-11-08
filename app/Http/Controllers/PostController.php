<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('blogs', [
            'title' => 'Blogs',
            'blogs' => Blog::all()
        ]);
    }
}
