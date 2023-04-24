<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
//Modelsフォルダの下にModelsフォルダを作ってしまったようだ。
use App\Models\Post;
=======
use App\Models\Models\Post;
>>>>>>> origin/master

class PostController extends Controller
{
    //
<<<<<<< HEAD
    public function index()
        {
            //return $post->get();
            return view('Posts.index');
        }
}
    
=======
    public function index(Post $post)
        {
            return $post->get();
        }
}
>>>>>>> origin/master
