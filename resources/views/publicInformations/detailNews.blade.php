@extends('layouts.app')

@section('head')
@endsection

@section('container')
    <section class="py-12 mx-6">
        <h1 class="text-2xl md:text-3xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">
            {{ $post->judul }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-3">
        <p class="text-xs mb-8 text-slate-500">Diperbarui pada {{ $post->formatted_date }}</p>
        @if ($post->foto)
            <figure id="imageContainer" class="">
                <img id="image" src="{{ asset('storage/' . substr($post->foto, 7)) }}" alt="berita"
                    class="bg-slate-400 rounded-lg object-cover">
                <figcaption id="imageCaption" class="text-slate-500 text-xs mt-1 text-justify">
                    {{ $post->deskripsi_foto }}
                </figcaption>
            </figure>
        @endif

        <div class="text-justify mt-10 [&>*]:leading-8 [&>*]:mb-3">
            {!! $post->berita !!}
        </div>
    </section>

    <section class="mx-5 mb-12">
        <h2 class="font-bold mb-1">Berita Lainnya</h2>
        <hr class="rounded-full border-2 border-yellow-700 mb-6 w-16">
        <div class="flex flex-wrap">
            <a href="/"
                class="rounded-md shadow-md bg-white mr-5 w-full md:w-[30%] lg:w-[20%] mb-3 flex md:block p-3">
                <img src="" alt="" class="bg-slate-200 w-40 md:w-full md:h-28 rounded-md">
                <div class="ml-5 md:ml-0">
                    <h3 class="font-bold text-sm md:mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio,
                        id.
                    </h3>
                    <p class="text-xs text-slate-500 mt-2">12 September 2023</p>
                </div>
            </a>
            <a href="/"
                class="rounded-md shadow-md bg-white mr-5 w-full md:w-[30%] lg:w-[20%] mb-3 flex md:block p-3">
                <img src="" alt="" class="bg-slate-200 w-40 md:w-full md:h-28 rounded-md">
                <div class="ml-5 md:ml-0">
                    <h3 class="font-bold text-sm md:mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio,
                        id.
                    </h3>
                    <p class="text-xs text-slate-500 mt-2">12 September 2023</p>
                </div>
            </a>
            <a href="/"
                class="rounded-md shadow-md bg-white mr-5 w-full md:w-[30%] lg:w-[20%] mb-3 flex md:block p-3">
                <img src="" alt="" class="bg-slate-200 w-40 md:w-full md:h-28 rounded-md">
                <div class="ml-5 md:ml-0">
                    <h3 class="font-bold text-sm md:mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio,
                        id.
                    </h3>
                    <p class="text-xs text-slate-500 mt-2">12 September 2023</p>
                </div>
            </a>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/showImage.js') }}"></script>

    <script>
        const outerContainer = document.getElementById('outerContainer');
        outerContainer.classList.replace('bg-slate-200', 'bg-slate-100');
    </script>
@endsection
