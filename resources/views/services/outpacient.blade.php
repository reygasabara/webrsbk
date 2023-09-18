@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-3xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">
            {{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">
    </section>

    <section class="flex flex-wrap justify-evenly mb-12">
        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <i class="fa-solid fa-lungs text-5xl mb-2"></i>
                <h2 class="font-bold text-xl mb-3">Judul</h2>
                <p class="italic mb-4 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae nesciunt.
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('outpacient') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-1s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <i class="fa-solid fa-tooth text-5xl mb-2"></i>
                <h2 class="font-bold text-xl mb-3">Judul</h2>
                <p class="italic mb-4 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae
                    nesciunt.
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('outpacient') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-2s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <i class="fa-solid fa-eye text-5xl mb-2"></i>
                <h2 class="font-bold text-xl mb-3">Judul</h2>
                <p class="italic mb-4 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae
                    nesciunt.
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('outpacient') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <i class="fa-solid fa-lungs text-5xl mb-2"></i>
                <h2 class="font-bold text-xl mb-3">Judul</h2>
                <p class="italic mb-4 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae
                    nesciunt.
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('outpacient') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-1s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <i class="fa-solid fa-tooth text-5xl mb-2"></i>
                <h2 class="font-bold text-xl mb-3">Judul</h2>
                <p class="italic mb-4 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae
                    nesciunt.
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('outpacient') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-2s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <i class="fa-solid fa-eye text-5xl mb-2"></i>
                <h2 class="font-bold text-xl mb-3">Judul</h2>
                <p class="italic mb-4 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae
                    nesciunt.
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('outpacient') }}">Lihat</a></button>
        </div>
    </section>
@endsection
