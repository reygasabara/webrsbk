@extends('layouts.app')

@section('container')
    <section class="mx-6 py-12">
        <h1 class="animate__animated animate__lightSpeedInLeft mb-2 inline-block text-3xl font-bold md:text-4xl">
            {{ $submenu }}</h1>
        <hr class="mb-12 rounded-md border-2 border-yellow-500">

        <div class="mb-12 md:px-20">
            <h2 class="text-center text-xl font-semibold md:text-2xl">Daftar Riil Personil Rumkit Bhayangkara Tingkat III
                Kendari</h2>
            <p class="text-center text-lg md:text-xl">(<span class="italic">Update</span> pada 13 Juli 2023)</p>
            <table class="mt-7 w-full table-auto">
                <thead>
                    <tr class="bg-yellow-400 text-center font-semibold">
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

@section('scripts')
    <script src="{{ asset('js/components/heightCheck.js') }}"></script>
@endsection
