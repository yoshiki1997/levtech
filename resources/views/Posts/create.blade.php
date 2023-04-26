<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>記事投稿</title>
    </head>
    <body>
        @if($errors->any())
            <div id="alert alert_denger">
                <ul>@foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                </ul>
            </div>        
        @endif
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div>
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title" required minlength="1" maxlength="50" size="10" value="{{ old('title') }}" />
            </div>
        
            <div>
            <label for="body">内容</label>
            <textarea rows="10" cols="50" id="body" name="body" >{{ old('body') }}</textarea>
            </div>
            
            <input type="submit" value="投稿">
            <a href="{{ route('posts.index') }}">戻る</a>
        </form>
    </body>
</html>
