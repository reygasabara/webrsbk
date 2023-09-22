@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endsection

@section('container')
    @include('layouts.carousel')

    <section class="mt-5 mb-12">
        <div class="relative mb-12 flex justify-center items-center" data-aos="fade-right">
            <hr class="w-10 mr-5 border-2 border-yellow-700 rounded-md">
            <h2 class="text-center font-bold text-2xl md:text-4xl">Hubungi Kami</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-700 rounded-md">
        </div>

        <section class="mt-12 mb-10 relative py-5">

            <div class="px-5 flex flex-wrap justify-between">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.2326975627593!2d122.50542297420566!3d-3.972448044460692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98ecde085619e3%3A0x5d4c17a67bded53e!2sRumah%20Sakit%20Bhayangkara%20Kendari!5e0!3m2!1sid!2sid!4v1692882814809!5m2!1sid!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="w-full md:w-[50%] lg:w-[65%] h-[450px] rounded-xl shadow-xl order-2 md:order-1"
                    data-aos="zoom-in-up"></iframe>

                <div class="w-full md:w-[45%] lg:w-[30%] mb-9 md:mb-0 h-[450px] rounded-xl shadow-xl bg-slate-100 p-3 order-1 md:order-2"
                    data-aos="zoom-in-up">
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
                        <div class="mt-8 flex items-center">
                            <i class="fa-solid fa-phone mr-3 text-yellow-500"></i>
                            <p class="text-sm text-justify">+62 823 6060 7020</p>
                        </div>
                        <div class="mt-3 flex items-center">
                            <i class="fa-solid fa-envelope mr-3 text-yellow-500"></i>
                            <a href="mailto:rumkitbhykendari@gmail.com"
                                class="text-sm text-justify hover:text-yellow-600 active:text-yellow-700 duration-200">rumkitbhykendari@gmail.com</a>
                        </div>
                        <div class="mt-3 flex items-center">
                            <i class="fa-brands fa-instagram mr-3 text-yellow-500"></i>
                            <a href="https://www.instagram.com/rs.bhayangkara.kendari/" target="_blank"
                                class="text-sm text-justify hover:text-yellow-600 active:text-yellow-700 duration-200">rs.bhayangkara.kendari</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="mb-12">
        <div class="relative mb-12 flex justify-center items-center" data-aos="fade-right">
            <hr class="w-10 mr-5 border-2 border-yellow-700 rounded-md">
            <h2 class="text-center font-bold text-2xl md:text-4xl">Form Laporan</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-700 rounded-md">
        </div>

        <form method="post" action="/kontak" class="px-10">
            @csrf
            <div class="flex justify-between">
                <div class="w-[48%]">
                    <label for="fullname" class="text-sm">Nama Lengkap <span class="text-red-600">*</span></label>
                    <input type="text" name="fullname" id="fullname"
                        class="bg-gray-50 mb-4 mt-1 border border-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                        required value="{{ old('fullname') }}">
                    @error('fullname')
                        <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-[48%]">
                    <label for="phone" class="text-sm">No. Telepon <span class="text-red-600">*</span></label>
                    <input type="number" name="phone" id="phone"
                        class="bg-gray-50 mb-4 mt-1 border border-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                        value="{{ old('phone') }}" maxlength="13" required>
                    @error('phone')
                        <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror

                </div>
            </div>



            <label for="message" class="text-sm block mb-1">Pesan <span class="text-red-600">*</span></label>
            <textarea id="message" name="message" value="{{ old('message') }}"
                class="g-gray-50 mb-4 mt-1 min-h-[270px] border border-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                required></textarea>
            @error('message')
                <p class="text-xs text-red-700">{{ $message }}</p>
            @enderror

            <button type="submit"
                class="rounded-md bg-green-400 hover:bg-green-500 active:bg-green-600 active:text-white duration-200 text-sm py-2 px-4 mt-7 block mx-auto shadow shadow-black/60"><i
                    class="fa-solid fa-paper-plane mr-1"></i> Kirim</button>

        </form>
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
                $('.carousel-text').removeClass('animate__backInLeft'); // Hapus kelas fadeIn untuk animasi masuk2
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
