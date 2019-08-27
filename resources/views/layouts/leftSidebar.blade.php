<aside class="sidebar">
    <a href="#" class="sidebar__button button">
        Последние
    </a>
    @foreach (\App\Http\Controllers\ArticleController::last(6) as $article)
        <a href="{{ route('article', ['article' => $article->id]) }}" class="article-container">
            <div class="article-container__image" style="background-image: url('/images/{{ $article->preview_image }}')"></div>
            <div class="article-container__text-container">
                <div class="article-container__headline" title="{{ $article->title }}">
                    {{ $article->titlePreview() }}
                </div>
                <div class="article-container__text">
                    {{ $article->textPreview() }}
                </div>
            </div>
        </a>
    @endforeach
</aside>
