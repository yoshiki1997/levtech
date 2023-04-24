<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelsフォルダの下にModelsフォルダを作ってしまったようだ。
use App\Models\Post;

class PostController extends Controller{

    //
    public function index()
        {
            //return $post->get();
            $posts = $this->getPosts();
            return view('Posts.index',$posts);
        }
    public function getPosts()
        {
            $posts = Post::all();
            return compact('posts');
        }
}
    
