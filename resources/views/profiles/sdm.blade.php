@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">{{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">

        <div class="px-20 mb-12">
            <h2 class="text-center font-semibold text-2xl">Daftar Riil Personil Rumkit Bhayangkara Tingkat III Kendari</h2>
            <p class="text-center text-xl">(<span class="italic">Update</span> pada 13 Juli 2023)</p>
            <table class="table-auto w-full mt-7">
                <thead>
                    <tr class="text-center bg-yellow-400 font-semibold">
                        <td class="border border-black py-2">No.</td>
                        <td class="border border-black py-2">Nama</td>
                        <td class="border border-black py-2">Jumlah</td>
                    </tr>
                </thead>

                <tbody>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-1 text-center">1</td>
                        <td class="border border-black py-1 pl-2">POLRI</td>
                        <td class="border border-black py-1 text-center">25</td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-1 text-center">2</td>
                        <td class="border border-black py-1 pl-2">PNS</td>
                        <td class="border border-black py-1 text-center">33</td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-1 text-center">3</td>
                        <td class="border border-black py-1 pl-2">Dokter Mitra Spesialis</td>
                        <td class="border border-black py-1 text-center">23</td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-1 text-center">4</td>
                        <td class="border border-black py-1 pl-2">Dokter Mitra Umum</td>
                        <td class="border border-black py-1 text-center">17</td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-1 text-center">5</td>
                        <td class="border border-black py-1 pl-2">Karyawan BLU</td>
                        <td class="border border-black py-1 text-center">191</td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-1 text-center" colspan="2">Jumlah</td>
                        <td class="border border-black py-1 text-center">289</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
