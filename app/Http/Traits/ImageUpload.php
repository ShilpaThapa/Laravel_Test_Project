<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\File;

trait ImageUpload 
{
    public function uploadImage($file,$path='images')
    {
        if (file_exists($file)) {
            $name=$file->getClientOriginalName();
            $pathname=$file->store($path);
            return 'storage/'.$pathname;
        }
    }

    public function deleteImage($path)
    {
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
