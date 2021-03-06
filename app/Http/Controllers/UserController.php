<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Traits\ImageUpload;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    use ImageUpload;

    public function index()
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(UserRequest $request)
    {
        $input = $request->all();
        if (!empty($input['image'])) {
            $pathname = $this->uploadImage($request->file('image'), 'users');
            $input['image']=$pathname;
        }
        User::create($input);
        Alert::success('Success', 'User Added successfully!');
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();
        if (!empty($input['image'])) {
            if (!empty($user->image)) {
                $this->deleteImage($user->image);
                $pathname = $this->uploadImage($input['image'], 'users');
            }
        }
        $input['image']=$pathname ?? $user->image;
        $user->update($input);
        Alert::success('Success', 'User Information Updated successfully!');
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if (!empty($user->image)) {
            $this->deleteImage($user->image);
        }
        $user->delete();
        Alert::success('Success', 'User Information has been deleted successfully!');
        return redirect()->back();
    }
}
