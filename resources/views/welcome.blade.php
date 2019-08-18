@include('layouts.header')

    <!-- Main Screen-->
    <div class="main-screen">
        <!-- Info -->
        <section class="main-screen-info-container">
            <div class="main-screen-info">
                <div class="screen-headline">
                    Тебе есть, что сказать Миру!!!
                </div>
                <a href="#" class="main-screen-info__button button">
                    Написать статью
                </a>
            </div>
        </section>
        <!-- End of Info -->
        <!-- Main screen sidebar -->
        @include ('layouts.rightSidebar')
        <!-- End of Main screen sidebar -->
    </div>
    <!-- End of Main Screen-->

    <!-- Second Screen -->
    <div class="second-screen">
        <!-- Second Screen sidebar -->
        @include ('layouts.leftSidebar')
        <!-- End of Second Screen Sidebar -->
        <!-- Second Screen Info -->
        <section class="second-screen-info-container">
            <div class="second-screen-info">
                <div class="screen-headline">
                    Их читают!
                </div>
                <div class="authors-container">
                    <a href="#" class="article-container">
                        <div class="article-container__image"></div>
                        <div class="article-container__text-container">
                            <div class="article-container__headline">
                                Иванов Иван Иванович
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
                                Иванов Иван Иванович
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
                                Иванов Иван Иванович
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
                                Иванов Иван Иванович
                            </div>
                            <div class="article-container__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a metus tristique, placerat risus ac, bibendum...
                            </div>
                        </div>
                    </a>
                </div>
                <a class="second-screen-info__button button">Зарегистрироваться</a>
            </div>
        </section>
        <!-- End of Second Screen Info -->
    </div>
    <!-- End of Second Screen -->

@include('layouts.footer')
