@extends('layouts.headerFooter')

@section('content')
    <!-- Login -->
    <section class="registration-container">
        <form class="registration" action="/login" method="POST">
            @csrf
            <input type="text" name="email" class="registration__element" placeholder="Логин">
            <input type="password" name="password" class="registration__element" placeholder="Пароль">
            <input type="submit" class="registration__element" value="Подтвердить">
            <div>{{ $errors->first() }}</div>
        </form>
    </section>
    <!-- End of Login -->
@endsection
