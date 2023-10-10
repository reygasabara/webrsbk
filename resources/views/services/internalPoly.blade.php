@extends('layouts.app')

@section('container')
    <section class="mx-6 py-12">
        <h1 class="animate__animated animate__lightSpeedInLeft mb-2 inline-block text-2xl font-bold md:text-4xl">Poli Interna
        </h1>
        <hr class="rounded-md border-2 border-yellow-500 md:mb-12">
    </section>

    <section class="mx-6 mb-12 md:mx-12">
        <div class="">
            <p class="text-justify">Poli interna adalah layanan kesehatan untuk pemeriksaan dan pengobatan yang terkait
                dengan organ dalam tubuh
                manusia, seperti lambung, hati, paru-paru, ginjal, usus, jantung dan sistem kekebalan tubuh.
            </p>
            {{-- <div class="relative mt-16 w-[89%] bg-green-300/30 px-5 py-5 md:w-[95%] lg:w-[97%]">
                <p class="relative z-40 font-bold">Pelayanan unggulan poli interna</p>
                yang terkait
                <ol class="relative z-40 ml-9 mt-5 list-disc">
                    <li>Penambalan gigi</li>
                    <li>Pencabutan gigi</li>
                    <li>Scalling/pembersihan karang gigi</li>
                    <li>Perawatan saluran akar gigi</li>
                </ol>

                <div class="absolute left-8 top-8 h-full w-full bg-sky-400/20"></div>
            </div> --}}
        </div>
    </section>

    <section class="mx-6 mb-20 mt-32 md:mb-12">
        <div class="relative mb-16 mt-5 flex items-center justify-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="mr-5 w-10 rounded-md border-2 border-yellow-500">
            <h2 class="text-center text-3xl font-bold">Dokter</h2>
            <hr class="ml-5 w-10 rounded-md border-2 border-yellow-500">
        </div>

        <div class="flex flex-wrap justify-around text-xs md:-translate-x-1 lg:-translate-x-5">
            <div class="relative">
                <img src="{{ asset('img/made.png') }}" alt="dokter interna" class="relative z-10 w-40 translate-x-5 lg:w-60"
                    loading="lazy">

                <div
                    class="relative z-20 w-72 rounded-md bg-yellow-300 py-2 pl-4 font-bold text-slate-900 shadow-md shadow-black/60 lg:w-72 lg:translate-x-8">
                    <p>dr. Made Arie Dwi Winarka M.Biomed, Sp.PD</p>
                </div>

                <div
                    class="absolute bottom-0 left-16 top-12 h-40 w-40 translate-x-5 rotate-45 rounded-md bg-yellow-300 opacity-50 lg:top-20 lg:h-56 lg:w-56">
                </div>
                <div class="absolute bottom-0 h-64 w-20 translate-x-5 bg-slate-200"></div>
            </div>

            <div class="relative mt-20 md:ml-10 md:mt-0 lg:ml-0">
                <img src="{{ asset('img/dwiana.png') }}" alt="dokter interna"
                    class="relative z-10 w-40 translate-x-5 lg:w-60" loading="lazy">

                <div
                    class="relative z-20 w-72 rounded-md bg-yellow-300 py-2 pl-4 font-bold text-slate-900 shadow-md shadow-black/60 lg:w-72">
                    <p>dr. Dwiana Pertiwi Trisnowati, M.SC. Sp.PD</p>
                </div>

                <div
                    class="absolute left-16 top-12 h-40 w-40 translate-x-5 rotate-45 rounded-md bg-yellow-300 opacity-50 lg:top-20 lg:h-56 lg:w-56">
                </div>
                <div class="absolute bottom-0 h-64 w-20 translate-x-5 bg-slate-200"></div>
            </div>

            <div class="relative mt-20 md:ml-10 lg:ml-0 lg:mt-0">
                <img src="{{ asset('img/nyoman.png') }}" alt="dokter interna"
                    class="relative z-10 w-40 translate-x-5 lg:w-60" loading="lazy">

                <div
                    class="relative z-20 w-72 rounded-md bg-yellow-300 py-2 pl-4 font-bold text-slate-900 shadow-md shadow-black/60 lg:w-72">
                    <p>dr. I Nyoman Sunarka, Sp.PD</p>
                </div>

                <div
                    class="absolute left-16 top-12 h-40 w-40 translate-x-5 rotate-45 rounded-md bg-yellow-300 opacity-50 lg:top-20 lg:h-56 lg:w-56">
                </div>
                <div class="absolute bottom-0 h-64 w-20 translate-x-5 bg-slate-200"></div>
            </div>
        </div>
    </section>
@endsection
