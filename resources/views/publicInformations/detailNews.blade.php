@extends('layouts.app')

@section('head')
@endsection

@section('container')
    <section class="py-12 mx-6">
        <h1 class="text-3xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">{{ $post->judul }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-3">
        <p class="text-xs mb-8 text-slate-500">Diperbarui pada {{ $post->formatted_date }}</p>
        @if ($post->foto)
            <figure>
                <img id="image" src="{{ asset('storage/' . substr($post->foto, 7)) }}" alt="berita"
                    class=" bg-slate-400 rounded-lg object-cover">
                <figcaption id="imageCaption" class="text-slate-500 text-xs mt-1 text-justify">{{ $post->deskripsi_foto }}
                </figcaption>
            </figure>
        @endif

        <div class="text-justify mt-10 [&>*]:leading-8 [&>*]:mb-3">
            {!! $post->berita !!}
        </div>
    </section>

    <section>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/showImage.js') }}"></script>

    <script>
        const outerContainer = document.getElementById('outerContainer');
        outerContainer.classList.replace('bg-slate-200', 'bg-slate-100');
    </script>
@endsection
