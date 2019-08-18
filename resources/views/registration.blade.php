@extends('layouts.headerFooter')

@section('content')
    <!-- Registration -->
    <section class="registration-container">
        <form class="registration">
            <input type="text" name="login" class="registration__element" placeholder="Логин">
            <input type="email" name="email" class="registration__element" placeholder="Почта">
            <input type="password" name="first_password" class="registration__element" placeholder="Пароль">
            <input type="password" name="second_password" class="registration__element" placeholder="Повторите пароль">
            <input type="submit" class="registration__element" value="Подтвердить">
        </form>
    </section>
    <!-- End of Registration -->
@endsection
