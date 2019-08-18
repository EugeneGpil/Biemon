@extends('layouts.headerFooter')

@section('leftSidebar')
    @include ('layouts.leftSidebar')
@endsection

@section('content')
    <!-- Content -->
    <div class="content-container">
        <section class="content">
            <section class="article container">
                <li><a href="#" class="category">Программирование</a></li>
                <li><a href="#" class="category">Путешествия</a></li>
                <li><a href="#" class="category">Кино</a></li>
            </section>
        </section>
    </div>
    <!-- End of Content -->
@endsection

@section('rightSidebar')
    @include('layouts.rightSidebar')
@endsection

