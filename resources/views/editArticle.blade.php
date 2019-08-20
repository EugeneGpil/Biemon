@extends('layouts.headerFooter')

@section('leftSidebar')
    @include('layouts.leftSidebar')
@endsection

@section('content')
    <!-- Content -->
    <div class="content-container">
        <section class="content">
            <!-- New Article -->
            <section class="container message-container">
                <form id="article-form" class="new-article" method="POST" action="/article/{{ $article->id }}">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="title" placeholder="Заголовок" value="{{ $article->title }}">
                    <textarea name="text" placeholder="Текст статьи" class="new-article__text">{{ $article->text }}</textarea>
                </form>
                <div class="new-article__buttons">
                    <form id="delete-form" action="/article/{{ $article->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="javascript:{}" onclick="document.getElementById('delete-form').submit()" class="button">Удалить статью</a>
                    </form>
                    <a class="button" href="javascript:{}" onclick="document.getElementById('article-form').submit()">Подтвердить</a>
                </div>

            </section>
            <!-- End of New Article -->
        </section>
    </div>
    <!-- End of Content -->
@endsection

@section('rightSidebar')
    @include ('layouts.rightSidebar')
@endsection
