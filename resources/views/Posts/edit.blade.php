<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">    <head>
        <meta charset="utf-8">
        <title>記事編集画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @if($errors->any())
            <div id="alert alert_denger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>        
        @endif
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="{{ route('posts.update',['id' => $post->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="content__title">
                <h2>タイトル</h2>
                <input type="text" id="title" name="post[title]" required minlength="1" maxlength="50" size="10" value="{{ $post->title }}" />
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="content__body">
                <h2>本文</h2>
                <textarea rows="10" cols="50" id="body" name="body" >{{ $post->body }}</textarea>
                    @error('body')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                <!--テキストエリアに元から内容という文字を言えれておきたかったが、エラー時の処理と同時にするのがむつかしそうなので後で調べる。-->
                </div>
                
                <input type="submit" value="保存">
                
            </form>
        </div>
        <a href="{{ route('posts.index') }}">戻る</a>
    </body>
</html>
