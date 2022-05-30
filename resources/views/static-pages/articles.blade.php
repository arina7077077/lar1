@forelse($articles as $article)
    <a href="{{ route('get-article', ['id' => $article->id]) }}">{{ $article->title }}</a>
    <div>{{ $article->content }}</div>
@empty
    <p>No news :C</p>
@endforelse
