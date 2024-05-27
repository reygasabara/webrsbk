@extends('dashboard.layouts.app')

{{-- Title --}}
@section('title')
    Jadwal Dokter
@endsection

{{-- Head --}}
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

{{-- Container --}}
@section('container')
    @if (session()->has('success'))
        <div id="alert"
            class="animate__animated animate__flipInY fixed right-5 top-20 mx-auto cursor-pointer rounded-md bg-green-300 py-2 pl-3 pr-6 text-center text-sm text-green-700 shadow-md hover:bg-green-400 active:bg-green-500"
            role="alert">
            <i class="fa-solid fa-check mr-1"></i>
            {{ session('success') }}
        </div>
    @endif


    <section>
        <div class="flex items-center">
            <i class="bx bxs-news mr-4 text-3xl"></i>
            <h1 class="text-2xl font-bold">Jadwal Dokter</h1>
        </div>
        <hr class="mt-2 rounded-full border-2 border-yellow-700">
    </section>

    <section class="mb-24 mt-10">
        <table class="mt-7 w-full table-auto">
            <thead>
                <tr class="bg-yellow-400 text-center font-semibold">
                    <td class="w-12 border border-black py-2">No</td>
                    <td class="border border-black py-2">Nama Dokter</td>
                    <td class="border border-black py-2">Poliklinik</td>
                    <td class="border border-black py-2">Jam Mulai</td>
                    <td class="w-56 border border-black py-2">Aksi</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($jadwal as $data)
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-black px-2 py-2">{{ $data->nama_dokter }}</td>
                        <td class="border border-black py-2 text-center">
                            {{ strip_tags($data->poliklinik) }}
                        </td>
                        <td class="border border-black py-2 text-center">{{ $data->jam_mulai }}</td>
                        <td class="border border-black py-2 text-center">

                            <a href="/dashboard/jadwal-dokter/{{ $data->id }}/edit">
                                <button
                                    class="mb-2 w-8 rounded-md bg-green-400 py-1 duration-200 hover:bg-green-500 active:bg-green-600 active:text-green-50 md:w-10"><i
                                        class="fa-solid fa-pencil text-xs md:text-base"></i></button>
                            </a>
                            <form action="{{ url('dashboard/jadwal-dokter/' . $data->id) }}" method="post" class="inline">
                                @method('delete')
                                @csrf
                                <button
                                    class="w-8 rounded-md bg-red-400 py-1 duration-200 hover:bg-red-500 active:bg-red-600 active:text-red-50 md:w-10"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                        class="fa-solid fa-trash text-xs md:text-base"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section class="fixed bottom-5 right-10">
        <a href="/dashboard/jadwal-dokter/create">
            <button
                class="h-16 w-16 rounded-full bg-yellow-400 text-3xl duration-200 hover:bg-yellow-500 active:bg-yellow-600 active:text-slate-100">
                <i class="fa-solid fa-plus"></i>
            </button>
        </a>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/alert.js') }}"></script>
@endsection
