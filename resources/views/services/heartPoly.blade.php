@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-2xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">Poli Jantung
        </h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">
    </section>

    <section class="flex justify-between ml-12 mr-6 mb-12">
        <div class="w-[45%]">
            <p>Poli jantung adalah salah satu unit poli klinik rawat jalan dengan konsentrasi pelayanan pasien yang
                mengalami kelainan/gangguan jantung dan pembuluh darah.</p>

            <div class="relative bg-green-300/30 px-5 mt-16 py-5 w-[110%]">
                <p class="relative z-40 font-bold">Pelayanan unggulan poli jantung</p>

                <ol class="relative list-disc mt-5 ml-9 z-40">
                    <li>EKG</li>
                    <li>Treadmil</li>
                    <li>Echo</li>
                </ol>

                <div class="absolute bg-sky-400/20 w-full h-full top-8 left-8"></div>
            </div>
        </div>

        <div class="w-[30%]">
            <img src="{{ asset('img/jamal.png') }}" alt="dokter jantung" class="w-72 relative -right-16 -top-16">

            <div
                class="bg-yellow-300 text-slate-900 font-bold rounded-md shadow-md shadow-black/60 pl-6 pr-28 py-2 w-fit relative -right-16 -top-16">
                <p>dr. Jamaluddin, Sp.JP</p>
            </div>
        </div>
    </section>
@endsection
