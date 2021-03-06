<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Traits\ImageUpload;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    use ImageUpload;
    
    public function index($id)
    {
        $posts=Post::where('user_id',$id)->with('category')->paginate(5);
        return view('backend.post.index', compact('posts'));
    }
    
    public function create()
    {
        $categories=Category::pluck('title','id');
        return view('backend.post.create',compact('categories'));
    }

    public function store(PostRequest $request)
    {
        $input=$request->all();
        if(!empty($input['image'])){
            $pathname=$this->uploadImage($input['image'],'post');
            $input['image']=$pathname;
        }
        $input['user_id']=auth()->user()->id;
        Post::create($input);
        Alert::success('Success', 'Post Added successfully!');
        return redirect()->route('post.index',Auth::id());
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories=Category::pluck('title','id');
        return view('backend.post.edit', compact('post','categories'));
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $input=$request->all();
        if(!empty($input['image'])){
            if (!empty($post->image)) {
                $this->deleteImage($post->image);
            }
            $pathname=$this->uploadImage($input['image'],'post');
            $input['image']=$pathname;
        }
        $post->update($input);
        Alert::success('Success','Post Information Updated successfully!');
        return redirect()->route('post.index',Auth::id());
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if (!empty($post->image)) {
            $this->deleteImage($post->image);
        }
        $post->delete();
        Alert::success('Success','Post has been deleted successfully!');
        return redirect()->back();
    }
}
