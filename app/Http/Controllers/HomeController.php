<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'categories' => Category::limit(8)->get(),
            'blogs' => Blog::limit(3)->latest()->get()
        ]);
    }
}
