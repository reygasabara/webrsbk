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

    <main id="main" class="ml-64 mt-28 px-10 duration-500">
        {{-- Container --}}
        @yield('container')

        {{-- scripts --}}
        <script src="https://kit.fontawesome.com/2d9c139c31.js" crossorigin="anonymous"></script>

        <script src="{{ asset('js/admin/sidenav.js') }}"></script>
        @yield('scripts')
    </main>

</body>

</html>
