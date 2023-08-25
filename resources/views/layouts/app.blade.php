<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} | RS Bhayangkara Kendari</title>

    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;0,900;1,300;1,400&display=swap"
        rel="stylesheet">

    {{-- animation --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @yield('head')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-merriweather antialiased pt-[88px] text-slate-900">
    <div class="min-h-screen bg-slate-200 dark:bg-slate-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-slate-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{-- {{ $slot }} --}}
            @yield('container')
        </main>

        <footer class="bg-slate-900 text-slate-200 py-20 w-full flex justify-evenly">
            <section class="">
                <h3 class="font-semibold">RS Bhayangkara Kendari</h3>
                <p class="text-xs mb-7 mt-2">Jl. Wayong No. 7, Kendari</p>
                <p class="text-xs leading-6 flex items-center mb-3"><i class="fa-solid fa-phone text-lg mr-3"></i>
                    +62 823 6060 7020</p>
                <p class="text-xs leading-6 flex items-center mb-3"><i
                        class="fa-solid fa-truck-medical text-lg mr-3"></i>
                </p>
                <p class="text-xs leading-6 flex items-center mb-3"><i class="fa-solid fa-envelope text-lg mr-3"></i>
                    rumkitbhykendari@gmail.com</p>
            </section>

            <section>
                <h3 class="font-semibold">Pelayanan Kami</h3>

            </section>

            <section>
                <h3 class="font-semibold">Informasi</h3>

            </section>

            <section>
                <h3 class="font-semibold">Jam Buka</h3>

            </section>
        </footer>
    </div>


    <script src="https://kit.fontawesome.com/2d9c139c31.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    @yield('scripts')
</body>

</html>
