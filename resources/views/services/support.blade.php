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
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden rounded-md bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[40%] lg:w-[40%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    radiology
                </span>
                <h2 class="mb-5 text-xl font-bold">Radiologi</h2>
                <p class="mb-8 text-sm italic">Radiologi merupakan instalasi penunjang medis yang memberikan layanan
                    pemeriksaan rontgen dengan hasil pemeriksaan berupa gambar yang dapat membantu dokter dalam melakukan
                    diagnosis penyakit pada pasien.
                </p>
            </div>
            {{-- <a href="{{ route('urology') }}"
                class="mx-auto block w-fit translate-y-20 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-1s group mx-10 mb-16 w-full overflow-hidden rounded-md bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[40%] lg:w-[40%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <i class="fa-solid fa-bed-pulse mb-6 text-5xl"></i>
                {{-- <span class="material-symbols-outlined text-6xl mb-2">
                    ophthalmology
                </span> --}}
                <h2 class="mb-4 text-xl font-bold">ICU</h2>
                <p class="mb-8 text-sm italic">Intensive Care Unit (ICU) adalah ruangan khusus yang digunakan untuk merawat
                    pasien yang memerlukan pemantauan intensif.
                </p>
            </div>
            {{-- <a href="{{ route('eye') }}"
                class="mx-auto block w-fit translate-y-20 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-2s group mx-10 mb-16 w-full overflow-hidden rounded-md bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[40%] lg:w-[40%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    science
                </span>
                <h2 class="mb-5 text-xl font-bold">Laboratorium</h2>
                <p class="mb-8 text-sm italic">Laboratorium merupakan instalasi penunjang medis yang digunakan untuk
                    melakukan pengukuran dan pengujian dalam penentuan penyakit dan kondisi kesehatan terhadap pasien.
                </p>
            </div>
            {{-- <a href="{{ route('tht') }}"
                class="mx-auto block w-fit translate-y-20 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden rounded-md bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[40%] lg:w-[40%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    medication
                </span>
                <h2 class="mb-5 text-xl font-bold">Farmasi</h2>
                <p class="mb-8 text-sm italic">Farmasi merupakan instalasi penunjang medis yang bertanggung jawab untuk
                    mengadakan, menyediakan, dan mengelola obat untuk meningkatkan mutu kehidupan pasien.
                </p>
            </div>
            {{-- <a href="{{ route('skin') }}"
                class="mx-auto block w-fit translate-y-20 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden rounded-md bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[40%] lg:w-[40%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    medication
                </span>
                <h2 class="mb-5 text-xl font-bold">CSSD</h2>
                <p class="mb-8 text-sm italic">CSSD (Central Sterile Supply Departement) merupakan
            </div>
            {{-- <a href="{{ route('skin') }}"
                class="mx-auto block w-fit translate-y-20 rounded-full bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0">Lihat</a> --}}
        </div>
    </section>
@endsection
