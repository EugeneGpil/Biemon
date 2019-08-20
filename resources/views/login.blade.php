@extends('layouts.headerFooter')

@section('content')
    <!-- Login -->
    <section class="registration-container">
        <form class="registration" action="/login" method="POST">
            @csrf
            <input type="text" name="email" class="registration__element" placeholder="Логин" required>
            <input type="password" name="password" class="registration__element" placeholder="Пароль" required>
            <div class="error">{{ $errors->first() }}</div>
            <input type="submit" class="registration__element" value="Подтвердить">
        </form>
    </section>
    <!-- End of Login -->
@endsection
