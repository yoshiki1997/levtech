<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>blog</title>
    </head>
    <body>
        <header>
            
        </header>
            <p>{{ $posts->links() }}</p>
            @foreach ($posts as $post)
                <a href="{{ route('posts.show', ['id' => $post->id]) }}"><h2>{{ $post->title }}</h2></a>
                <p>{{ $post->body }}</p>
            @endforeach
        <footer>
        
        </footer>
    </body>
</html>