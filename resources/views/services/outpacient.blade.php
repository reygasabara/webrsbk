@extends('layouts.app')

@section('head')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-2xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">
            {{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">
    </section>

    <section class="flex flex-wrap justify-evenly mb-12">
        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <span class="material-symbols-outlined text-6xl mb-2">
                    urology
                </span>
                <h2 class="font-bold text-xl mb-3">Urologi</h2>
                <p class="italic mb-4 text-sm">Menangani penyakit yang berkaitan dengan gangguan saluran kemih
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('urology') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-1s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                {{-- <i class="fa-solid fa-eye text-5xl mb-2"></i> --}}
                <span class="material-symbols-outlined text-6xl mb-2">
                    ophthalmology
                </span>
                <h2 class="font-bold text-xl mb-3">Mata</h2>
                <p class="italic mb-4 text-sm">Menangani penyakit yang berkaitan dengan gangguan penglihatan
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('eye') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-2s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <span class="material-symbols-outlined text-6xl mb-2">
                    ent
                </span>
                <h2 class="font-bold text-xl mb-3">THT</h2>
                <p class="italic mb-4 text-sm">Menangani penyakit yang berkaitan dengan telinga, hidung, dan
                    tenggorokan
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('tht') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <span class="material-symbols-outlined text-6xl mb-2">
                    dermatology
                </span>
                <h2 class="font-bold text-xl mb-3">Kulit dan Kelamin</h2>
                <p class="italic mb-4 text-sm">Menangani penyakit yang berkaitan dengan gangguan pada kulit dan kelamin
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('skin') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-1s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <span class="material-symbols-outlined text-6xl mb-2">
                    cardiology
                </span>
                <h2 class="font-bold text-xl mb-3">Jantung</h2>
                <p class="italic mb-4 text-sm">Menangani penyakit yang berkaitan dengan gangguan pada jantung
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('heart') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-2s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <span class="material-symbols-outlined text-6xl mb-2">
                    child_care
                </span>
                <h2 class="font-bold text-xl mb-3">Anak</h2>
                <p class="italic mb-7 text-sm">Menangani pemeriksaan dan pengobatan pada anak
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('child') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <span class="material-symbols-outlined text-6xl mb-2">
                    pregnancy
                </span>
                <h2 class="font-bold text-xl mb-3">Obgyn</h2>
                <p class="italic mb-4 text-sm">Menangani pemeriksaan kesehatan pada reproduksi dan kehamilan
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('obgyn') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-1s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <span class="material-symbols-outlined text-6xl mb-2">
                    tibia_alt
                </span>
                <h2 class="font-bold text-xl mb-3">Fisioterapi</h2>
                <p class="italic mb-4 text-sm">Membantu memulihkan kondisi fisik setelah mengalami cedera atau penyakit
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('physiotherapy') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-2s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <span class="material-symbols-outlined text-6xl mb-2">
                    surgical
                </span>
                <h2 class="font-bold text-xl mb-3">Bedah Umum</h2>
                <p class="italic mb-7 text-sm">Menangani pengobatan penyakit dan luka
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('surgery') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <span class="material-symbols-outlined text-6xl mb-2">
                    neurology
                </span>
                <h2 class="font-bold text-xl mb-3">Saraf</h2>
                <p class="italic mb-4 md:mb-6 lg:mb-4 text-sm">Menangani penyakit yang berkaitan dengan gangguan pada sistem
                    saraf
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('nerve') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-1s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <i class="fa-solid fa-stethoscope text-5xl mb-3 mt-2"></i>
                <h2 class="font-bold text-xl mb-3">Umum</h2>
                <p class="italic mb-4 text-sm">Menangani pemeriksaan kesehatan dan pengobatan secara umum
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('general') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-2s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <span class="material-symbols-outlined text-6xl mb-2">
                    femur
                </span>
                <h2 class="font-bold text-xl mb-3">Orthopedy</h2>
                <p class="italic mb-7 text-sm">Menangani pemeriksaan kesehatan pada tulang
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('orthopedy') }}">Lihat</a></button>
        </div>

        <div
            class="group rounded-full hover:rounded-md hover:rounded-tl-[50px] hover:rounded-br-[50px] shadow-md w-full md:w-[30%] lg:w-[20%] p-5 bg-white text-center hover:scale-105 duration-200 overflow-hidden animate__animated animate__zoomIn animate__delay-1s mx-10 mb-16">
            <div class="translate-y-5 group-hover:translate-y-0 duration-200">
                <i class="fa-solid fa-tooth text-5xl mb-2"></i>
                <h2 class="font-bold text-xl mb-3">Gigi</h2>
                <p class="italic mb-4 text-sm">Menangani pemeriksaan kesehatan yang berkaitan dengan gigi
                </p>
            </div>
            <button
                class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-xs capitalize text-white translate-y-16 group-hover:translate-y-0 shadow shadow-black/60 hover:scale-110"><a
                    href="{{ route('tooth') }}">Lihat</a></button>
        </div>
    </section>
@endsection
