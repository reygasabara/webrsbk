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
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    stars
                </span>
                <h2 class="mb-5 text-xl font-bold">Kelas VVIP</h2>

                <p class="mb-2 text-sm font-bold">Daftar Ruangan</p>
                <ol class="mb-5 text-sm">
                    <li>Edelweis</li>
                </ol>
            </div>
            {{-- <button
                class="translate-y-16 bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0"><a
                    href="{{ route('outpacient') }}">Lihat</a></button> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-1s group mx-10 mb-16 w-full overflow-hidden bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-2 text-6xl">
                    star
                </span>
                <h2 class="mb-5 text-xl font-bold">Kelas VIP</h2>

                <p class="mb-2 text-sm font-bold">Daftar Ruangan</p>
                <ol class="mb-5 list-decimal px-11 text-left text-sm">
                    <li>Edelweis</li>
                    <li>Teratai</li>
                    <li>Seruni</li>
                </ol>
            </div>
            {{-- <button
                class="translate-y-16 bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0"><a
                    href="{{ route('outpacient') }}">Lihat</a></button> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-2s group mx-10 mb-16 w-full overflow-hidden bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <i class="fa-solid fa-1 relative mb-2 text-5xl">
                    <span class="material-symbols-outlined absolute -left-1 -top-2 text-6xl text-slate-900/20">
                        graphic_eq
                    </span>
                </i>
                <h2 class="mb-5 text-xl font-bold">Kelas 1</h2>
                <p class="mb-2 text-sm font-bold">Daftar Ruangan</p>
                <ol class="mb-5 list-decimal px-11 text-left text-sm">
                    <li>Edelweis</li>
                    <li>Teratai</li>
                    <li>Delima</li>
                    <li>Seruni</li>
                    <li>Anggrek</li>
                </ol>
            </div>
            {{-- <button
                class="translate-y-16 bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0"><a
                    href="{{ route('outpacient') }}">Lihat</a></button> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <i class="fa-solid fa-2 relative mb-2 text-5xl">
                    <span class="material-symbols-outlined absolute -left-1 -top-2 text-6xl text-slate-900/20">
                        graphic_eq
                    </span>
                </i>
                <h2 class="mb-5 text-xl font-bold">Kelas 2</h2>
                <p class="mb-2 text-sm font-bold">Daftar Ruangan</p>
                <ol class="mb-5 list-decimal px-11 text-left text-sm">
                    <li>Edelweis</li>
                    <li>Teratai</li>
                    <li>Delima</li>
                    <li>Tulip</li>
                    <li>Seruni</li>
                </ol>
            </div>
            {{-- <button
                class="translate-y-16 bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0"><a
                    href="{{ route('outpacient') }}">Lihat</a></button> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-1s group mx-10 mb-16 w-full overflow-hidden bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <i class="fa-solid fa-3 relative mb-2 text-5xl">
                    <span class="material-symbols-outlined absolute -left-1 -top-2 text-6xl text-slate-900/20">
                        graphic_eq
                    </span>
                </i>
                <h2 class="mb-5 text-xl font-bold">Kelas 3</h2>
                <p class="mb-2 text-sm font-bold">Daftar Ruangan</p>
                <ol class="mb-5 list-decimal px-11 text-left text-sm">
                    <li>Teratai</li>
                    <li>Delima</li>
                    <li>Seruni</li>
                    <li>Anggrek</li>
                </ol>
            </div>
            {{-- <button
                class="translate-y-16 bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0"><a
                    href="{{ route('outpacient') }}">Lihat</a></button> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-2s group mx-10 mb-16 w-full overflow-hidden bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined -translate-y-1 text-6xl">
                    pregnancy
                </span>
                <h2 class="mb-3 -translate-y-2 text-xl font-bold">VK</h2>
                <p class="mb-4 text-sm italic">Verlos Kamer (VK) merupakan ruang pelayanan yang berfungsi sebagai ruang
                    persalinan
                </p>
            </div>
            {{-- <button
                class="translate-y-16 bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0"><a
                    href="{{ route('outpacient') }}">Lihat</a></button> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <i class="fa-solid fa-child mb-6 text-5xl"></i>
                <h2 class="mb-5 text-xl font-bold">PICU</h2>
                <p class="mb-4 text-sm italic">Pediatric Intensive Care Unit (PICU) merupakan ruang perawatan intensif pada
                    anak yang berada dalam kondisi kritis.
                </p>
            </div>
            {{-- <button
                class="translate-y-16 bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0"><a
                    href="{{ route('outpacient') }}">Lihat</a></button> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-1s group mx-10 mb-16 w-full overflow-hidden bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <span class="material-symbols-outlined mb-3 text-6xl">
                    baby_changing_station
                </span>
                <h2 class="mb-5 text-xl font-bold">NICU</h2>
                <p class="mb-4 text-sm italic">Neonatal Intensive Care Unit (NICU) merupakan ruang perawatan intensif yang
                    dikhususkan pada bayi yang baru lahir.
                </p>
            </div>
            {{-- <button
                class="translate-y-16 bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0"><a
                    href="{{ route('outpacient') }}">Lihat</a></button> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-2s group mx-10 mb-16 w-full overflow-hidden bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <i class="fa-solid fa-bed-pulse mb-6 text-5xl"></i>
                <h2 class="mb-5 text-xl font-bold">ICU</h2>
                <p class="mb-4 text-sm italic">Intensive Care Unit (ICU) adalah ruangan khusus yang digunakan untuk merawat
                    pasien yang memerlukan pemantauan intensif.
                </p>
            </div>
            {{-- <button
                class="translate-y-16 bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0"><a
                    href="{{ route('outpacient') }}">Lihat</a></button> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn group mx-10 mb-16 w-full overflow-hidden bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <i class="fa-solid fa-door-closed mb-2 text-5xl"></i>
                <h2 class="mb-5 text-xl font-bold">Isolasi</h2>
                <p class="mb-4 text-sm italic">Isolasi merupakan ruang perawatan khusus untuk pasien yang memerlukan
                    perlakuan isolasi karena memiliki penyakit infeksi agar terpisah dari pasien lain.
                </p>
            </div>
            {{-- <button
                class="translate-y-16 bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0"><a
                    href="{{ route('outpacient') }}">Lihat</a></button> --}}
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-2s group mx-10 mb-16 w-full overflow-hidden bg-white p-5 text-center shadow-md duration-200 hover:scale-105 hover:rounded-md hover:rounded-br-[50px] hover:rounded-tl-[50px] md:w-[30%] lg:w-[20%]">
            <div class="translate-y-5 duration-200 group-hover:translate-y-0">
                <i class="fa-solid fa-hands-holding-child mb-2 text-5xl"></i>
                <h2 class="mb-5 text-xl font-bold">Perinatologi</h2>
                <p class="mb-4 text-sm italic">Perinatologi merupakan ruang pelayanan kesehatan bagi bayi yang baru lahir
                    sampai usia 28 hari karena memiliki masalah atau penyakit dengan risiko tinggi.
                </p>
            </div>
            {{-- <button
                class="translate-y-16 bg-yellow-500 px-3.5 py-2 text-xs capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700 group-hover:translate-y-0"><a
                    href="{{ route('outpacient') }}">Lihat</a></button> --}}
        </div>
    </section>
@endsection
