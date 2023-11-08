<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Team;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about()
    {
        return view('about', [
            'title' => 'About',
            'userCount' => User::count(),
            'categoryCount' => Category::count(),
            'blogCount' => Blog::count(),
        ]);
    }
}
