<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts=Post::with('user')->orderBy('position','asc')->get();
        return view('frontend.pages.home.index',compact('posts'));
    }
}
