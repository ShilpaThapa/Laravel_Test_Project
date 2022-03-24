<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::paginate(5);
        return view('backend.category.index',compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $input=$request->all();
        $input['slug']=Str::slug($input['title']);
        Category::create($input);
        Alert::success('Success', 'Category Added successfully!');
        return redirect()->route('category.index');
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $input=$request->all();
        $input['slug']=Str::slug($input['title']);
        $category->update($input);
        Alert::success('Success','Category Updated successfully!');
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        Alert::success('Success','category has been deleted successfully!');
        return redirect()->back();
    }
}
