<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | RSBK</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    @yield('head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-merriweather">

    {{-- Navar --}}
    @include('dashboard.layouts.nav')

    {{-- SideNavbar --}}
    @include('dashboard.layouts.sidenav')

    <main id="main" class="mt-28 px-3 duration-500 lg:ml-80 lg:px-12">
        {{-- Container --}}
        @yield('container')

        {{-- scripts --}}
        <script src="https://kit.fontawesome.com/2d9c139c31.js" crossorigin="anonymous"></script>

        <script src="{{ asset('js/admin/sidenav.js') }}"></script>
    </main>

    @yield('scripts')
</body>

</html>
