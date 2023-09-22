@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-2xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">
            {{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">

        <img src="{{ asset('img/survei_kepuasan.jpg') }}" alt="survei" class="mx-auto">

        {{-- <div class="overflow-auto border border-black mt-7">
            <table id="dataTable" class="table-auto w-full text-xs">
                <thead class="text-center bg-yellow-400 font-semibold">
                    <tr>
                        <td class="border border-black py-2" rowspan="2"></td>
                        <td class="border border-black py-2" colspan="10">Nilai Unsur
                            Pelayanan</td>
                    </tr>
                    <tr class="">
                        <td class="border border-black py-2">U1</td>
                        <td class="border border-black py-2">U2</td>
                        <td class="border border-black py-2">U3</td>
                        <td class="border border-black py-2">U4</td>
                        <td class="border border-black py-2">U5</td>
                        <td class="border border-black py-2">U6</td>
                        <td class="border border-black py-2">U7</td>
                        <td class="border border-black py-2">U8</td>
                        <td class="border border-black py-2">U9</td>
                        <td class="border border-black py-2">Total</td>
                    </tr>
                </thead>

                <tbody>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 pl-3">Jumlah Responden</td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 pl-3">Jumlah Nilai/Unsur</td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 pl-3">Nilai Rata-Rata/Unsur</td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                    </tr>
                    <tr class="hover:bg-yellow-100">
                        <td class="border border-black py-2 pl-3">Nilai Rata-Rata Tertimbang/Unsur</td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                        <td class="border border-black py-2 text-center"></td>
                    </tr>
                    <tr class="hover:bg-yellow-100 font-bold">
                        <td class="border border-black py-2 pl-3" colspan="10">IKM Unit Pelayanan</td>
                        <td class="border border-black py-2 text-center"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex flex-wrap justify-between mt-10">
            <div class="order-2 md:order-1 mt-8 md:mt-0">
                <h2 class="font-bold">IKLIM UNIT PELAYANAN</h2>
                <p class="text-sm">Mutu Pelayanan:</p>

                <div class="w-60 mt-3 text-xs">
                    <div class="flex justify-between leading-5">
                        <p class="font-bold">A (Sangat Baik)</p>
                        <p>88,31 - 100</p>
                    </div>
                    <div class="flex justify-between leading-5">
                        <p class="font-bold">B (Baik)</p>
                        <p>76,61 - 88,30</p>
                    </div>
                    <div class="flex justify-between leading-5">
                        <p class="font-bold">C (Kurang Baik)</p>
                        <p>65,00 - 76,60</p>
                    </div>
                    <div class="flex justify-between leading-5">
                        <p class="font-bold">D (Tidak Baik)</p>
                        <p>25,00 - 64,99</p>
                    </div>
                </div>
            </div>

            <div class="0rder-1 md:order-2">
                <h2 class="font-bold">Keterangan</h2>
                <ul class="text-sm mt-3">
                    <li>U1 = Pelayanan administrasi</li>
                    <li>U2 = Kemudahan prosedur pelayanan</li>
                    <li>U3 = Kecepatan waktu dalam memberikan pelayanan</li>
                    <li>U4 = Kewajaran biaya/tarif dalam pelayanan</li>
                    <li>U5 = Kualitas pelayanan yang diberikan</li>
                    <li>U6 = Kemampuan petugas dalam pelayanan</li>
                    <li>U7 = Respon petugas dalam pelayanan</li>
                    <li>U8 = Kualitas sarana dan prasarana</li>
                    <li>U9 = Penanganan pengaduan layanan</li>
                </ul>
            </div>
        </div> --}}
    </section>
@endsection
