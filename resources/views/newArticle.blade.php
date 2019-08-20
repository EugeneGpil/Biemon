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
                <form class="new-article" method="POST" action="/article">
                    @csrf
                    <input type="text" name="title" placeholder="Заголовок" value="{{ old('title') }}">
                    <textarea name="text" placeholder="Текст статьи" class="new-article__text">{{ old('text') }}</textarea>
                    @if ($errors->first())
                        <div class="article-error">{{ $errors->first() }}</div>
                    @endif
                    <button class="button">Создать</button>
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
