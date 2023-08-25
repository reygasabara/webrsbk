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
                        Teks Slide
                        1
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

    <section></section>
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
