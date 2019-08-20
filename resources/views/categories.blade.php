@extends('layouts.headerFooter')

@section('leftSidebar')
    @include ('layouts.leftSidebar')
@endsection

@section('content')
    <!-- Content -->
    <div class="content-container">
        <section class="content">
            <section class="article container">
                @foreach (\App\Category::all() as $category)
                    <li><a href="/category/{{ $category->id }}" class="category">{{ $category->title }}</a></li>
                @endforeach
            </section>
        </section>
    </div>
    <!-- End of Content -->
@endsection

@section('rightSidebar')
    @include('layouts.rightSidebar')
@endsection

