<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts=Post::with('user')->orderBy('position','asc')->take(4)->get();
        return view('frontend.pages.home.index',compact('posts'));
    }

    public function index($slug)
    {
        $category=Category::where(['slug'=>$slug,'status'=>1])->with('posts.user')->first();
        if (empty($category) || !view()->exists('frontend.pages.'.$slug.'.index')) {
            return abort(404,'Page Not Found');
        }
        return view('frontend.pages.'.$slug.'.index',compact('category'));
    }
}
