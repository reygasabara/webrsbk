@extends('dashboard.layouts.app')

{{-- Title --}}
@section('title')
    Dashboard
@endsection

{{-- Head --}}
@section('head')
@endsection

{{-- Container --}}
@section('container')
    <section>
        <div class="flex items-center">
            <i class="bx bxs-dashboard text-3xl mr-4"></i>
            <h1 class="font-bold text-2xl">DASHBOARD</h1>
        </div>
        <hr class="border-2 border-yellow-700 rounded-full mt-2">
    </section>

    <section class="mt-10">
        <div class="rounded-lg shadow-xl flex w-fit border">
            <div class="bg-sky-500 text-white px-3 rounded-lg flex">
                <i class="fa-solid fa-newspaper m-auto"></i>
            </div>
            <div class="ml-4 mr-6">
                <h2 class="font-bold leading-4">Berita</h2>
                <p class="text-center">{{ $numberOfNews }}</p>
            </div>
        </div>
    </section>

    <section class="mt-10">
        <div class="rounded-md shadow-lg w-fit bg-slate-200 p-3 mx-auto md:mx-0">
            <h2 class="font-bold text-center">Berita Terbaru</h2>

            <div class="px-3">
                <ol class="list-decimal mt-4">
                    @forelse ($latestPosts as $post)
                        <li><a href="/dashboard/post/{{ $post->slug }}"
                                class="hover:text-yellow-500 active:text-yellow-700 flex justify-between">
                                <p class="mr-5">{{ $post->judul }}</p>
                                <p>{{ $post->updated_at }}</p>
                            </a>
                        </li>
                    @empty
                        <p class="text-center">Tidak ada data yang dapat ditampilkan</p>
                    @endforelse
                </ol>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
