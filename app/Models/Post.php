<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    Public static function index(){
        return Post::all();
    }
    Public static function popular(){
        return Post::paginate(3);
    }
}
