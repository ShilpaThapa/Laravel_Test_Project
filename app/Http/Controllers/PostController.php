<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        // dd('we are inside index method of PostController as specified in web.php');
        // get all post records from db table `posts` using eloquent orm Model (Post)
        $posts = Post::all();
        // dd($posts);
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {

        // validate data sent from create post form
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);


        // store this data in db using eloquent ORM create method
        Post::create($validatedData);

        // redirect index page (post listing page)
        return redirect('/post');
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        // validate data sent from create post form
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);


        // update data in db using eloquent ORM update method
        $post->update($validatedData);

        // redirect index page (post listing page)
        return redirect('/post');
    }


    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // delete post record from db using eleqouent delete method
        $post->delete();

        return redirect('/post');
    }
}
