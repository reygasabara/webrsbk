@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-3xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">
            {{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">

        <div class="md:px-20 mb-12">
            <div class="flex justify-end">
                <div class="relative">
                    <div
                        class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-yellow-600 peer-invalid:text-red-600">
                        <i id="searchIcon" class="fa-solid fa-search" class="text-slate-900"></i>
                    </div>
                    <input type="text" id="searchInput" placeholder="Cari"
                        class="bg-gray-50 border border-yellow-700 text-yellow-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5">
                </div>
            </div>
            <table id="dataTable" class="table-auto w-full mt-7">
                <thead>
                    <tr class="text-center bg-yellow-400 font-semibold">
                        <td class="border border-black py-2">No</td>
                        <td class="border border-black py-2">Nama Tindakan/Pemeriksaan</td>
                        <td class="border border-black py-2">Harga</td>
                        <td class="border border-black py-2">Keterangan</td>
                    </tr>
                </thead>

                <tbody>
                    {{-- <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 pl-3">Kelas 1</td>
                        <td class="border border-black py-2 text-center">14</td>
                        <td class="border border-black py-2 text-center">10</td>
                        <td class="border border-black py-2 text-center">4</td>
                    </tr> --}}
                </tbody>
            </table>


            <div class="flex justify-end mt-5">
                <ul class="inline-flex -space-x-px text-sm">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-yellow-100 hover:text-gray-700"><i
                                class="fa-solid fa-angles-left"></i></a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-yellow-100 hover:text-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-yellow-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="flex items-center justify-center px-3 h-8 text-yellow-600 border border-gray-300 bg-yellow-50 hover:bg-yellow-100 hover:text-yellow-700 ">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-yellow-100 hover:text-gray-700">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-yellow-100 hover:text-gray-700">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-yellow-100 hover:text-gray-700"><i
                                class="fa-solid fa-angles-right"></i></a>
                    </li>
                </ul>
            </div>



        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/serviceRates.js') }}"></script>
@endsection
