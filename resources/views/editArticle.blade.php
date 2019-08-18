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
                <form class="new-article">
                    <input type="text" name="title" placeholder="Заголовок">
                    <textarea name="text" placeholder="Текст статьи" class="new-article__text"></textarea>
                    <div class="new-article__buttons">
                        <button id="delete" class="button">Удалить статью</button>
                        <button id="submit" class="button">Подтвердить</button>
                    </div>
                </form>
            </section>
            <!-- End of New Article -->
        </section>
    </div>
    <!-- End of Content -->
@endsection

@section('rightSidebar')
    @include ('layouts.rightSidebar')
@endsection
