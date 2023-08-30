<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | RSBK</title>

    @yield('head')

</head>
<body>

    {{-- Navar --}}
    @include('dashboard.layouts.nav')

    
    <main>
        {{-- SideNavbar --}}
        @include('dashboard.layouts.sidenav')

        {{-- Container --}}
        @yield('container')
    </main>

</body>
</html>