@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">{{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">

        <div class="px-20 mb-12">
            <div class="flex justify-end">
                <div class="relative">
                    <div
                        class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-yellow-600 peer-invalid:text-red-600">
                        <i class="fa-solid fa-search" class="text-slate-900"></i>
                    </div>
                    <input type="text" id="searchInput" placeholder="Cari"
                        class="bg-gray-50 border border-yellow-700 text-yellow-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5">
                </div>
            </div>
            <table class="table-auto w-full mt-7">
                <thead>
                    <tr class="text-center bg-yellow-400 font-semibold">
                        <td class="border border-black py-2">No</td>
                        <td class="border border-black py-2">Nama Tindakan/Pemeriksaan</td>
                        <td class="border border-black py-2">Harga</td>
                        <td class="border border-black py-2">Keterangan</td>
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
