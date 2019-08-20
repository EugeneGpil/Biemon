@extends('layouts.headerFooter')

@section('leftSidebar')
    @include('layouts.leftSidebar')
@endsection

@section('content')
    <div class="content-container">
        <section class="content">
            <section class="article container">
                <h1>{{ $article->title}}</h1>
                {!! $article->text !!}
                <div class="article__author">{{ $article->owner()->name }}</div>
                @if ($article->ownsAuthorizedUser())
                    <a class="button" href="/article/{{ $article->id }}/edit">Редактировать</a>
                @endif
            </section>

            @if ($article->comments())
                <section class="container">
                    <div class="comments">
                        @foreach ($article->comments() as $comment)
                            <div class="comment">
                                <a href="#" class="comment__author-info">
                                    <div class="comment__avatar" style="background-image:url('/images/avatars/{{ $comment->owner()->avatar }}.jpg'"></div>
                                <div class="comment__username">{{ $comment->owner()->name}}</div>
                                </a>
                                <div class="comment__text">{{ $comment->text }}</div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

            @auth
                <section class="container">
                    <form class="new-comment" method="POST" action="/article/{{ $article->id }}/comment">
                        @csrf
                        <textarea name="text" class="new-comment__text" placeholder="Комментарий" required>{{ old('text') }}</textarea>
                        @if ($errors->first())
                            <div class="article-error">{{ $errors->first() }}</div>
                        @endif
                        <button id="submit" class="button">Отправить</button>
                    </form>
                </section>
            @endauth

            @guest
                <section class="container">
                    <div class="warning">
                        Только авторизованные пользователи могут оставлять комментарии
                    </div>
                </section>
            @endguest

        </section>
    </div>
@endsection

@section('rightSidebar')
    @include('layouts.rightSidebar')
@endsection
