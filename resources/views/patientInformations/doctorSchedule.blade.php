@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">{{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">

        <div class="px-20 mb-12">
            <table class="table-auto w-full mt-7">
                <thead>
                    <tr class="text-center bg-yellow-400 font-semibold">
                        <td class="border border-black py-2">Nama Dokter</td>
                        <td class="border border-black py-2">Poliklinik</td>
                        <td class="border border-black py-2">Jam Mulai</td>
                        <td class="border border-black py-2">Jam Selesai</td>
                    </tr>
                </thead>

                <tbody>
                    <tr class="hover:bg-yellow-100">
                        {{-- <td class="border border-black py-2 pl-3">Kelas 1</td>
                        <td class="border border-black py-2 text-center">14</td>
                        <td class="border border-black py-2 text-center">10</td>
                        <td class="border border-black py-2 text-center">4</td> --}}
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
