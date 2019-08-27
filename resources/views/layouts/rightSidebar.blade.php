<aside class="sidebar">
        <a href="{{ route('popularArticles') }}" class="sidebar__button button">
            Популярные
        </a>
        @foreach (\App\Http\Controllers\ArticleController::popular(6) as $article)
            <a href="{{ route('article', ['article' => $article->id]) }}" class="article-container">
                <div class="article-container__image" style="background-image: url('/images/{{ $article->preview_image }}')"></div>
                <div class="article-container__text-container">
                    <div class="article-container__headline" title=" {{ $article->title }}">
                        {{ $article->titlePreview() }}
                    </div>
                    <div class="article-container__text">
                        {{ $article->textPreview() }}
                    </div>
                </div>
            </a>
        @endforeach
    </aside>
