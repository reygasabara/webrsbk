@extends('layouts.app')

@section('container')
    <section class="mx-6 py-12">
        <h1 class="animate__animated animate__lightSpeedInLeft mb-2 inline-block text-2xl font-bold md:text-4xl">
            {{ $submenu }}</h1>
        <hr class="mb-0 rounded-md border-2 border-yellow-500 md:mb-12">
    </section>

    <section class="mb-12 mt-5">
        <div class="relative mb-5 flex items-center justify-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="mr-5 w-10 rounded-md border-2 border-yellow-500">
            <h2 class="text-center text-xl font-bold md:text-3xl">Rawat Jalan</h2>
            <hr class="ml-5 w-10 rounded-md border-2 border-yellow-500">
        </div>

        <h3 class="mb-3 ml-[5%] text-xs font-bold md:mb-7 md:text-sm lg:ml-[15%] lg:text-base">1. Pasien Umum</h3>
        <img src="{{ asset('img/alurumum.png') }}" alt="alur umum" class="mx-auto px-7 md:px-0">

        <h3 class="mb-3 ml-[5%] mt-10 text-xs font-bold md:mb-7 md:mt-12 md:text-sm lg:ml-[15%] lg:text-base">2. Pasien BPJS
        </h3>
        <img src="{{ asset('img/alurumum.png') }}" alt="alur umum" class="mx-auto px-7 md:px-0">
        </div>
    </section>

    <section class="mb-12 mt-16 md:mt-24">
        <div class="relative mb-5 flex items-center justify-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="mr-5 w-10 rounded-md border-2 border-yellow-500">
            <h2 class="text-center text-xl font-bold md:text-3xl">Rawat Inap</h2>
            <hr class="ml-5 w-10 rounded-md border-2 border-yellow-500">
        </div>

        <h3 class="mb-3 ml-[5%] text-xs font-bold md:mb-7 md:text-sm lg:ml-[15%] lg:text-base">1. Pasien Umum</h3>
        <img src="{{ asset('img/alurigdumum.png') }}" alt="alur umum" class="mx-auto px-7 md:w-[571px] md:px-0">

        <h3 class="mb-3 ml-[5%] mt-10 text-xs font-bold md:mb-7 md:mt-12 md:text-sm lg:ml-[15%] lg:text-base">2. Pasien BPJS
        </h3>
        <img src="{{ asset('img/alurigdbpjs.png') }}" alt="alur umum" class="md:w-max-[571px] mx-auto px-7 md:px-0">
        </div>
    </section>
@endsection
