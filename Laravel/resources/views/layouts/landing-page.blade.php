<!doctype html>
<html class="no-js" lang="">
    <head>
        {{-- Header --}}
        @include('partials.landing-page.header')

        {{-- Style Addition --}}
        @yield('style')
    </head>
    <body>

        {{-- Preloader --}}
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="img/preloader.svg" alt="">
                </div>
            </div>
        </div>


        {{-- Scroll Top --}}
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>

        {{-- Navbar --}}
            @include('partials.landing-page.navbar')


        {{-- Main --}}
        <main>
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.landing-page.footer')

        <script>
        @yield('script')
        </script>
    </body>
</html>
