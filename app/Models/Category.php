<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['title','slug','position','status'];

    public function posts()
    {
        return $this->hasMany(Post::class)->where('status',1);
    }
}
