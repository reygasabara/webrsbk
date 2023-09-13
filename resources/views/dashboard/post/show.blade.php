@extends('dashboard.layouts.app')

{{-- Title --}}
@section('title')
    Post
@endsection

{{-- Head --}}
@section('head')
@endsection

{{-- Container --}}
@section('container')
    <section class="mb-12">
        <h1 class="font-bold text-3xl">{{ $post->judul }}</h1>
        <hr class="rounded-full border-2 border-yellow-700">
        <div class="flex justify-between mb-10">
            <p class="text-sm mt-2">{{ $post->formatted_date }}</p>
            <div class="flex justify-between w-56 text-xs font-bold">
                <button
                    class="rounded-md bg-sky-400 hover:bg-sky-500 active:bg-sky-600 active:text-white duration-200 py-1 px-2 mt-7 block mx-auto shadow shadow-black/60"><a
                        href="{{ url('/dashboard/post') }}"><i class="fa-solid fa-arrow-left-long mr-1"></i>
                        Kembali</a></button>
                <button
                    class="rounded-md bg-green-400 hover:bg-green-500 active:bg-green-600 active:text-white duration-200 py-1 px-2 mt-7 block mx-auto shadow shadow-black/60"><a
                        href="/dashboard/post/{{ $post->slug }}/edit"><i
                            class="fa-solid fa-pencil mr-1"></i>Edit</a></button>

                <form action="{{ url('dashboard/post/' . $post->slug) }}" method="post" class="inline">
                    @method('delete')
                    @csrf
                    <button
                        class="rounded-md bg-red-400 hover:bg-red-500 active:bg-red-600 active:text-white duration-200 py-1 px-2 mt-7 block mx-auto shadow shadow-black/60"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                            class="fa-solid fa-trash mr-1"></i>Hapus</button>
                </form>
            </div>
        </div>
        @if ($post->foto)
            <figure>
                <img id="image" src="{{ asset('storage/' . substr($post->foto, 7)) }}" alt="berita"
                    class=" bg-slate-400 rounded-lg object-cover">
                <figcaption id="imageCaption" class="text-slate-500 text-xs mt-1 text-justify">{{ $post->deskripsi_foto }}
                </figcaption>
            </figure>
        @endif

        <div class="mt-8 text-justify [&>*]:leading-8 [&>*]:mb-3">
            {!! $post->berita !!}
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/showImage.js') }}"></script>
@endsection
