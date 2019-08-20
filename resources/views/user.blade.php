@extends('layouts.headerFooter')

@section('leftSidebar')
    @include('layouts.leftSidebar')
@endsection

@section('content')
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
@endsection

@section('rightSidebar')
    @include('layouts.rightSidebar')
@endsection
