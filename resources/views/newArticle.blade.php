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
                    <button id="submit" class="button">Создать</button>
                </form>
            </section>
            <!-- End of New Article -->
        </section>
    </div>
    <!-- End of Content -->
@endsection

@section('rightSidebar')
    @include('layouts.rightSidebar')
@endsection
