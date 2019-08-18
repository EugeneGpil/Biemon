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
                    <div class="article-container user-container">
                        <a href="#" class="article-container__image article-container__avatar">
                        <div class="article-container__text-container user-container__text-container">
                            <a href="#" class="article-container__headline">
                                Mihail
                            </a>
                            <a href="#" class="button">Написать</a>
                            <a href="#" class="button">Все статьи</a>
                        </div>
                    </div>
                    <div class="article-container user-container">
                        <a href="#" class="article-container__image article-container__avatar">
                        <div class="article-container__text-container user-container__text-container">
                            <a href="#" class="article-container__headline">
                                Mihail
                            </a>
                            <a href="#" class="button">Написать</a>
                            <a href="#" class="button">Все статьи</a>
                        </div>
                    </div>
                    <div class="article-container user-container">
                        <a href="#" class="article-container__image article-container__avatar">
                        <div class="article-container__text-container user-container__text-container">
                            <a href="#" class="article-container__headline">
                                Mihail
                            </a>
                            <a href="#" class="button">Написать</a>
                            <a href="#" class="button">Все статьи</a>
                        </div>
                    </div>
                    <div class="article-container user-container">
                        <a href="#" class="article-container__image article-container__avatar">
                        <div class="article-container__text-container user-container__text-container">
                            <a href="#" class="article-container__headline">
                                Mihail
                            </a>
                            <a href="#" class="button">Написать</a>
                            <a href="#" class="button">Все статьи</a>
                        </div>
                    </div>
                </div>
                <div class="pages-arrows">
                    <div class="pages-arrows__element"><i class="fas fa-arrow-left"></i></div>
                    <div class="pages-arrows__element">1</div>
                    <div class="pages-arrows__element"><i class="fas fa-arrow-right"></i></div>
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
