<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('backend.partial.head')
    @include('backend.partial.style')
</head>

<body>
    <div id="app" class="h-screen bg-gray-200 flex flex-col">
        <header class="flex flex-shrink-0">
            @include('backend.partial.header')
        </header>
        <div class="flex-1 flex">
            @include('backend.layouts.sidebar')
            <main class="p-4">
                @yield('content')
            </main>
        </div>
        <footer>
            @include('backend.partial.footer')
        </footer>
    </div>

    @include('backend.partial.scripts')
</body>
</html>
