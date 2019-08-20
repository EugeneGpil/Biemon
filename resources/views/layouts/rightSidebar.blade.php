<aside class="sidebar">
        <a href="#" class="sidebar__button button">
            Популярные
        </a>
        @foreach (\App\Http\Controllers\ArticleController::popular() as $article)
            <a href="#" class="article-container">
                <div class="article-container__image" style="background-image: url('/images/articlePrevies/{{ $article->preview_image }}.jpg')"></div>
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
