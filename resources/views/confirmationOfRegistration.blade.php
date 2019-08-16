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
                <div class="header__logo">Biemon</div>
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
                    <a href="#" class="button">Рекомендации</a>
                    <a href="#" class="button">Новое</a>
                    <a href="#" class="button">Авторы</a>
                    <a href="#" class="button">По категориям</a>
                </div>
                <!-- End of Main navigation -->
                <!-- Login -->
                <div class="navigation-line__login-container">
                    <a class="navigation-line__login-button" href="#">Выход</a>
                    <a class="navigation-line__login-button navigation-line__login-button_registration" href="#">Mihail</a>
                </div>
                <!-- End of Login -->
            </nav>
            <!-- End of Main Navigation Line-->

            <!-- Confirmation of Registration -->
            <section class="registration-container">
                <form class="registration">
                    <div class="registration__element">Введите код подтверждения</div>
                    <input type="text" name="code" class="registration__element" placeholder="Код">
                    <input type="submit" class="registration__element" value="Подтвердить">
                </form>
            </section>
            <!-- End of Confirmation of Registration -->

            <!-- Footer -->
            <footer>
                <div class="button">Инфо</div>
                <div class="footer__year">2019</div>
                <div class="button">Наверх<i class="fas fa-arrow-up"></i></div>
            </footer>
            <!-- End of Footer -->

        </div>
    </body>
</html>
