<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biemon</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet"  type="text/css" href="/css/app.css">
    </head>
    <body>
        <div class="wrapper">
            <header class="header">
                <div class="header__logo-container">
                    <div class="header__logo">Biemon</div>
                </div>
                <div class="header__search-container">
                    <form class="header__search">
                        <input class="header__search-bar" name="search" placeholder="Поиск">
                        <button class="header__search-button">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </header>
        </div>
    </body>
</html>
