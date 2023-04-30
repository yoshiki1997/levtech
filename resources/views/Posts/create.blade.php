<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">    <head>
        <meta charset="utf-8">
        <title>記事投稿</title>
        <!-- Fonts -->
    </head>
    <body>
    {{--    <!--@if($errors->any())
            <div id="alert alert_denger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>        
        @endif -->--}}
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" id="title" name="post[title]" placeholder="タイトル" required minlength="1" maxlength="50" size="10" value="{{ old('post.title') }}" />
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
        
            <div class="body">
                <h2>Body</h2>
                <textarea rows="10" cols="50" id="body" name="posts[body]" placeholder="今日も一日お疲れさまでした。" >{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                <!--テキストエリアに元から内容という文字を言えれておきたかったが、エラー時の処理と同時にするのがむつかしそうなので後で調べる。-->
            </div>
            
            <input type="submit" value="store"/>
            
            <div class="category">
            
            <h2>カテゴリー</h2>    
            <select name="$posts[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            </div>
            
        </form>
        <div class="back">
            [<a href="/">戻る</a>]
        </div>
    </body>
</html>
