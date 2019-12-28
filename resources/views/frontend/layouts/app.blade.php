<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.partial.head')
    @include('frontend.partial.style')
</head>

<body>
    <header>
        @include('frontend.partial.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('frontend.partial.footer')
    </footer>

    <a href="#" class="scrollToTop"><i class="fa fa-caret-up"></i></a> <!-- Scroll To Top Button -->

    {{--Partials for JS --}}
    @include('frontend.partial.scripts')

</body>
</html>
