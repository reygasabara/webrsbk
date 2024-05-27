@extends('layouts.app')

@section('container')
    <section class="mx-6 py-12">
        <h1 class="animate__animated animate__lightSpeedInLeft mb-2 inline-block text-2xl font-bold md:text-4xl">
            {{ $submenu }}</h1>
        <hr class="mb-12 rounded-md border-2 border-yellow-500">

        <div class="mb-12 md:px-20">
            <table class="mt-7 w-full table-auto text-sm">
                <thead>
                    <tr class="bg-yellow-400 text-center font-semibold">
                        <td class="border border-black py-2">No</td>
                        <td class="border border-black py-2">Nama Dokter</td>
                        <td class="border border-black py-2">Poliklinik</td>
                        <td class="border border-black py-2">Jam Mulai</td>
                    </tr>
                </thead>

                <tbody>
                    <tr class="hover:bg-yellow-100">
                        {{-- <td class="border border-black py-2 pl-3">Kelas 1</td>
                        <td class="border border-black py-2 text-center">14</td>
                        <td class="border border-black py-2 text-center">10</td>
                        <td class="border border-black py-2 text-center">4</td> --}}
                    </tr>
                    @foreach ($jadwal as $key => $data)
                        <tr class="hover:bg-yellow-100">
                            <td class="border border-black py-2 pl-3">{{ $key + 1 }}</td>
                            <td class="border border-black py-2 pl-3">{{ $data['nama_dokter'] }}</td>
                            <td class="border border-black py-2 pl-3">{{ $data['poliklinik'] }}</td>
                            <td class="border border-black py-2 pl-3">{{ $data['jam_mulai'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
