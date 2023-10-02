@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endsection

@section('container')
    @include('layouts.carousel')

    <section class="relative flex -top-5 md:-top-7 z-10 text-slate-900 pl-5">
        <div
            class="rounded-md md:rounded-xl bg-green-200 shadow-lg shadow-black/30 px-3 md:px-5 py-2 md:py-3 flex items-center text-slate-700 mr-3 md:mr-8 animate__animated animate__zoomIn">
            <i class="fa-solid fa-phone text-xs md:text-2xl mr-3"></i>
            <div class="">
                <h1 class="font-bold text-[9px] md:text-sm">Call Center</h1>
                <p class="text-[8px] md:text-xs">+62 823 6060 7020</p>
            </div>
        </div>

        <div
            class="rounded-md md:rounded-xl bg-green-200 shadow-lg shadow-black/30 px-3 md:px-5 py-2 md:py-3 flex items-center text-slate-700 animate__animated animate__zoomIn animate__delay-1s">
            <i class="fa-solid fa-envelope text-xs md:text-2xl mr-3"></i>
            <div class="">
                <h1 class="font-bold text-[9px] md:text-sm">Email</h1>
                <p class="text-[8px] md:text-xs"><a href="mailto:rumkitbhykendari@gmail.com"
                        class="text-[8px] md:text-xs hover:text-green-700">rumkitbhykendari@gmail.com</a></p>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="relative mb-12 flex justify-center items-center" data-aos="fade-right">
            <hr class="w-10 mr-5 border-2 border-yellow-700 rounded-md">
            <h2 class="text-center font-bold text-3xl">Pelayanan</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-700 rounded-md">
        </div>

        <div class="flex flex-wrap justify-evenly px-10 md:px-0 text-slate-800">
            <div class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 mb-6 md:mb-0 md:w-[30%] lg:w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow"
                data-aos="zoom-in-down">
                <img src="{{ asset('img/rajal.jpg') }}" alt="Gambar"
                    class="w-full h-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[53%] group-hover:translate-y-0 transition-all duration-500">
                    <i
                        class="fa-solid fa-hospital-user text-5xl w-full mb-3 text-center duration-200 text-white group-hover:-translate-y-24"></i>
                    <h1 class="text-xl md:text-2xl mb-2 font-bold text-white group-hover:-translate-y-7">Rawat Jalan</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110"><a
                            href="{{ route('outpacient') }}">Lihat</a></button>
                </div>
            </div>

            <div class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 mb-6 md:mb-0 md:w-[30%] lg:w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow"
                data-aos="zoom-in-down">
                <img src="{{ asset('img/ranap.jpg') }}" alt="Gambar"
                    class="w-full h-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[53%] group-hover:translate-y-0 transition-all duration-500">
                    <i
                        class="fa-solid fa-bed-pulse text-5xl w-full mb-3 text-center duration-200 text-white group-hover:-translate-y-24"></i>
                    <h1 class="text-xl md:text-2xl mb-2 font-bold text-white group-hover:-translate-y-7">Rawat Inap</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110"><a
                            href="{{ route('inpacient') }}">Lihat</a></button>
                </div>
            </div>

            <div class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 md:w-[30%] lg:w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow"
                data-aos="zoom-in-down" data-delay="3000">
                <img src="{{ asset('img/penunjang.jpg') }}" alt="Gambar"
                    class="w-full h-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[53%] group-hover:translate-y-0 transition-all duration-500">
                    <i
                        class="fa-solid fa-vial text-5xl w-full mb-3 text-center duration-200 text-white group-hover:-translate-y-24"></i>
                    <h1 class="text-xl md:text-2xl mb-2 font-bold text-white group-hover:-translate-y-7">Penunjang</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110"><a
                            href="{{ route('support') }}">Lihat</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-32 mb-10 relative py-5">
        <div class="absolute w-full h-full brightness-50 bg-cover bg-fixed" style="background-image: url('img/bgmap.jpg')">
        </div>

        <div class="relative mt-5 mb-12 flex justify-center items-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="w-10 mr-5 border-2 border-yellow-500 rounded-md">
            <h2 class="text-center font-bold text-3xl text-slate-100">Lokasi</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-500 rounded-md">
        </div>

        <div class="relative px-5 flex flex-wrap justify-between">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.2326975627593!2d122.50542297420566!3d-3.972448044460692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98ecde085619e3%3A0x5d4c17a67bded53e!2sRumah%20Sakit%20Bhayangkara%20Kendari!5e0!3m2!1sid!2sid!4v1692882814809!5m2!1sid!2sid"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                class="w-full md:w-[50%] lg:w-[65%] mb-6 md:mb-0 h-[400px] rounded-xl" data-aos="zoom-in-up"></iframe>

            <div class="w-full md:w-[45%] lg:w-[30%] h-[400px] rounded-xl bg-slate-100 p-3" data-aos="zoom-in-up">
                <div class="overflow-hidden rounded-md">
                    <img src="img/rsbk.jpg" alt="example"
                        class="w-full group-hover:scale-105 duration-200 group-hover:rotate-2 brightness-75 group-hover:brightness-100 h-44 object-cover object-center">
                    <h2 class="font-bold mt-2 text-yellow-600">Rumah Sakit Bhayangkara</h2>
                    <div class="mt-5 flex items-center">
                        <i class="fa-solid fa-location-dot mr-3 text-yellow-500"></i>
                        <p class="text-sm text-justify">Jl. Wayong No.7, Kec. Mandonga, Kota Kendari, Sulawesi
                            Tenggara 93117
                        </p>
                    </div>
                    <div class="mt-3 flex items-center">
                        <i class="fa-solid fa-clock mr-3 text-yellow-500"></i>
                        <p class="text-sm text-justify">Buka 24 jam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($posts->isNotEmpty())
        <section class="mt-32 mb-10">
            <div class="relative mb-12 flex justify-center items-center" data-aos="fade-right">
                <hr class="w-10 mr-5 border-2 border-yellow-700 rounded-md">
                <h2 class="text-center font-bold text-2xl lg:text-3xl">Informasi Terbaru</h2>
                <hr class="w-10 ml-5 border-2 border-yellow-700 rounded-md">
            </div>

            <div class="flex flex-wrap justify-around px-10 md:px-0">
                @foreach ($posts as $post)
                    <div
                        class="group mb-6 md:mb-0 w-full md:w-[31%] lg:w-[25%] rounded-md rounded-tl-[30px] rounded-br-[30px] shadow-md overflow-hidden md:hover:-translate-y-4 duration-500 bg-slate-100 p-3 flex-col justify-between items-stretch">
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

            <div class="flex justify-end px-5 mt-4">
                <button
                    class="group/button mt-3 relative rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-400  active:from-yellow-500 active:to-green-600 duration-300 transition-colors px-3.5 text-sm capitalize text-white shadow shadow-black/60 mb-4 overflow-hidden w-44 h-10 flex items-center justify-center">
                    <a href="{{ route('news') }}"
                        class="absolute z-10 peer w-full h-full flex items-center justify-center tracking-wide">Lihat
                        Semua
                        Berita <i class="fa-solid fa-angles-right ml-2"></i></a>
                    <div
                        class="absolute top-0 left-full duration-200 group-hover/button:left-0 w-full h-full bg-gradient-to-r from-yellow-400 to-green-500 peer-active:from-yellow-500 peer-active:to-green-600">
                    </div>
                </button>
            </div>
        </section>
    @endif

    <section class="mt-32 mb-10">
        <div class="relative mb-12 flex justify-center items-center" data-aos="fade-right">
            <hr class="w-10 mr-5 border-2 border-yellow-700 rounded-md">
            <h2 class="text-center font-bold text-2xl lg:text-3xl">Alur Pendaftaran</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-700 rounded-md">
        </div>

        <div class="px-10 lg:px-0">
            <img src="{{ asset('img/alurumum.png') }}" alt="alur umum" class="mx-auto">
            <div class="flex justify-end px-5 mt-4">
                <button
                    class="group/button mt-3 relative rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-400  active:from-yellow-500 active:to-green-600 duration-300 transition-colors px-3.5 text-sm capitalize text-white shadow shadow-black/60 mb-4 overflow-hidden w-56 h-10 flex items-center justify-center">
                    <a href="{{ route('registrationFlow') }}"
                        class="absolute z-10 peer w-full h-full flex items-center justify-center tracking-wide">Alur
                        Pendaftaran Lainnya <i class="fa-solid fa-angles-right ml-2"></i></a>
                    <div
                        class="absolute top-0 left-full duration-200 group-hover/button:left-0 w-full h-full bg-gradient-to-r from-yellow-400 to-green-500 peer-active:from-yellow-500 peer-active:to-green-600">
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
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items: 1, // Jumlah slide yang ditampilkan
                autoplay: true, // Bermain otomatis
                autoplayTimeout: 10000, // Durasi antara slide (dalam milidetik)
                loop: true, // Mengulang dari awal setelah slide terakhir
                onChanged: updateTextVisibility,
            });

            function updateTextVisibility(event) {
                $('.carousel-text').removeClass('animate__backInLeft'); // Hapus kelas fadeIn untuk animasi masuk
                $('.carousel-text').removeClass('animate__backOutLeft'); // Hapus kelas fadeOut untuk animasi keluar

                let currentSlideIndex = event.item.index;
                let $currentText = $('.owl-item').eq(currentSlideIndex).find('.carousel-text');

                // Tambahkan kelas fadeIn untuk animasi masuk
                setTimeout(function() {
                    // Tambahkan kelas fadeIn untuk animasi masuk
                    $currentText.addClass('animate__backInLeft').removeClass('animate__backOutLeft');
                }, 500); // Jeda 1 detik sebelum teks masuk

                // Atur waktu animasi hilang
                setTimeout(function() {
                    $currentText.addClass('animate__backOutLeft');
                }, 9000); // Ubah angka sesuai dengan durasi yang Anda inginkan (dalam milidetik)
            }
        });
    </script>
@endsection
