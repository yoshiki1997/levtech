<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">    <head>
        <meta charset="UTF-8" />
        <title>blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <header>
            
        </header>
        <h1>Blog Name</h1>
            
            <div class="posts">
            @foreach ($posts as $post)
                <h2 class="title"><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
                <p class="body">{{ $post->body }}</p>
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}"><button>記事編集</button></a>
                {{-- <a href="{{ route('posts.delete', ['post' => $post->id]) }}"><button>削除</button></a> --}}
                <a href="/categories/{{ $posts->category_id}}">{{ $post->category->name }}</a>   
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
            @endforeach
            </div>
            
            <div class='paginate'>
            {{ $posts->links() }}
            </div>
            
            <a href="{{ route('posts.create') }}"><button>記事作成</button></a>
            
        <footer>
        
        </footer>
        <script>
            function deletePost(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>