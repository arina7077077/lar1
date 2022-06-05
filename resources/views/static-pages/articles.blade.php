@forelse($articles as $article)
{{--    <a href="{{ route('get-article', ['article' => $article->id]) }}">{{ $article->name }}</a>--}}
    <a href="{{ route('get-article', $article) }}">{{ $article->name }}</a>
    <div>{{ $article->content }}</div>
@empty
    <p>No news :C</p>
@endforelse
<hr>
{{ $articles->links() }}
