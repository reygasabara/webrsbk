@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endsection

@section('container')
    <section>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div style="background-image: url({{ asset('img/rsbk.jpg') }})"
                    class="relative overflow-hidden w-full h-[80vh] bg-cover bg-center bg-no-repeat mb-5">
                    <h1 class="carousel-text text-7xl ml-6 opacity-0 font-bold text-white absolute top-6 animate__animated">
                        Teks
                    </h1>
                </div>
            </div>
            <div class="item">
                <div style="background-image: url({{ asset('img/rsbk.jpg') }})"
                    class="relative w-full h-[80vh] bg-cover bg-center bg-no-repeat mb-5">
                    <h1
                        class="carousel-text text-7xl font-bold text-white opacity-0 absolute top-6 right-6 animate__animated">
                        Teks
                        Slide 2</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 mb-12">
        <div class="relative mb-12 flex justify-center items-center" data-aos="fade-right">
            <hr class="w-10 mr-5 border-2 border-yellow-700 rounded-md">
            <h2 class="text-center font-bold text-3xl">Pelayanan</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-700 rounded-md">
        </div>

        <div class="flex flex-wrap justify-evenly text-slate-800">
            <div class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow"
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
                    <h1 class="text-2xl mb-2 font-bold text-white group-hover:-translate-y-7">Rawat Jalan</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110">Lihat</button>
                </div>
            </div>

            <div class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow"
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
                    <h1 class="text-2xl mb-2 font-bold text-white group-hover:-translate-y-7">Rawat Inap</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110">Lihat</button>
                </div>
            </div>

            <div class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow"
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
                    <h1 class="text-2xl mb-2 font-bold text-white group-hover:-translate-y-7">Penunjang</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110">Lihat</button>
                </div>
            </div>
        </div>
    </section>
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
