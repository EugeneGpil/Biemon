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
                <div class="message-list">
                    <div class="message-list__message">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu odio, non porttitor neque condimentum id. In et velit justo. Integer consectetur lectus eget maximus pellentesque. Etiam egestas ante sed porta malesuada. Vivamus congue pellentesque venenatis. Suspendisse euismod consectetur maximus. Duis porttitor elit eu purus gravida auctor. Integer tempor, mi eget accumsan bibendum, mauris nibh fermentum nibh, et aliquet tortor mauris eu purus. Vivamus ullamcorper mi ut gravida egestas. Quisque pulvinar, nisi sed ornare sodales, nibh massa pretium tellus, vestibulum pharetra turpis leo at quam.
                    </div>
                </div>
                <form class="message">
                    <textarea name="text" class="message__text" placeholder="Введите сообщение"></textarea>
                    <button id="submit" class="button">Ответить</button>
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
