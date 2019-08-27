<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biemon</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet"  type="text/css" href="/css/normalize.css">
        <link rel="stylesheet"  type="text/css" href="/css/app.css">
    </head>
    <body>
        <div class="wrapper">

            <!-- Header -->
            <header class="header">
                <a href="/" class="header__logo">Biemon</a>
                <form class="header__search">
                    <input class="header__search-bar" name="search" placeholder="Поиск">
                    <button class="header__search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </header>
            <!-- End of Header -->

            <!-- Main Navigation Line-->
            <nav class="navigation-line">
                <!-- Main navigation -->
                <div class="navigation-line__navigation">
                    <a href="{{ route('popularArticles') }}" class="button navigation-line__button">Популярное</a>
                    <a href="#" class="button navigation-line__button">Новое</a>
                    <a href="#" class="button navigation-line__button">Авторы</a>
                    <a href="/categories" class="button navigation-line__button">По категориям</a>
                    <a href="/article/create" class="button navigation-line__button">Написать</a>
                </div>
                <!-- End of Main navigation -->

                @guest
                    <!-- Login -->
                    <div>
                        <div class="navigation-line__login-container">
                            <a class="navigation-line__login-button" href="/login">Вход</a>
                            <a class="navigation-line__login-button navigation-line__login-button_registration" href="/register">Регистрация</a>
                        </div>
                    </div>
                    <!-- End of Login -->
                @endguest

                @auth
                    <div class="navigation-line__auth-container">
                        <div class="navigation-line__user-info">
                            <a class="navigation-line__username" href="#">{{ auth()->user()->name }}</a>
                            <a class="button navigation-line__notification" href="#">4</a>
                        </div>
                        <div class="navigation-line__login-container">
                            <form id="logout-form" action="/logout" method="POST">
                                @csrf
                            </form>
                            <a class="navigation-line__login-button navigation-line__login-button_registration"
                                href="javascript:{}" onclick="document.getElementById('logout-form').submit();">
                                Выход
                            </a>
                        </div>
                    </div>
                @endauth
            </nav>
            <!-- End of Main Navigation Line-->
