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
                        <section class="user-info-container container">
                            <div class="user-info-container__avatar"></div>
                            <div class="user-info-container__info-container">
                                <div class="info">
                                    Mihail
                                </div>
                                <div class="info">
                                    Mihail@gmail.com
                                </div>
                                <div class="user-info-container__buttons-container">
                                    <a href="#" class="button user-info-container__button">Сообщение</a>
                                    <a href="#" class="button user-info-container__button">Заблокировать</a>
                                    <a href="#" class="button user-info-container__button">Все статьи</a>
                                    <a href="#" class="button user-info-container__button">Подписаться</a>
                                    <a href="#" class="button user-info-container__button">Список сообщений</a>
                                </div>
                            </div>
                        </section>
                        <section class="article container">
                            <h1>Об авторе</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, enim sit amet tempus convallis, lorem felis egestas ante, ac placerat nisi purus nec nunc. Vivamus sit amet egestas magna, eget venenatis eros. Nullam eget nunc pellentesque, luctus ante ut, fermentum urna. Etiam ut ex ut ex interdum lobortis ac ut ante. Morbi ullamcorper tempus dui quis interdum. Phasellus faucibus purus lorem. Sed efficitur venenatis lectus ac convallis. Pellentesque tincidunt blandit sapien, vitae sodales quam ultricies eu. Suspendisse vel purus vel libero ullamcorper convallis non nec quam. Etiam dignissim commodo velit, a interdum augue sodales eget. Sed tristique feugiat gravida. Quisque convallis nunc ex, malesuada dictum ipsum auctor sit amet. In mattis gravida mi ut fermentum.</p>
                                <p>Nunc interdum efficitur tellus id finibus. Curabitur velit turpis, sagittis in posuere a, accumsan at eros. Sed lorem dui, tincidunt sed leo eu, consectetur pretium ligula. Integer tincidunt at odio ut maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sagittis finibus commodo. In hac habitasse platea dictumst. Nulla malesuada posuere neque vitae blandit. Etiam at mauris vel arcu eleifend aliquet ac tempor mi. Sed sed tincidunt dui. Nulla convallis mauris nisl, eu dignissim dolor cursus ac. Duis egestas ultricies pellentesque. Suspendisse ante arcu, lobortis quis ante in, condimentum commodo odio. Donec volutpat, dui et rhoncus molestie, odio ipsum sodales dui, at consectetur massa metus sed sem.</p>
                                <p>Fusce placerat sem et leo volutpat, vitae varius est sollicitudin. Donec rutrum commodo turpis id varius. Fusce eleifend urna non orci tempus tincidunt. Mauris molestie quam et leo posuere, vitae placerat lorem semper. Morbi egestas dolor at diam ullamcorper placerat. Quisque sed diam sapien. Duis tempus sit amet est vitae lobortis. Aliquam vestibulum laoreet magna, et placerat arcu tempor sed. Nulla eu turpis ac enim feugiat malesuada nec in massa. Duis sit amet bibendum nisi. Aliquam urna magna, pretium sed rutrum in, viverra eget mi. Vivamus id diam ac nunc condimentum sagittis et a nibh. Vestibulum consequat tortor et dolor scelerisque interdum. Ut hendrerit, urna nec venenatis rutrum, sapien nibh ultrices nibh, eu luctus felis arcu at tortor. Fusce bibendum quam eget est maximus, ac varius mauris accumsan. Ut rhoncus felis sed quam tempor porta eu vitae sapien.</p>
                        </section>
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
