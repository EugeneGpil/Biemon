@include('layouts.header')

<section class="screen">

    @yield('leftSidebar')

    @yield('content')

    @yield('rightSidebar')

</section>

@include('layouts.footer')
