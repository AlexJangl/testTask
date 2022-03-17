<!DOCTYPE html>
<html lang="ru">
<head>
    @include('_layouts.metas')

    <title>@yield('title')</title>

    @include('_layouts.links')
    @stack('styles')
</head>
<body>

    @include('_layouts.header')

    @yield('content')

    @include('_layouts.footer')

    @include('_layouts.scripts')
    @stack('scripts')
</body>
</html>

