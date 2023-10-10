@extends('layouts.app')

@section('head')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection

@section('container')
    <section class="mx-6 py-12">
        <h1 class="animate__animated animate__lightSpeedInLeft mb-2 inline-block text-2xl font-bold md:text-4xl">
            {{ $submenu }}</h1>
        <hr class="mb-12 rounded-md border-2 border-yellow-500">
    </section>

    <section class="mb-12 flex flex-wrap justify-evenly">
        <div
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    urology
                </span>
                <h2 class="mb-3 text-xl font-bold">Urologi</h2>
                <p class="mb-4 text-sm italic">Menangani penyakit yang berkaitan dengan gangguan saluran kemih
                </p>
            </div>
            <a href="{{ route('urology') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-1s group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                {{-- <i class="fa-solid fa-eye text-5xl mb-2"></i> --}}
                <span class="material-symbols-outlined mb-2 text-6xl">
                    ophthalmology
                </span>
                <h2 class="mb-3 text-xl font-bold">Mata</h2>
                <p class="mb-4 text-sm italic">Menangani penyakit yang berkaitan dengan gangguan penglihatan
                </p>
            </div>
            <a href="{{ route('eye') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-2s group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    ent
                </span>
                <h2 class="mb-3 text-xl font-bold">THT</h2>
                <p class="mb-4 text-sm italic">Menangani penyakit yang berkaitan dengan telinga, hidung, dan
                    tenggorokan
                </p>
            </div>
            <a href="{{ route('tht') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    dermatology
                </span>
                <h2 class="mb-3 text-xl font-bold">Kulit dan Kelamin</h2>
                <p class="mb-4 text-sm italic">Menangani penyakit yang berkaitan dengan gangguan pada kulit dan kelamin
                </p>
            </div>
            <a href="{{ route('skin') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-1s group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    cardiology
                </span>
                <h2 class="mb-3 text-xl font-bold">Jantung</h2>
                <p class="mb-4 text-sm italic">Menangani penyakit yang berkaitan dengan gangguan pada jantung
                </p>
            </div>
            <a href="{{ route('heart') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-2s group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    child_care
                </span>
                <h2 class="mb-3 text-xl font-bold">Anak</h2>
                <p class="mb-7 text-sm italic">Menangani pemeriksaan dan pengobatan pada anak
                </p>
            </div>
            <a href="{{ route('child') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">
                Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    pregnancy
                </span>
                <h2 class="mb-3 text-xl font-bold">Obgyn</h2>
                <p class="mb-4 text-sm italic">Menangani pemeriksaan kesehatan pada reproduksi dan kehamilan
                </p>
            </div>
            <a href="{{ route('obgyn') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-1s group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    tibia_alt
                </span>
                <h2 class="mb-3 text-xl font-bold">Fisioterapi</h2>
                <p class="mb-4 text-sm italic">Membantu memulihkan kondisi fisik setelah mengalami cedera atau penyakit
                </p>
            </div>
            <a href="{{ route('physiotherapy') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-2s group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    surgical
                </span>
                <h2 class="mb-3 text-xl font-bold">Bedah Umum</h2>
                <p class="mb-7 text-sm italic">Menangani pengobatan penyakit dan luka
                </p>
            </div>
            <a href="{{ route('surgery') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    neurology
                </span>
                <h2 class="mb-3 text-xl font-bold">Saraf</h2>
                <p class="mb-4 text-sm italic md:mb-6 lg:mb-4">Menangani penyakit yang berkaitan dengan gangguan pada sistem
                    saraf
                </p>
            </div>
            <a href="{{ route('nerve') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-1s group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <i class="fa-solid fa-stethoscope mb-3 mt-2 text-5xl"></i>
                <h2 class="mb-3 text-xl font-bold">Umum</h2>
                <p class="mb-4 text-sm italic">Menangani pemeriksaan kesehatan dan pengobatan secara umum
                </p>
            </div>
            <a href="{{ route('general') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-2s group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    femur
                </span>
                <h2 class="mb-3 text-xl font-bold">Orthopedy</h2>
                <p class="mb-7 text-sm italic">Menangani pemeriksaan kesehatan pada tulang
                </p>
            </div>
            <a href="{{ route('orthopedy') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    pulmonology
                </span>
                <h2 class="mb-3 text-xl font-bold">Paru</h2>
                <p class="mb-4 text-sm italic md:mb-6 lg:mb-4">Menangani penyakit yang berkaitan dengan gangguan sistem
                    pernapasan bagian bawah.
                </p>
            </div>
            <a href="{{ route('lungs') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-1s group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <i class="fa-solid fa-tooth mb-2 text-5xl"></i>
                <h2 class="mb-3 text-xl font-bold">Gigi</h2>
                <p class="mb-4 text-sm italic">Menangani pemeriksaan kesehatan yang berkaitan dengan gigi
                </p>
            </div>
            <a href="{{ route('tooth') }}"
                class="mx-auto block w-fit translate-y-24 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-2s group mx-10 mb-16 w-full overflow-hidden rounded-full bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    hematology
                </span>
                <h2 class="mb-3 text-xl font-bold">Interna</h2>
                <p class="mb-7 text-sm italic">Menangani pemeriksaan kesehatan yang terkait dengan organ dalam tubuh
                    manusia
                </p>
            </div>
            <a href="{{ route('internal') }}"
                class="mx-auto block w-fit translate-y-32 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a>
        </div>
    </section>
@endsection
