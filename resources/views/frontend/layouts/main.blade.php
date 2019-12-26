<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partial.head')
    @include('partial.style')
</head>

<body>
    <header>
        @include('partial.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partial.footer')
    </footer>

    {{--Partials for JS --}}
    @include('partial.scripts')

</body>
</html>
