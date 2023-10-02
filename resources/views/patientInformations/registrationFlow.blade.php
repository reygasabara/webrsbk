@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-2xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">
            {{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-0 md:mb-12">
    </section>

    <section class="mt-5 mb-12">
        <div class="relative mb-5 flex justify-center items-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="w-10 mr-5 border-2 border-yellow-500 rounded-md">
            <h2 class="text-center font-bold text-xl md:text-3xl">Rawat Jalan</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-500 rounded-md">
        </div>

        <h3 class="font-bold ml-[5%] lg:ml-[15%] mb-3 md:mb-7 text-xs md:text-sm lg:text-base">1. Pasien Umum</h3>
        <img src="{{ asset('img/alurumum.png') }}" alt="alur umum" class="mx-auto px-7 md:px-0">

        <h3 class="font-bold ml-[5%] lg:ml-[15%] mb-3 md:mb-7 text-xs md:text-sm lg:text-base mt-10 md:mt-12">2. Pasien BPJS
        </h3>
        <img src="{{ asset('img/alurumum.png') }}" alt="alur umum" class="mx-auto px-7 md:px-0">
        </div>
    </section>

    <section class="mt-16 md:mt-24 mb-12">
        <div class="relative mb-5 flex justify-center items-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="w-10 mr-5 border-2 border-yellow-500 rounded-md">
            <h2 class="text-center font-bold text-xl md:text-3xl">Rawat Inap</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-500 rounded-md">
        </div>

        <h3 class="font-bold ml-[5%] lg:ml-[15%] mb-3 md:mb-7 text-xs md:text-sm lg:text-base">1. Pasien Umum</h3>
        <img src="{{ asset('img/alurigdumum.png') }}" alt="alur umum" class="mx-auto px-7 md:px-0">

        <h3 class="font-bold ml-[5%] lg:ml-[15%] mb-3 md:mb-7 text-xs md:text-sm lg:text-base mt-10 md:mt-12">2. Pasien BPJS
        </h3>
        <img src="{{ asset('img/alurigdbpjs.png') }}" alt="alur umum" class="mx-auto px-7 md:px-0">
        </div>
    </section>
@endsection
