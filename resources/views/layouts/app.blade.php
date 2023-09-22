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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @yield('head')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-merriweather antialiased pt-[63px] lg:pt-[88px] text-slate-900">
    <div id="outerContainer" class="min-h-screen bg-slate-200">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
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

        <footer class="relative bg-slate-900">
            <section class="text-slate-200 px-5 md:px-0 pt-12 pb-12 md:pb-0 w-full flex flex-wrap justify-around">
                <div class="w-full md:w-auto mb-8 md:mb-0">
                    <h3 class="font-semibold text-center md:text-left">RS Bhayangkara Kendari</h3>
                    <p class="text-xs text-center md:text-left mb-10 md:mb-7 mt-2 md:mt-4">Jl. Wayong No. 7, Kendari</p>
                    <p class="text-xs leading-6 flex items-center mb-3"><i class="fa-solid fa-phone mr-3"></i>
                        +62 823 6060 7020</p>
                    <p class="text-xs leading-6 flex items-center mb-3"><i class="fa-solid fa-truck-medical mr-3"></i>
                    </p>
                    <p class="text-xs leading-6 flex items-center mb-3"><i class="fa-solid fa-envelope mr-3"></i><a
                            href="mailto:rumkitbhykendari@gmail.com"
                            class="hover:text-yellow-500 active:text-yellow-700"> rumkitbhykendari@gmail.com</a></p>
                </div>

                <div class="w-[60%] md:w-auto mb-8 md:mb-0">
                    <h3 class="font-semibold">Pelayanan Kami</h3>
                    <div class="text-xs mt-4 flex flex-col">
                        <a href="{{ route('outpacient') }}"
                            class="mb-3 hover:text-yellow-500 w-fit active:text-yellow-700">Rawat Jalan</a>
                        <a href="{{ route('inpacient') }}"
                            class="mb-3 hover:text-yellow-500 w-fit active:text-yellow-700">Rawat Inap</a>
                        <a href="{{ route('support') }}"
                            class="hover:text-yellow-500 w-fit active:text-yellow-700">Penunjang</a>
                    </div>
                </div>

                <div class="w-[40%] md:w-auto mb-8 md:mb-0">
                    <h3 class="font-semibold">Informasi</h3>

                    <div class="text-xs mt-4 flex flex-col">
                        <a href="{{ route('doctorSchedule') }}"
                            class="mb-3 hover:text-yellow-500 w-fit active:text-yellow-700">Jadwal Dokter</a>
                        <a href="{{ route('bedInformation') }}"
                            class="mb-3 hover:text-yellow-500 w-fit active:text-yellow-700">Informasi Tempat Tidur</a>
                        <a href="{{ route('registrationFlow') }}"
                            class="mb-3 hover:text-yellow-500 w-fit active:text-yellow-700">Alur Pendaftaran</a>
                        <a href="{{ route('complaintProcedure') }}"
                            class="mb-3 hover:text-yellow-500 w-fit active:text-yellow-700">Prosedur Komplain</a>
                    </div>
                </div>

                <div class="w-full md:w-auto">
                    <h3 class="font-semibold">Jam Buka</h3>
                    <p class="text-xs mt-4">24 jam</p>
                </div>
            </section>

            <section class="absolute md:static right-9 bottom-[107px] flex justify-end text-white pb-3 pr-3 text-xl">
                <a href="https://www.instagram.com/rs.bhayangkara.kendari/" target="_blank"><i
                        class="fa-brands fa-instagram mr-3 hover:text-orange-700 active:text-orange-500"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100075551007451/" target="_blank"><i
                        class="fa-brands fa-facebook mr-3 hover:text-sky-600 active:text-sky-500"></i></a>
                <a href="https://www.youtube.com/@rsbhayangkarakendari8014" target="_blank"><i
                        class="fa-brands fa-youtube mr-3 hover:text-red-700 active:text-red-500"></i></a>
            </section>

            <section class="bg-slate-800 text-center w-full py-3 text-slate-100 text-xs">
                <p>&copy; 2023 - RS. Bhayangkara Kendari</p>
            </section>
        </footer>
    </div>


    <script src="https://kit.fontawesome.com/2d9c139c31.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        window.addEventListener('load', function() {
            AOS.init();
        });
    </script>

    <script src="{{ asset('js/components/hamburgerButton.js') }}"></script>

    @yield('scripts')
</body>

</html>
