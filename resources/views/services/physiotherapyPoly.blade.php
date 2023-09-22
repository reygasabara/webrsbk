@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-2xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">Poli
            Fisioterapi
        </h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">
    </section>

    <section class="flex justify-between ml-12 mr-6 mb-12">
        <div class="w-[45%]">
            <p>Poli fisioterapi adalah layanan penanganan atau terapi untuk mengembalikan gerakan dan fungsi ketika seseorg
                mengalamicedera, terkena penyakit atau mengalami disabilitas.</p>

            <div class="relative bg-green-300/30 px-5 mt-16 py-5 w-[110%]">
                <p class="relative z-40 font-bold">Pelayanan unggulan poli fisioterapi</p>

                <ol class="relative list-disc mt-5 ml-9 z-40">
                    <li>MWD</li>
                    <li>SWD</li>
                    <li>Tens</li>
                    <Li>US</Li>
                    <Li>Infrared</Li>
                    <Li>Terapi latihan</Li>
                    <Li>Terapi manual</Li>
                </ol>

                <div class="absolute bg-sky-400/20 w-full h-full top-8 left-8"></div>
            </div>
        </div>

        <div class="w-[30%]">
            <img src="{{ asset('img/nevita.png') }}" alt="dokter mata" class="w-72 relative -right-16 -top-16">

            <div
                class="bg-yellow-300 text-slate-900 font-bold rounded-md shadow-md shadow-black/60 pl-6 pr-6 py-2 w-fit relative -right-16 -top-16">
                <p>dr. Nevita Yonnia Ayu Soraya, Sp.M</p>
            </div>
        </div>
    </section>
@endsection
