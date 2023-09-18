@extends('layouts.app')

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
@endsection

@section('container')
    <section class="pt-12 pb-8 mx-6">
        <h1 class="text-3xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">
            {{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">
    </section>

    <div class="relative mb-12 flex justify-center items-center" data-aos="fade-right">
        <hr class="w-10 mr-5 border-2 border-yellow-700 rounded-md">
        <h2 class="text-center font-bold text-2xl md:text-3xl">Informasi Utama</h2>
        <hr class="w-10 ml-5 border-2 border-yellow-700 rounded-md">
    </div>

    <section class="px-8 mb-12">
        <div class="w-full rounded-md bg-slate-50 p-5">
            <img src="{{ asset('storage/' . substr($latest->foto, 7)) }}" alt="berita"
                class="bg-slate-100 w-full h-[200px] md:h-[300px] rounded-lg object-cover">
            <div class="font-bold text-xl mt-8">{{ $latest['judul'] }}</div>
            <div class="line-clamp-3 overflow-hidden text-justify mt-4">{{ strip_tags($latest['berita']) }}</div>

            <button
                class="group/button mt-7 relative rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-400  active:from-yellow-500 active:to-green-600 duration-300 transition-colors px-3.5 text-xs capitalize text-white shadow shadow-black/60 mb-4 overflow-hidden w-32 h-7 flex items-center justify-center">
                <a href="{{ route('detailNews', ['post' => $latest->slug]) }}"
                    class="absolute z-10 peer
                    w-full h-full flex items-center justify-center tracking-wide">Selengkapnya
                    <i class="fa-solid fa-angles-right ml-2"></i></a>
                <div
                    class="absolute top-0 left-full duration-200 group-hover/button:left-0 w-full h-full bg-gradient-to-r from-yellow-400 to-green-500 peer-active:from-yellow-500 peer-active:to-green-600">
                </div>
            </button>
        </div>
    </section>

    <div class="relative mb-12 mt-20 flex justify-center items-center" data-aos="fade-right">
        <hr class="w-10 mr-5 border-2 border-yellow-700 rounded-md">
        <h2 class="text-center font-bold text-2xl md:text-3xl">Informasi Lainnya</h2>
        <hr class="w-10 ml-5 border-2 border-yellow-700 rounded-md">
    </div>

    <div class="flex flex-wrap justify-around px-10 mb-12 md:px-0">
        @foreach ($posts as $post)
            <div
                class="group mb-6 md:mb-0 w-full md:w-[32%] lg:w-[25%] rounded-md rounded-tl-[30px] rounded-br-[30px] shadow-md overflow-hidden md:hover:-translate-y-4 duration-500 bg-slate-100 p-3 flex-col justify-between items-stretch">
                <div class="overflow-hidden rounded-tl-[30px] rounded-br-[30px]">
                    <img src="{{ asset('storage/' . substr($post->foto, 7)) }}" alt="berita"
                        class="w-full h-48 object-cover bg-slate-100 group-hover:scale-105 duration-200 group-hover:rotate-2 brightness-75 group-hover:brightness-100">
                </div>
                <h3 class="font-bold mt-3 text-xl text-slate-900">{{ $post->judul }}</h3>
                <p class="text-justify py-3 text-sm line-clamp-3 overflow-hidden max-h-[70px]">
                    {{ strip_tags($post->berita) }}
                </p>
                <button
                    class="group/button mt-5 relative rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-400  active:from-yellow-500 active:to-green-600 duration-300 transition-colors px-3.5 text-xs capitalize text-white shadow shadow-black/60 mb-4 overflow-hidden w-24 h-8 flex items-center justify-center">
                    <a href="{{ route('detailNews', ['post' => $post->slug]) }}"
                        class="absolute z-10 peer w-full h-full flex items-center justify-center tracking-wide">Selengkapnya</a>
                    <div
                        class="absolute top-0 left-full duration-200 group-hover/button:left-0 w-full h-full bg-gradient-to-r from-yellow-400 to-green-500 peer-active:from-yellow-500 peer-active:to-green-600">
                    </div>
                </button>
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
@endsection
