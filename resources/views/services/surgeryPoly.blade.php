@extends('layouts.app')

@section('container')
    <section class="mx-6 py-12">
        <h1 class="animate__animated animate__lightSpeedInLeft mb-2 inline-block text-2xl font-bold md:text-4xl">Poli Bedah
            Umum
        </h1>
        <hr class="rounded-md border-2 border-yellow-500 md:mb-12">
    </section>

    <section class="mx-6 mb-12 md:mx-12">
        <div class="">
            <p class="text-justify">Poli bedah umum adalah layanan kesehatan yang mengani pengobatan penyakit dan luka.</p>

            <div class="relative mt-16 w-[89%] bg-green-300/30 px-5 py-5 md:w-[95%] lg:w-[97%]">
                <p class="relative z-40 font-bold">Pelayanan unggulan poli bedah umum</p>

                <ol class="relative z-40 ml-9 mt-5 list-disc">
                    <li>Rawat luka</li>
                    <li>Up hecting</li>
                </ol>

                <div class="absolute left-8 top-8 h-full w-full bg-sky-400/20"></div>
            </div>
        </div>
    </section>

    <section class="mx-6 mb-20 mt-32 md:mb-12">
        <div class="relative mb-16 mt-5 flex items-center justify-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="mr-5 w-10 rounded-md border-2 border-yellow-500">
            <h2 class="text-center text-3xl font-bold">Dokter</h2>
            <hr class="ml-5 w-10 rounded-md border-2 border-yellow-500">
        </div>

        <div class="flex flex-wrap justify-around md:-translate-x-1 lg:-translate-x-5">
            <div class="relative">
                <img src="{{ asset('img/rijal.png') }}" alt="dokter bedah umum" class="relative z-10 w-40 lg:w-60"
                    loading="lazy">

                <div
                    class="relative z-20 w-64 rounded-md bg-yellow-300 py-2 pl-4 font-bold text-slate-900 shadow-md shadow-black/60 lg:w-[360px]">
                    <p>dr. H. Syamsul Rijal, Sp.B</p>
                </div>

                <div
                    class="absolute bottom-0 left-16 top-12 h-40 w-40 rotate-45 rounded-md bg-yellow-300 opacity-50 md:top-20 lg:h-56 lg:w-56">
                </div>
                <div class="absolute bottom-0 h-64 w-20 bg-slate-200"></div>
            </div>

            <div class="relative mt-20 md:ml-10 md:mt-0 lg:ml-0">
                <img src="{{ asset('img/wayan.png') }}" alt="dokter bedah umum" class="relative z-10 w-40 lg:w-60"
                    loading="lazy">

                <div
                    class="relative z-20 w-64 rounded-md bg-yellow-300 py-2 pl-4 text-sm font-bold text-slate-900 shadow-md shadow-black/60 md:text-xs lg:w-[360px] lg:text-sm">
                    <p class="">dr. Wayan Eka Winarka, M.Biomed.,Sp.B</p>
                </div>

                <div
                    class="absolute left-16 top-12 h-40 w-40 rotate-45 rounded-md bg-yellow-300 opacity-50 md:top-20 lg:h-56 lg:w-56">
                </div>
                <div class="absolute bottom-0 h-64 w-20 bg-slate-200"></div>
            </div>
        </div>
    </section>
@endsection
