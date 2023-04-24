<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>blog</title>
    </head>
    <body>
        <header>
            
        </header>
        @foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
        @endforeach
        <h1>blog name</h1>
        <p>sampletext</p>
        
        <h1>blog name</h1>
        <p>sampletext</p>
        
        <footer>
            
        </footer>
    </body>
</html>