<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\PostRequest;
use Illuminate\Http\Request;
//Modelsフォルダの下にModelsフォルダを作ってしまったようだ。
use App\Models\Post;

class PostController extends Controller{

    //
    /*public function index(Request $request,Post $posts)
        {
            //return $post->get();
            $sort = $request->sort;
            $posts = Post::latest('updated_at')->paginate(5);
            return view('Posts.index',['posts' => $posts, 'sort' => $sort]);
        }*/
        
   public function index(Post $post)
        {
         return view('Posts/index')->with(['posts' => $post->getPaginateByLimit()]);
         //getPaginateByLimit()はPost.phpで定義したメソッドです。
        } 
        
        /**
         * 特定IDのpostを表示する
         *
         * @params Object Post // 引数の$postはid=1のPostインスタンス
         * @return Reposnse post view
         */
    public function show(Post $post)
        {   
            return view('Posts.show')->with(['post' => $post]);    
        }
        
    public function create()
        {
            return view('Posts.create');
        }
    
    public function store(PostRequest $request, Post $post)
        {
            $inputs = $request['post'];
            $post->fill($input)->save();
            //ちなみにfill関数+save関数はcreate関数とほとんど同じなので、今回
            //$post->create($input)と記載しても同じ挙動になります。
            //$post = Post::create($inputs);
            return redirect('/posts/'.$post->id);
        }
    
    public function edit(Post $post)
        {
            return view('posts/edit')->with(['post' => $post]);
        }
    
    public function update(PostRequest $request,Post $post)
        {
            /*$post = Post::find($id);
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->save();
            
            return redirect()->route('posts.show', ['id' => $post->id]);
            */
            $input_post = $request['post'];
            $post->fill($input_post)->save();
    
            return redirect('/posts/' . $post->id);
        }
    
    public function delete(Post $post)
        {
            $post->delete();
            return redirect('/');
        }
    /*public function getPosts()
        {
            $posts = Post::latest('updated_at')->take(10)->get();
            return compact('posts');
        }*/
}
    
