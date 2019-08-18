@extends('layouts.headerFooter')

@section('leftSidebar')
    @include('layouts.leftSidebar')
@endsection

@section('content')
    <!-- Content -->
    <div class="content-container">
        <section class="content">
            <!-- Message -->
            <section class="container message-container">
                <div class="adressee">
                    <div class="adressee__avatar"></div>
                    <div class="adressee__info">
                        <div class="info">Mihail</div>
                        <a href="#" class="button">Список сообщений</a>
                    </div>
                </div>
                <form class="message">
                    <textarea name="text" class="message__text" placeholder="Введите сообщение"></textarea>
                    <button id="submit" class="button">Отпавить</button>
                </form>
            </section>
            <!-- End of Message -->
        </section>
    </div>
    <!-- End of Content -->
@endsection

@section('rightSidebar')
    @include('layouts.rightSidebar')
@endsection
