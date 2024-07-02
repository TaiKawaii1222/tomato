<div class="article-control">
        <a href="{{ route('articles.edit', $article) }}">編集</a>
        <form action="{{ route('articles.destroy', $article) }}" method="post">
            @csrf 
            @method('delete')
            <button type="submit">削除</button>
        </form>
    </div>