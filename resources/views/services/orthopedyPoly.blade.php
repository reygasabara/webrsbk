@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-2xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">Poli
            Orthopedy
        </h1>
        <hr class="border-2 border-yellow-500 rounded-md md:mb-12">
    </section>

    <section class="mx-6 md:mx-12 mb-24">
        <div class="">
            <p class="text-justify">Poli orthopedy adalah layanan kesehatan untuk masalah tulang, otot, dan sendi.</p>

            <div class="relative bg-green-300/30 px-5 mt-16 py-5 w-[90%] md:w-[95%]">
                <p class="relative z-40 font-bold">Pelayanan unggulan poli orthopedy</p>

                <ol class="relative list-disc mt-5 ml-9 z-40">
                    <li>Injeksi umaron</li>
                </ol>

                <div class="absolute bg-sky-400/20 w-full h-full top-8 left-8"></div>
            </div>
        </div>

        {{-- <div class="relative mt-36 md:hidden flex justify-center items-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="w-10 mr-5 border-2 border-yellow-500 rounded-md">
            <h2 class="text-center font-bold text-3xl">Dokter</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-500 rounded-md">
        </div> --}}

        {{-- <div class="flex justify-center">
            <div class="mt-32 md:mt-0 relative">
                <img src="{{ asset('img/hilal.png') }}" alt="dokter THT"
                    class="w-40 md:w-52 lg:w-60 relative -top-16 md:-top-8 lg:-top-16 z-10">

                <div
                    class="bg-yellow-300 text-slate-900 font-bold rounded-md shadow-md shadow-black/60 pl-6 md:pl-4 lg:pl-6 w-72 md:w-60 lg:w-80 py-1 lg:py-2 relative z-20 -top-16 md:-top-8 lg:-top-16 text-sm md:text-xs lg:text-sm">
                    <p>dr. Nur Hilaliyah, SP.THT., M.Kes</p>
                </div>

                <div
                    class="absolute md:hidden bg-yellow-300 opacity-50 rotate-45 w-40 h-40 lg:w-56 lg:h-56 top-0 md:top-20 left-12">
                </div>
                <div class="absolute md:hidden bg-slate-200 w-20 h-64 bottom-16 left-4 md:left-0 lg:left-12"></div>
            </div>
        </div> --}}
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/heightCheck.js') }}"></script>
@endsection
