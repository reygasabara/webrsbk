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
                        <td class="border border-black py-2">Kelas Kamar</td>
                        <td class="border border-black py-2">Jumlah Bed</td>
                        <td class="border border-black py-2">Bed Terisi</td>
                        <td class="border border-black py-2">Bed Kosong</td>
                    </tr>
                </thead>

                <tbody>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 pl-3">Kelas 1</td>
                        <td class="border border-black py-2 text-center">14</td>
                        <td class="border border-black py-2 text-center">10</td>
                        <td class="border border-black py-2 text-center">4</td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 pl-3">Kelas 2</td>
                        <td class="border border-black py-2 text-center">24</td>
                        <td class="border border-black py-2 text-center">19</td>
                        <td class="border border-black py-2 text-center">5</td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 pl-3">Kelas 3</td>
                        <td class="border border-black py-2 text-center">36</td>
                        <td class="border border-black py-2 text-center">26</td>
                        <td class="border border-black py-2 text-center">10</td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 pl-3">Kelas Utama</td>
                        <td class="border border-black py-2 text-center">20</td>
                        <td class="border border-black py-2 text-center">7</td>
                        <td class="border border-black py-2 text-center">13</td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 pl-3">Kelas VIP</td>
                        <td class="border border-black py-2 text-center">10</td>
                        <td class="border border-black py-2 text-center">8</td>
                        <td class="border border-black py-2 text-center">2</td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 pl-3">Kelas VVIP</td>
                        <td class="border border-black py-2 text-center">1</td>
                        <td class="border border-black py-2 text-center">0</td>
                        <td class="border border-black py-2 text-center">1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/heightCheck.js') }}"></script>
@endsection
