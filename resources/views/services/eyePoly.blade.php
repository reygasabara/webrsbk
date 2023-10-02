@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-2xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">Poli Mata
        </h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">
    </section>

    <section class="md:flex justify-between mx-6 md:mx-12 mb-12">
        <div class="md:w-[45%]">
            <p class="text-justify md:text-left">Poli mata adalah layanan kesehatan untuk pemeriksaan dan perawatan yang
                berhubungan dengan penyakit mata atau
                gangguan penglihatan.</p>

            <div class="relative bg-green-300/30 px-5 mt-16 py-5 w-[90%] md:w-[110%]">
                <p class="relative z-40 font-bold">Pelayanan unggulan poli mata</p>

                <ol class="relative list-disc mt-5 ml-9 z-40">
                    <li>Funduskopi</li>
                    <li>Visus mata</li>
                    <li>Slit lamp</li>
                    <Li>ARK</Li>
                </ol>

                <div class="absolute bg-sky-400/20 w-full h-full top-8 left-8"></div>
            </div>
        </div>

        <div class="relative mt-36 md:hidden flex justify-center items-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="w-10 mr-5 border-2 border-yellow-500 rounded-md">
            <h2 class="text-center font-bold text-3xl">Dokter</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-500 rounded-md">
        </div>

        <div class="flex justify-center">
            <div class="mt-32 md:mt-0 relative">
                <img src="{{ asset('img/nevita.png') }}" alt="dokter mata"
                    class="w-40 md:w-52 lg:w-60 relative -top-16 md:-top-8 lg:-top-16 z-10">

                <div
                    class="bg-yellow-300 text-slate-900 font-bold rounded-md shadow-md shadow-black/60 pl-4 md:pl-3 lg:pl-4 w-[280px] md:w-60 lg:w-72 py-1 lg:py-2 relative z-20 -top-16 md:-top-8 lg:-top-16 text-sm md:text-xs lg:text-sm">
                    <p>dr. Nevita Yonnia Ayu Soraya, Sp.M</p>
                </div>

                <div
                    class="absolute md:hidden bg-yellow-300 opacity-50 rotate-45 w-40 h-40 lg:w-56 lg:h-56 top-0 md:top-20 left-12">
                </div>
                <div class="absolute md:hidden bg-slate-200 w-20 h-64 bottom-16 left-6 md:left-0 lg:left-12"></div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/heightCheck.js') }}"></script>
@endsection
