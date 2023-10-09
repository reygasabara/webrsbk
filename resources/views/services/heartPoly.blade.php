@extends('layouts.app')

@section('container')
    <section class="mx-6 py-12">
        <h1 class="animate__animated animate__lightSpeedInLeft mb-2 inline-block text-2xl font-bold md:text-4xl">Poli
            Jantung
        </h1>
        <hr class="mb-12 rounded-md border-2 border-yellow-500">
    </section>

    <section class="mx-6 mb-12 justify-between md:mx-12 md:flex">
        <div class="md:w-[45%]">
            <p class="text-justify md:text-left">Poli jantung adalah salah satu unit poli klinik rawat jalan dengan
                konsentrasi pelayanan pasien yang
                mengalami kelainan/gangguan jantung dan pembuluh darah.</p>

            <div class="relative mt-16 w-[90%] bg-green-300/30 px-5 py-5 md:w-[110%]">
                <p class="relative z-40 font-bold">Pelayanan unggulan poli jantung</p>

                <ol class="relative z-40 ml-9 mt-5 list-disc">
                    <li>EKG</li>
                    <li>Treadmil</li>
                    <li>Echo</li>
                </ol>

                <div class="absolute left-8 top-8 h-full w-full bg-sky-400/20"></div>
            </div>
        </div>

        <div class="relative mt-36 flex items-center justify-center md:hidden" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="mr-5 w-10 rounded-md border-2 border-yellow-500">
            <h2 class="text-center text-3xl font-bold">Dokter</h2>
            <hr class="ml-5 w-10 rounded-md border-2 border-yellow-500">
        </div>

        <div class="flex justify-center">
            <div class="relative mt-32 md:mt-0">
                <img src="{{ asset('img/jamal.png') }}" alt="dokter THT"
                    class="relative -top-16 z-10 w-40 md:-top-8 md:w-52 lg:-top-16 lg:w-60" loading="lazy">

                <div
                    class="relative -top-16 z-20 w-64 rounded-md bg-yellow-300 py-1 pl-6 text-sm font-bold text-slate-900 shadow-md shadow-black/60 md:-top-8 md:w-56 md:pl-4 md:text-xs lg:-top-16 lg:w-64 lg:py-2 lg:pl-6 lg:text-sm">
                    <p>dr. Jamaluddin, Sp.JP</p>
                </div>

                <div
                    class="absolute left-12 top-0 h-40 w-40 rotate-45 bg-yellow-300 opacity-50 md:top-20 md:hidden lg:h-56 lg:w-56">
                </div>
                <div class="absolute bottom-16 left-4 h-64 w-20 bg-slate-200 md:left-0 md:hidden lg:left-12"></div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/heightCheck.js') }}"></script>
@endsection
