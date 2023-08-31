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
    <section>
        <div class="flex items-center">
            <i class="bx bxs-news mr-4 text-3xl"></i>
            <h1 class="font-bold text-2xl">POST</h1>
        </div>
        <hr class="border-2 border-yellow-700 rounded-full mt-2">
    </section>

    <section class="mt-10">
        <form action="">

            <label for="judul">Judul</label>
            <input class="border" type="text" name="judul" id="judul">

            <label for="deskripsi">Deskripsi</label>
            <input class="border" type="text" name="deskripsi" id="deskripsi">

            <label for="berita">Berita</label>
            <textarea class="border" type="text" name="berita" id="berita"></textarea>

            <label for="created_at">tanggal</label>
            <input class="border" type="date" name="created_at" id="created_at">

            <button type="submit" class="rounded-md bg-green-400 hover:bg-green-500 active:bg-green-600 duration-200 w-16 py-1">Posting</button>
        </form>
    </section>
@endsection
