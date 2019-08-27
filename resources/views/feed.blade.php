@extends('layouts.headerFooter')

@section('leftSidebar')
    @include('layouts.leftSidebar')
@endsection

@section('content')
    <!-- Content -->
    <div class="content-container">
        <section class="content">
            <!-- Message -->
            <section class="container articles-container">
                <div class="articles">

                    @foreach ($articles as $article)
                        <a href="/article/{{ $article->id }}" class="article-container">
                            <div class="article-container__image" style="background-image: url('/images/{{ $article->preview_image }}"></div>
                            <div class="article-container__text-container">
                                <div class="article-container__headline">
                                    {{ $article->titlePreview() }}
                                </div>
                                <div class="article-container__text">
                                    {{ $article->textPreview() }}
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
                <div class="pages-arrows">
                    <a href="/article/popular/{{ $articles->currentPage() != 2 ? $articles->currentPage()-1 : ""}}" class="pages-arrows__element" {{ $articles->currentPage() <= 1 ? "style=visibility:hidden" : "" }}>
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <div class="pages-arrows__element">{{ $articles->currentPage() }}</div>
                    <a href="/article/popular/{{ $articles->currentPage()+1 }}" class="pages-arrows__element" {{ $articles->currentPage() >= $articles->lastPage() ? "style=visibility:hidden" : "" }}>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </section>
            <!-- End of Message -->
        </section>
    </div>
    <!-- End of Content -->
@endsection

@section('rightSidebar')
    @include('layouts.rightSidebar')
@endsection

