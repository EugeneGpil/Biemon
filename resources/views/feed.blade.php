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
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
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

