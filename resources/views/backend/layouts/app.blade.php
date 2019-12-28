<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('backend.partial.head')
    @include('backend.partial.style')
</head>

<body>
    <header>
        @include('backend.partial.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('backend.partial.footer')
    </footer>

    {{--Partials for JS --}}
    @include('backend.partial.scripts')

</body>
</html>
