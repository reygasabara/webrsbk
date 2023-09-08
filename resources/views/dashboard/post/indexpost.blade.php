@extends('dashboard.layouts.app')

{{-- Title --}}
@section('title')
    Post
@endsection

{{-- Head --}}
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

{{-- Container --}}
@section('container')
    @if (session()->has('success'))
        <div id="alert"
            class="text-center fixed bg-green-300 hover:bg-green-400 active:bg-green-500 cursor-pointer text-green-700 rounded-md shadow-md py-2 pr-6 pl-3 mx-auto top-20 right-5 text-sm animate__animated animate__flipInY"
            role="alert">
            <i class="fa-solid fa-check mr-1"></i>
            {{ session('success') }}
        </div>
    @endif


    <section>
        <div class="flex items-center">
            <i class="bx bxs-news mr-4 text-3xl"></i>
            <h1 class="font-bold text-2xl">POST</h1>
        </div>
        <hr class="border-2 border-yellow-700 rounded-full mt-2">
    </section>

    <section class="mt-10 mb-24">
        <table class="table-auto w-full mt-7">
            <thead>
                <tr class="text-center bg-yellow-400 font-semibold">
                    <td class="border border-black py-2 w-12">No</td>
                    <td class="border border-black py-2">Judul</td>
                    <td class="border border-black py-2">Isi</td>
                    <td class="border border-black py-2">Tanggal</td>
                    <td class="border border-black py-2 w-56">Aksi</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($berita as $list)
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-black py-2 text-center">{{ $list->judul }}</td>
                        <td class="border border-black py-2 px-2 text-justify overflow-hidden max-w-sm">
                            <p class="line-clamp-2">{{ strip_tags($list->berita) }}</p>
                        </td>
                        <td class="border border-black py-2 text-center">{{ $list->formatted_date }}</td>
                        <td class="border border-black py-2 text-center">
                            <a href="/dashboard/post/{{ $list->slug }}">
                                <button
                                    class="rounded-md bg-sky-400 hover:bg-sky-500 active:bg-sky-600 active:text-sky-50 duration-200 w-10 py-1"><i
                                        class="fa-solid fa-eye"></i></button>
                            </a>
                            <a href="/dashboard/post/{{ $list->slug }}/edit">
                                <button
                                    class="rounded-md bg-green-400 hover:bg-green-500 active:bg-green-600 active:text-green-50 duration-200 w-10 py-1"><i
                                        class="fa-solid fa-pencil"></i></button>
                            </a>
                            <form action="{{ url('dashboard/post/' . $list->slug) }}" method="post" class="inline">
                                @method('delete')
                                @csrf
                                <button
                                    class="rounded-md bg-red-400 hover:bg-red-500 active:bg-red-600 active:text-red-50 duration-200 w-10 py-1"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section class="fixed bottom-5 right-10">
        <a href="/dashboard/post/create">
            <button
                class="w-16 h-16 text-3xl bg-yellow-400 hover:bg-yellow-500 active:bg-yellow-600 active:text-slate-100 duration-200 rounded-full">
                <i class="fa-solid fa-plus"></i>
            </button>
        </a>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/alert.js') }}"></script>
@endsection
