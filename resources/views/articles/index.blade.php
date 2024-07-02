<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <div class="site-title">ミニブログ</div>
    </header>
    <main class="container">
        <form action="{{ route('articles.store') }}" method="post">
        @csrf 
<dl class="form-list">
    <dt>タイトル</dt>
    <dd><input type="text" name="title" value="{{ old('title') }}"></dd>
    <dt>本文</dt>
    <dd><textarea name="body" rows="5">{{ old('body') }}</textarea></dd>
</dl>
        <button type="submit">投稿する</button>
        <a href="{{ route('articles.index') }}">キャンセル</a>
        </form>
    </main>
    <footer>
        &copy; Laravel8 入門から開発実践まで
    </footer>
</body>
</html>
@extends('layouts.app')
@section('content')
<p><a href="{{ route('articles.create') }}">記事を書く</a></p>
@foreach ($articles as $article)
<article class="article-item">
    <div class="article-title">{{ $article->title }}</div>
    <div class="article-body">{{ $article->body }}</div>
</article>
@endforeach
@endsection()
<form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('articles.destroy', $article) }}" method="post">
            @csrf 
            @method('delete')
            <button type="submit">削除</button>
        </form>