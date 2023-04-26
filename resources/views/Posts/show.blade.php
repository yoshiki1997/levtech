<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $post->title }}</title>
    </head>
    <body>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <a href="{{ route('posts.index') }}">投稿一覧に戻る</a>
    </body>
</html>
