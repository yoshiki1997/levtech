<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelsフォルダの下にModelsフォルダを作ってしまったようだ。
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
        {
            //return $post->get();
            return view('Posts.index');
        }
}
    
