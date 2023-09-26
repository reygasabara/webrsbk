@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-2xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">Poli Saraf
        </h1>
        <hr class="border-2 border-yellow-500 rounded-md md:mb-12">
    </section>

    <section class="mx-6 md:mx-12 mb-12">
        <div class="">
            <p class="text-justify">Poli saraf adalah poliklinik yang menangani dan melayani pameriksaan kondisi dan
                mendeteksi ganggu pada
                sistem saraf yang mungkin diderita pasien, ditangani oleh dokter yang ahli di bidangnya.</p>

            <div class="relative bg-green-300/30 px-5 mt-16 py-5 w-[89%] md:w-[95%] lg:w-[97%]">
                <p class="relative z-40 font-bold">Pelayanan unggulan poli saraf</p>

                <ol class="relative list-disc mt-5 ml-9 z-40">
                    <li>TMS</li>
                </ol>

                <div class="absolute bg-sky-400/20 w-full h-full top-8 left-8"></div>
            </div>
        </div>
    </section>

    <section class="mx-6 mb-20 md:mb-12 mt-32">
        <div class="relative mt-5 mb-16 flex justify-center items-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="w-10 mr-5 border-2 border-yellow-500 rounded-md">
            <h2 class="text-center font-bold text-3xl">Dokter</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-500 rounded-md">
        </div>

        <div class="flex flex-wrap justify-around md:-translate-x-1 lg:-translate-x-5">
            <div class="relative">
                <img src="{{ asset('img/happy.png') }}" alt="dokter saraf" class="w-40 lg:w-60 z-10 relative">

                <div
                    class="bg-yellow-300 text-slate-900 font-bold rounded-md shadow-md shadow-black/60 w-72 lg:w-[360px] pl-4 py-2 relative z-20">
                    <p>dr. Happy Handaruwati, Sp.S</p>
                </div>

                <div
                    class="absolute bg-yellow-300 opacity-50 rotate-45 w-40 h-40 lg:w-56 lg:h-56 top-12 md:top-20 left-16 bottom-0 rounded-md">
                </div>
                <div class="absolute bg-slate-200 w-20 h-64 bottom-0"></div>
            </div>

            <div class="relative mt-20 md:ml-10 lg:ml-0 md:mt-0">
                <img src="{{ asset('img/ashaeryanto.png') }}" alt="dokter saraf" class="w-40 lg:w-60 z-10 relative">

                <div
                    class="bg-yellow-300 text-slate-900 font-bold rounded-md shadow-md shadow-black/60 w-72 lg:w-[360px] pl-4 py-2 relative z-20">
                    <p class="">dr. Ashaeryanto, MMedEd., Sp.N</p>
                </div>

                <div
                    class="absolute bg-yellow-300 opacity-50 rotate-45 w-40 h-40 lg:w-56 lg:h-56 top-12 md:top-20 left-16 rounded-md">
                </div>
                <div class="absolute bg-slate-200 w-20 h-64 bottom-0"></div>
            </div>
        </div>
    </section>
@endsection
