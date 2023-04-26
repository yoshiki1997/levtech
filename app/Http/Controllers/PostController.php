<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\PostRequest;
use Illuminate\Http\Request;
//Modelsフォルダの下にModelsフォルダを作ってしまったようだ。
use App\Models\Post;

class PostController extends Controller{

    //
    public function index(Request $request,Post $posts)
        {
            //return $post->get();
            $sort = $request->sort;
            $posts = Post::latest('updated_at')->paginate(5);
            return view('Posts.index',['posts' => $posts, 'sort' => $sort]);
        }
    
    public function show($id)
        {   
            $post = Post::find($id);
            return view('Posts.show',['post' => $post]);    
        }
        
    public function create(Request $request)
        {
            return view('Posts.create');
        }
    
    public function store(PostRequest $requeset)
        {
            $inputs = $request::all();
            $post = Post::create($inputs);
            return redirect('/posts/'.$post->id);
        }
    
    /*public function getPosts()
        {
            $posts = Post::latest('updated_at')->take(10)->get();
            return compact('posts');
        }*/
}
    
