@extends('layouts.app')

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
@endsection

@section('container')
    <section class="pt-12 pb-8 mx-6">
        <h1 class="text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">{{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">
    </section>

    <section class="px-8 mb-12">
        <div class="w-full rounded-md bg-slate-50 p-5">
            <img src="" alt="" class="bg-slate-100 h-[300px]">
            <div class="font-bold text-xl mt-8">{{ $latest['judul'] }}</div>
            <div class="line-clamp-3 overflow-hidden text-justify mt-4">{{ strip_tags($latest['berita']) }}</div>

            <button
                class="group/button mt-7 relative rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-400  active:from-yellow-500 active:to-green-600 duration-300 transition-colors px-3.5 text-xs capitalize text-white shadow shadow-black/60 mb-4 overflow-hidden w-32 h-7 flex items-center justify-center">
                <a href="/"
                    class="absolute z-10 peer w-full h-full flex items-center justify-center tracking-wide">Selengkapnya <i
                        class="fa-solid fa-angles-right ml-2"></i></a>
                <div
                    class="absolute top-0 left-full duration-200 group-hover/button:left-0 w-full h-full bg-gradient-to-r from-yellow-400 to-green-500 peer-active:from-yellow-500 peer-active:to-green-600">
                </div>
            </button>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
@endsection
