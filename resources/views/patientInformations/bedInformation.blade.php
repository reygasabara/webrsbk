@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-2xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">
            {{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">

        <div class="md:px-20 mb-12">
            <table class="table-auto w-full mt-7 text-sm">
                <thead>
                    <tr class="text-center bg-yellow-400 font-semibold">
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
