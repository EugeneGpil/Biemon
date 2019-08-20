@extends('layouts.headerFooter')

@section('content')
    <!-- Registration -->
    <section class="registration-container">
        <form class="registration" method="POST" action="/register">
            @csrf
            <input type="text" name="name" class="registration__element" placeholder="Логин" value="{{ old('name') }}" required>
            <input type="email" name="email" class="registration__element" placeholder="Почта" value="{{ old('email') }}" required>
            <input type="password" name="password" class="registration__element" placeholder="Пароль" required>
            <input type="password" name="password_confirmation" class="registration__element" placeholder="Повторите пароль" required>
            <div class="error">{{ $errors->first() }}</div>
            <input type="submit" class="registration__element" value="Подтвердить">
        </form>
    </section>
    <!-- End of Registration -->
@endsection
