@extends('dashboard.layouts.app')

{{-- Title --}}
@section('title')
    Post
@endsection

{{-- Head --}}
@section('head')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
@endsection

{{-- Container --}}
@section('container')
    <section>
        <div class="flex items-center">
            <i class="bx bxs-news mr-4 text-3xl"></i>
            <h1 class="font-bold text-2xl">POST <span class="text-base font-normal"><i
                        class="fa-solid fa-chevron-right mx-1"></i>
                    Edit Berita</span></h1>
        </div>
        <hr class="border-2 border-yellow-700 rounded-full mt-2">
    </section>

    <section class="my-10">
        <form method="post" action="/dashboard/post/{{ $post->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <label for="judul" class="font-bold">Judul <span class="text-red-600">*</span></label>
            <input type="text" name="judul" id="judul"
                class="bg-gray-50 mb-4 mt-1 border border-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                required autofocus value="{{ old('judul', $post->judul) }}">
            @error('judul')
                <p class="text-xs text-red-700">{{ $message }}</p>
            @enderror

            <label for="slug" class="font-bold">Slug</label>
            <input type="text" name="slug" id="slug"
                class="bg-gray-50 mb-4 mt-1 border border-slate-700 text-sm text-slate-600 rounded-lg block w-full p-2.5"
                value="{{ old('slug', $post->slug) }}" readonly>
            @error('slug')
                <p class="text-xs text-red-700">{{ $message }}</p>
            @enderror

            <label for="berita" class="font-bold block mb-1">Berita <span class="text-red-600">*</span></label>
            <input id="berita" type="hidden" name="berita" value="{{ old('berita', $post->berita) }}">
            <trix-editor input="berita"
                class="g-gray-50 mb-4 mt-1 min-h-[270px] border border-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"></trix-editor>
            @error('berita')
                <p class="text-xs text-red-700">{{ $message }}</p>
            @enderror

            <label for="foto" class="font-bold mt-4 block">Foto</label>

            @if ($post->foto)
                <img id="imagePreview" src="{{ asset('storage/' . substr($post->foto, 7)) }}" alt=""
                    class="mb-2 mt-1 max-h-72 rounded-sm">
            @else
                <img id="imagePreview" src="" alt="" class="mb-2 mt-1 max-h-72 rounded-sm">
            @endif

            <input
                class="bg-gray-50 mb-4 mt-1 border border-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                type="file" accept="image/*" name="foto" id="foto" onchange="previewImage()">
            @error('foto')
                <p class="text-xs text-red-700">{{ $message }}</p>
            @enderror

            <button type="submit"
                class="rounded-md bg-green-400 hover:bg-green-500 active:bg-green-600 active:text-white duration-200 py-1 px-4 mt-7 block mx-auto shadow shadow-black/60">Edit
                Post</button>

        </form>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/slug.js') }}"></script>
    <script src="{{ asset('js/components/previewImage.js') }}"></script>
@endsection
