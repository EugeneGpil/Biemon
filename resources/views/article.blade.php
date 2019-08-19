@extends('layouts.headerFooter')

@section('leftSidebar')
    @include('layouts.leftSidebar')
@endsection

@section('content')
    <div class="content-container">
        <section class="content">
            <section class="article container">
                <h1>{{ $article->title}}</h1>
                {{ $article->text }}
                <div class="article__author">Mihail</div>
            </section>
            <section class="container">
                <div class="comments">
                    <div class="comment">
                        <a href="#" class="comment__author-info">
                            <div class="comment__avatar"></div>
                            <div class="comment__username">Mihail</div>
                        </a>
                        <div class="comment__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, enim sit amet tempus convallis, lorem felis egestas ante, ac placerat nisi purus nec nunc. Vivamus sit amet egestas magna, eget venenatis eros. Nullam eget nunc pellentesque, luctus ante ut, fermentum urna. Etiam ut ex ut ex interdum lobortis ac ut ante. Morbi ullamcorper tempus dui quis interdum. Phasellus faucibus purus lorem. Sed efficitur venenatis lectus ac convallis. Pellentesque tincidunt blandit sapien, vitae sodales quam ultricies eu. Suspendisse vel purus vel libero ullamcorper convallis non nec quam. Etiam dignissim commodo velit, a interdum augue sodales eget. Sed tristique feugiat gravida. Quisque convallis nunc ex, malesuada dictum ipsum auctor sit amet. In mattis gravida mi ut fermentum.</div>
                    </div>
                    <div class="comment">
                        <a href="#" class="comment__author-info">
                            <div class="comment__avatar"></div>
                            <div class="comment__username">Mihail</div>
                        </a>
                        <div class="comment__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, enim sit amet tempus convallis, lorem felis egestas ante, ac placerat nisi purus nec nunc. Vivamus sit amet egestas.</div>
                    </div>
                </div>
            </section>

            @auth
                <section class="container">
                    <form class="new-comment">
                        <textarea name="text" class="new-comment__text" placeholder="Комментарий"></textarea>
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
