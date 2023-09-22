@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-2xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">Poli
            Orthopedy
        </h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">
    </section>

    <section class="flex justify-between ml-12 mr-6 mb-12">
        <div class="w-[45%]">
            <p>Poli orthopedy adalah layanan kesehatan untuk masalah tulang, otot, dan sendi.</p>

            <div class="relative bg-green-300/30 px-5 mt-16 py-5 w-[110%]">
                <p class="relative z-40 font-bold">Pelayanan unggulan poli orthopedy</p>

                <ol class="relative list-disc mt-5 ml-9 z-40">
                    <li>Injeksi umaron</li>
                </ol>

                <div class="absolute bg-sky-400/20 w-full h-full top-8 left-8"></div>
            </div>
        </div>

        <div class="w-[30%]">
            <img src="{{ asset('img/putu.png') }}" alt="dokter obgyn" class="w-72 relative -right-16 -top-16">

            <div
                class="bg-yellow-300 text-slate-900 font-bold rounded-md shadow-md shadow-black/60 pl-6 pr-1 py-2 w-80 relative -right-16 -top-16">
                <p>dr. Putu Adi Sujana Putra, Sp.OG</p>
            </div>
        </div>
    </section>
@endsection
