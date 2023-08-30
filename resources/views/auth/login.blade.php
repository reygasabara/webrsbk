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

<body class="font-merriweather bg-slate-100 text-slate-900 flex justify-center items-center h-screen">

    {{-- Alert Gagal Login --}}
    @if (session()->has('loginError'))
        <div class="alert alert-danger text-center" role="alert">
            {{ session('loginError') }}
        </div>
    @endif

    <div class="relative rounded-md shadow-md py-5 px-12 bg-slate-200 w-[400px]">
        <a href="/" class="absolute flex items-center right-6">
            <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-5 mr-2">
            <p class="text-xs font-bold">RS. Bhayangkara Kendari</p>
        </a>
        <h1 class="text-4xl font-bold text-center mb-2 mt-12 text-yellow-600">Login</h1>
        <hr class="rounded-full border-2 mb-8 border-yellow-700">
        <form action="/login" method="post" class="flex flex-col">
            @csrf
            <label for="username" class="block mb-2 mt-5 text-sm text-yellow-600">Username</label>
            <div class="relative">
                <input type="text" id="username"
                    class="peer bg-gray-50 border border-yellow-700 text-yellow-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                    placeholder="Masukkan username Anda" autocomplete="off" required>
                <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-yellow-600 peer-invalid:text-red-600">
                    <i class="fa-solid fa-user" class=""></i>
                </div>
            </div>
            <label for="password" class="block mb-2 text-sm mt-6 text-yellow-600">Password</label>
            <div class="relative">
                <input type="password" id="password"
                    class="peer bg-gray-50 border border-yellow-700 text-yellow-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                    placeholder="Masukkan password Anda" autocomplete="off" required>
                <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-yellow-600 peer-invalid:text-red-600">
                    <i class="fa-solid fa-key" class="text-slate-900"></i>
                </div>
            </div>
            <button type="submit"
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm text-white shadow shadow-black/60 hover:scale-110 mt-9 w-20 mx-auto">Login</button>
        </form>


    </div>

    <script src="https://kit.fontawesome.com/2d9c139c31.js" crossorigin="anonymous"></script>
</body>

</html>
