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
                    <a href="#" class="button navigation-line__button">Рекомендации</a>
                    <a href="#" class="button navigation-line__button">Новое</a>
                    <a href="#" class="button navigation-line__button">Авторы</a>
                    <a href="#" class="button navigation-line__button">По категориям</a>
                    <a href="#" class="button navigation-line__button">Написать</a>
                </div>
                <!-- End of Main navigation -->
                <!-- Login -->
                <div class="navigation-line__login-container">
                    <a class="navigation-line__login-button" href="#">Вход</a>
                    <a class="navigation-line__login-button navigation-line__login-button_registration" href="#">Регистрация</a>
                </div>
                <!-- End of Login -->
            </nav>
            <!-- End of Main Navigation Line-->

            <!-- Screen -->
            <section class="screen">
                <!-- Left sidebar -->
                <aside class="sidebar">
                    <a href="#" class="sidebar__button button">
                        Последние
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                </aside>
                <!-- End of Left Sidebar -->
                <!-- Content -->
                <div class="content-container">
                    <section class="content">
                        <!-- Message -->
                        <section class="container articles-container">
                            <div class="articles">
                                <div class="article-container user-container">
                                    <a href="#" class="article-container__image article-container__avatar">
                                    <div class="article-container__text-container user-container__text-container">
                                        <a href="#" class="article-container__headline">
                                            Mihail
                                        </a>
                                        <a href="#" class="button">Написать</a>
                                        <a href="#" class="button">Все статьи</a>
                                    </div>
                                </div>
                                <div class="article-container user-container">
                                    <a href="#" class="article-container__image article-container__avatar">
                                    <div class="article-container__text-container user-container__text-container">
                                        <a href="#" class="article-container__headline">
                                            Mihail
                                        </a>
                                        <a href="#" class="button">Написать</a>
                                        <a href="#" class="button">Все статьи</a>
                                    </div>
                                </div>
                                <div class="article-container user-container">
                                    <a href="#" class="article-container__image article-container__avatar">
                                    <div class="article-container__text-container user-container__text-container">
                                        <a href="#" class="article-container__headline">
                                            Mihail
                                        </a>
                                        <a href="#" class="button">Написать</a>
                                        <a href="#" class="button">Все статьи</a>
                                    </div>
                                </div>
                                <div class="article-container user-container">
                                    <a href="#" class="article-container__image article-container__avatar">
                                    <div class="article-container__text-container user-container__text-container">
                                        <a href="#" class="article-container__headline">
                                            Mihail
                                        </a>
                                        <a href="#" class="button">Написать</a>
                                        <a href="#" class="button">Все статьи</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pages-arrows">
                                <div class="pages-arrows__element"><i class="fas fa-arrow-left"></i></div>
                                <div class="pages-arrows__element">1</div>
                                <div class="pages-arrows__element"><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </section>
                        <!-- End of Message -->
                    </section>
                </div>
                <!-- End of Content -->
                <!-- Right sidebar -->
                <aside class="sidebar">
                    <a href="#" class="sidebar__button button">
                        Популярное
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Охота на снежного леопарда
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                </aside>
                <!-- End of Right Sidebar -->
            </section>
            <!-- End of Screen -->

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
