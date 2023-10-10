@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endsection

@section('container')
    @include('layouts.carousel')

    <section class="mb-12 mt-16">
        <div class="relative mb-12 flex items-center justify-center" data-aos="fade-right">
            <hr class="mr-5 w-10 rounded-md border-2 border-yellow-700">
            <h2 class="text-center text-2xl font-bold md:text-4xl">Hubungi Kami</h2>
            <hr class="ml-5 w-10 rounded-md border-2 border-yellow-700">
        </div>

        <section class="relative mb-10 mt-12 py-5">

            <div class="flex flex-wrap justify-between px-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.2326975627593!2d122.50542297420566!3d-3.972448044460692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98ecde085619e3%3A0x5d4c17a67bded53e!2sRumah%20Sakit%20Bhayangkara%20Kendari!5e0!3m2!1sid!2sid!4v1692882814809!5m2!1sid!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="order-2 h-[505px] w-full rounded-xl shadow-xl md:order-1 md:w-[50%] lg:w-[65%]"
                    data-aos="zoom-in-up"></iframe>

                <div class="order-1 mb-9 h-fit w-full rounded-xl bg-slate-100 p-3 shadow-xl md:order-2 md:mb-0 md:w-[45%] lg:w-[30%]"
                    data-aos="zoom-in-up">
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
                        <div class="mt-8 flex items-center">
                            <i class="fa-solid fa-phone mr-3 text-yellow-500"></i>
                            <p class="text-justify text-sm">+62 823 6060 7020</p>
                        </div>
                        <div class="mt-3 flex items-center">
                            <i class="fa-solid fa-envelope mr-3 text-yellow-500"></i>
                            <a href="mailto:rumkitbhykendari@gmail.com"
                                class="text-justify text-sm duration-200 hover:text-yellow-600 active:text-yellow-700">rumkitbhykendari@gmail.com</a>
                        </div>
                        <div class="mt-3 flex items-center">
                            <i class="fa-brands fa-facebook mr-3 text-yellow-500"></i>
                            <a href="https://www.facebook.com/profile.php?id=100075551007451/" target="_blank"
                                target="_blank"
                                class="text-justify text-sm duration-200 hover:text-yellow-600 active:text-yellow-700">RS.
                                Bhayangkara Kendari</a>
                        </div>
                        <div class="mt-3 flex items-center">
                            <i class="fa-brands fa-youtube mr-[10px] text-yellow-500"></i>
                            <a href="https://www.youtube.com/@rsbhayangkarakendari8014" target="_blank"
                                class="text-justify text-sm duration-200 hover:text-yellow-600 active:text-yellow-700">RS
                                Bhayangkara Kendari</a>
                        </div>
                        <div class="mt-3 flex items-center">
                            <i class="fa-brands fa-instagram mr-[14px] text-yellow-500"></i>
                            <a href="https://www.instagram.com/rs.bhayangkara.kendari/" target="_blank"
                                class="text-justify text-sm duration-200 hover:text-yellow-600 active:text-yellow-700">rs.bhayangkara.kendari</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    {{-- <section class="mb-12">
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
    </section> --}}
@endsection

@section('scripts')
    {{-- <script src="{{ asset('js/components/lazyLoadingVideo.js') }}"></script> --}}
@endsection
