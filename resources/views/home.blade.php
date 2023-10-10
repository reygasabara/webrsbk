@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endsection

@section('container')
    @include('layouts.carousel')

    <section class="z-12 relative -top-5 flex pl-5 text-slate-900 md:-top-7">
        <div
            class="animate__animated animate__zoomIn mr-3 flex items-center rounded-md bg-green-200 px-3 py-2 text-slate-700 shadow-lg shadow-black/30 md:mr-8 md:rounded-xl md:px-5 md:py-3">
            <i class="fa-solid fa-phone mr-3 text-xs md:text-2xl"></i>
            <div class="">
                <h1 class="text-[9px] font-bold md:text-sm">Call Center</h1>
                <p class="text-[8px] md:text-xs">+62 823 6060 7020</p>
            </div>
        </div>

        <div
            class="animate__animated animate__zoomIn animate__delay-1s flex items-center rounded-md bg-green-200 px-3 py-2 text-slate-700 shadow-lg shadow-black/30 md:rounded-xl md:px-5 md:py-3">
            <i class="fa-solid fa-envelope mr-3 text-xs md:text-2xl"></i>
            <div class="">
                <h1 class="text-[9px] font-bold md:text-sm">Email</h1>
                <p class="text-[8px] md:text-xs"><a href="mailto:rumkitbhykendari@gmail.com"
                        class="text-[8px] hover:text-green-700 md:text-xs">rumkitbhykendari@gmail.com</a></p>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="relative mb-12 flex items-center justify-center" data-aos="fade-right">
            <hr class="mr-5 w-10 rounded-md border-2 border-yellow-700">
            <h2 class="text-center text-3xl font-bold">Pelayanan</h2>
            <hr class="ml-5 w-10 rounded-md border-2 border-yellow-700">
        </div>

        <div class="flex flex-wrap justify-evenly px-10 text-slate-800 md:px-0">
            <div class="group relative mb-6 flex h-64 items-center justify-center overflow-hidden rounded-md shadow-md transition-shadow duration-200 hover:shadow-xl hover:shadow-black/30 md:mb-0 md:w-[30%] lg:w-[20%]"
                data-aos="zoom-in-down">
                <img src="{{ asset('img/rajal.jpg') }}" alt="Gambar"
                    class="h-full w-full object-cover transition-transform group-hover:rotate-3 group-hover:scale-125">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex translate-y-[53%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <i
                        class="fa-solid fa-hospital-user mb-3 w-full text-center text-5xl text-white duration-200 group-hover:-translate-y-24"></i>
                    <h1 class="mb-2 text-xl font-bold text-white group-hover:-translate-y-7 md:text-2xl">Rawat Jalan</h1>
                    <p
                        class="mb-9 text-xs italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 px-3.5 py-2 text-sm capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700"><a
                            href="{{ route('outpacient') }}">Lihat</a></button>
                </div>
            </div>

            <div class="group relative mb-6 flex h-64 w-96 items-center justify-center overflow-hidden rounded-md shadow-md transition-shadow duration-200 hover:shadow-xl hover:shadow-black/30 md:mb-0 md:w-[30%] lg:w-[20%]"
                data-aos="zoom-in-down">
                <img src="{{ asset('img/ranap.jpg') }}" alt="Gambar"
                    class="h-full w-full object-cover transition-transform group-hover:rotate-3 group-hover:scale-125">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex translate-y-[53%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <i
                        class="fa-solid fa-bed-pulse mb-3 w-full text-center text-5xl text-white duration-200 group-hover:-translate-y-24"></i>
                    <h1 class="mb-2 text-xl font-bold text-white group-hover:-translate-y-7 md:text-2xl">Rawat Inap</h1>
                    <p
                        class="mb-9 text-xs italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 px-3.5 py-2 text-sm capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700"><a
                            href="{{ route('inpacient') }}">Lihat</a></button>
                </div>
            </div>

            <div class="group relative flex h-64 items-center justify-center overflow-hidden rounded-md shadow-md transition-shadow duration-200 hover:shadow-xl hover:shadow-black/30 md:w-[30%] lg:w-[20%]"
                data-aos="zoom-in-down" data-delay="3000">
                <img src="{{ asset('img/penunjang.jpg') }}" alt="Gambar"
                    class="h-full w-full object-cover transition-transform group-hover:rotate-3 group-hover:scale-125">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex translate-y-[53%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <i
                        class="fa-solid fa-vial mb-3 w-full text-center text-5xl text-white duration-200 group-hover:-translate-y-24"></i>
                    <h1 class="mb-2 text-xl font-bold text-white group-hover:-translate-y-7 md:text-2xl">Penunjang</h1>
                    <p
                        class="mb-9 text-xs italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 px-3.5 py-2 text-sm capitalize text-white shadow shadow-black/60 duration-300 hover:scale-110 hover:bg-yellow-600 active:bg-yellow-700"><a
                            href="{{ route('support') }}">Lihat</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="relative mb-10 mt-32 py-5">
        <div class="absolute h-full w-full bg-cover bg-fixed brightness-50" style="background-image: url('img/bgmap.jpg')">
        </div>

        <div class="relative mb-12 mt-5 flex items-center justify-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="mr-5 w-10 rounded-md border-2 border-yellow-500">
            <h2 class="text-center text-3xl font-bold text-slate-100">Lokasi</h2>
            <hr class="ml-5 w-10 rounded-md border-2 border-yellow-500">
        </div>

        <div class="relative flex flex-wrap justify-between px-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.2326975627593!2d122.50542297420566!3d-3.972448044460692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98ecde085619e3%3A0x5d4c17a67bded53e!2sRumah%20Sakit%20Bhayangkara%20Kendari!5e0!3m2!1sid!2sid!4v1692882814809!5m2!1sid!2sid"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                class="mb-6 h-[400px] w-full rounded-xl md:mb-0 md:w-[50%] lg:w-[65%]" data-aos="zoom-in-up"></iframe>

            <div class="h-[400px] w-full rounded-xl bg-slate-100 p-3 md:w-[45%] lg:w-[30%]" data-aos="zoom-in-up">
                <div class="overflow-hidden rounded-md">
                    <img src="img/rsbk.jpg" alt="example"
                        class="h-44 w-full object-cover object-center brightness-75 duration-200 group-hover:rotate-2 group-hover:scale-105 group-hover:brightness-100">
                    <h2 class="mt-2 font-bold text-yellow-600">Rumah Sakit Bhayangkara</h2>
                    <div class="mt-5 flex items-center">
                        <i class="fa-solid fa-location-dot mr-3 text-yellow-500"></i>
                        <p class="text-justify text-sm">Jl. Wayong No.7, Kec. Mandonga, Kota Kendari, Sulawesi
                            Tenggara 93117
                        </p>
                    </div>
                    <div class="mt-3 flex items-center">
                        <i class="fa-solid fa-clock mr-3 text-yellow-500"></i>
                        <p class="text-justify text-sm">Buka 24 jam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($posts->isNotEmpty())
        <section class="mb-10 mt-32">
            <div class="relative mb-12 flex items-center justify-center" data-aos="fade-right">
                <hr class="mr-5 w-10 rounded-md border-2 border-yellow-700">
                <h2 class="text-center text-2xl font-bold lg:text-3xl">Informasi Terbaru</h2>
                <hr class="ml-5 w-10 rounded-md border-2 border-yellow-700">
            </div>

            <div class="flex flex-wrap justify-around px-10 md:px-0">
                @foreach ($posts as $post)
                    <div
                        class="group mb-6 w-full flex-col items-stretch justify-between overflow-hidden rounded-md rounded-br-[30px] rounded-tl-[30px] bg-slate-100 p-3 shadow-md duration-500 md:mb-0 md:w-[31%] md:hover:-translate-y-4 lg:w-[25%]">
                        <div class="overflow-hidden rounded-br-[30px] rounded-tl-[30px]">
                            <img src="{{ asset('storage/' . substr($post->foto, 7)) }}" alt="berita"
                                class="h-48 w-full bg-slate-100 object-cover brightness-75 duration-200 group-hover:rotate-2 group-hover:scale-105 group-hover:brightness-100">
                        </div>
                        <h3 class="mt-3 text-xl font-bold text-slate-900">{{ $post->judul }}</h3>
                        <p class="line-clamp-3 max-h-[70px] overflow-hidden py-3 text-justify text-sm">
                            {{ strip_tags($post->berita) }}
                        </p>
                        <button
                            class="group/button relative mb-4 mt-5 flex h-8 w-24 items-center justify-center overflow-hidden rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-400 px-3.5 text-xs capitalize text-white shadow shadow-black/60 transition-colors duration-300 active:from-yellow-500 active:to-green-600">
                            <a href="{{ route('detailNews', ['post' => $post->slug]) }}"
                                class="peer absolute z-10 flex h-full w-full items-center justify-center tracking-wide">Selengkapnya</a>
                            <div
                                class="absolute left-full top-0 h-full w-full bg-gradient-to-r from-yellow-400 to-green-500 duration-200 group-hover/button:left-0 peer-active:from-yellow-500 peer-active:to-green-600">
                            </div>
                        </button>
                    </div>
                @endforeach
            </div>

            <div class="mt-4 flex justify-end px-5">
                <button
                    class="group/button relative mb-4 mt-3 flex h-10 w-44 items-center justify-center overflow-hidden rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-400 px-3.5 text-sm capitalize text-white shadow shadow-black/60 transition-colors duration-300 active:from-yellow-500 active:to-green-600">
                    <a href="{{ route('news') }}"
                        class="peer absolute z-10 flex h-full w-full items-center justify-center tracking-wide">Lihat
                        Semua
                        Berita <i class="fa-solid fa-angles-right ml-2"></i></a>
                    <div
                        class="absolute left-full top-0 h-full w-full bg-gradient-to-r from-yellow-400 to-green-500 duration-200 group-hover/button:left-0 peer-active:from-yellow-500 peer-active:to-green-600">
                    </div>
                </button>
            </div>
        </section>
    @endif

    <section class="mb-10 mt-32">
        <div class="relative mb-12 flex items-center justify-center" data-aos="fade-right">
            <hr class="mr-5 w-10 rounded-md border-2 border-yellow-700">
            <h2 class="text-center text-2xl font-bold lg:text-3xl">Alur Pendaftaran</h2>
            <hr class="ml-5 w-10 rounded-md border-2 border-yellow-700">
        </div>

        <div class="px-10 lg:px-0">
            <img src="{{ asset('img/alurumum.png') }}" alt="alur umum" class="mx-auto">
            <div class="mt-4 flex justify-end px-5">
                <button
                    class="group/button relative mb-4 mt-3 flex h-10 w-56 items-center justify-center overflow-hidden rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-400 px-3.5 text-sm capitalize text-white shadow shadow-black/60 transition-colors duration-300 active:from-yellow-500 active:to-green-600">
                    <a href="{{ route('registrationFlow') }}"
                        class="peer absolute z-10 flex h-full w-full items-center justify-center tracking-wide">Alur
                        Pendaftaran Lainnya <i class="fa-solid fa-angles-right ml-2"></i></a>
                    <div
                        class="absolute left-full top-0 h-full w-full bg-gradient-to-r from-yellow-400 to-green-500 duration-200 group-hover/button:left-0 peer-active:from-yellow-500 peer-active:to-green-600">
                    </div>
                </button>
            </div>
        </div>
    </section>

    {{-- <section class="mt-32 mb-10">
        <div class="relative mb-12 flex justify-center items-center" data-aos="fade-right">
            <hr class="w-10 mr-5 border-2 border-yellow-700 rounded-md">
            <h2 class="text-center font-bold text-3xl">Prosedur Komplain</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-700 rounded-md">
        </div>
    </section> --}}
@endsection

@section('scripts')
    {{-- <script src="{{ asset('js/components/lazyLoadingVideo.js') }}"></script>  --}}
@endsection
