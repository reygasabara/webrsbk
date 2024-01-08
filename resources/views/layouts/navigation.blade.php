<nav class="fixed top-0 z-50 flex w-full justify-between bg-slate-300 px-5">
    <div class="flex items-center py-4">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-8 lg:w-14">
        <div class="pl-3 lg:pl-5">
            <h1 class="text-sm font-bold text-yellow-700 lg:text-2xl">RS BHAYANGKARA KENDARI</h1>
            <p class="text-[9px] italic lg:text-center lg:text-base">Humanis dan Prima dalam pelayanan</p>
        </div>
    </div>

    <div class="hidden items-center lg:flex">
        <ul class="flex">
            <li
                class="{{ $title === 'Beranda' ? 'text-yellow-600 font-bold' : '' }} relative mr-5 text-center duration-300 hover:text-yellow-500">
                <a href="/" class="active:text-yellow-700">Beranda</a>
            </li>

            <li class="group relative mr-5 text-center duration-300">
                <button
                    class="{{ $title === 'Profil' ? 'text-yellow-600 group-active:text-yellow-700 font-bold' : '' }} group-hover:text-yellow-500">Profil</button>
                <div class="flex scale-0 justify-center duration-200 group-hover:scale-100">
                    <div class="absolute h-10 w-56"></div>
                    <ul class="absolute top-10 w-56 origin-top rounded-md bg-white px-5 py-3 shadow-md duration-200">
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="{{ route('history') }}"
                                class="{{ $submenu === 'Sejarah' ? 'text-yellow-600  font-bold' : '' }} block active:text-yellow-700">Sejarah</a>
                        </li>
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="{{ route('visiMisi') }}"
                                class="{{ $submenu === 'Visi dan Misi' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Visi,
                                Misi, dan Motto</a>
                        </li>
                        {{-- <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('structure') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Struktur Organisasi' ? 'text-yellow-600 font-bold' : '' }}">Struktur
                                Organisasi</a>
                        </li> --}}
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="{{ route('sdm') }}"
                                class="{{ $submenu === 'SDM' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">SDM</a>
                        </li>
                        {{-- <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('floorPlan') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Denah Rumah Sakit' ? 'text-yellow-600 font-bold' : '' }}">Denah
                                Rumah Sakit</a>
                        </li> --}}
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="{{ route('logo') }}"
                                class="{{ $submenu === 'Logo' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Logo</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="group relative mr-5 text-center duration-300">
                <button
                    class="{{ $title === 'Pelayanan' ? 'text-yellow-600 group-active:text-yellow-700 font-bold' : '' }} group-hover:text-yellow-500">Pelayanan</button>
                <div class="flex scale-0 justify-center duration-200 group-hover:scale-100">
                    <div class="absolute h-10 w-56"></div>
                    <ul class="absolute top-10 w-56 origin-top rounded-md bg-white px-5 py-3 shadow-md duration-200">
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="{{ route('outpacient') }}"
                                class="{{ $submenu === 'Rawat Jalan' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Rawat
                                Jalan</a>
                        </li>
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="{{ route('inpacient') }}"
                                class="{{ $submenu === 'Rawat Inap' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Rawat
                                Inap</a>
                        </li>
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="{{ route('support') }}"
                                class="{{ $submenu === 'Penunjang' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Penunjang</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="group relative mr-5 text-center duration-300">
                <button
                    class="{{ $title === 'Informasi Pasien' ? 'text-yellow-600 group-active:text-yellow-700 font-bold' : '' }} group-hover:text-yellow-500">Informasi
                    Pasien</button>
                <div class="flex scale-0 justify-center duration-200 group-hover:scale-100">
                    <div class="absolute h-10 w-64"></div>
                    <ul class="absolute top-10 w-64 origin-top rounded-md bg-white px-5 py-3 shadow-md duration-200">
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="{{ route('doctorSchedule') }}"
                                class="{{ $submenu === 'Jadwal Dokter' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Jadwal
                                Dokter</a>
                        </li>
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="https://rsbkendari.id:8085/webapps/bed5.php"
                                class="{{ $submenu === 'Informasi Tempat Tidur' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Informasi
                                Tempat Tidur</a>
                        </li>
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="{{ route('registrationFlow') }}"
                                class="{{ $submenu === 'Alur Pendaftaran' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Alur
                                Pendaftaran</a>
                        </li>
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="{{ route('JKNregistrationFlow') }}"
                                class="{{ $submenu === 'Alur Pendaftaran Via JKN' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Alur
                                Pendaftaran Via JKN<a />
                        </li>
                        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                            <a href="{{ route('complaintProcedure') }}"
                                class="{{ $submenu === 'Prosedur Komplain' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Prosedur
                                Komplain</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- <li class="group relative mr-5 text-center duration-300">
                <a href="{{ route('publicInformations') }}"
                    class="group-hover:text-yellow-500 {{ $title === 'Informasi Publik' ? 'text-yellow-600 group-active:text-yellow-700 font-bold' : '' }}">Informasi
                    Publik</a>
                <div class="flex justify-center scale-0 group-hover:scale-100 duration-200">
                    <div class="absolute w-72 h-10"></div>
                    <ul class=" absolute rounded-md shadow-md py-3 px-5 w-72 bg-white top-10  origin-top duration-200">
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('topDeseases') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Informasi 20 Besar Penyakit' ? 'text-yellow-600 font-bold' : '' }}">Informasi
                                20 Besar Penyakit</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('serviceRates') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Tarif Pelayanan' ? 'text-yellow-600 font-bold' : '' }}">Tarif
                                Pelayanan</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('agenda') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Agenda Kegiatan' ? 'text-yellow-600 font-bold' : '' }}">Agenda
                                Kegiatan</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('news') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Berita' ? 'text-yellow-600 font-bold' : '' }}">Berita</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('pmkp') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'PMKP' ? 'text-yellow-600 font-bold' : '' }}">PMKP</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('healthArticle') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Artikel Kesehatan' ? 'text-yellow-600 font-bold' : '' }}">Artikel
                                Kesehatan</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('satisfactionSurvey') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Hasil Survei Kepuasan' ? 'text-yellow-600 font-bold' : '' }}">Hasil
                                Survei Kepuasan</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('career') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Karir' ? 'text-yellow-600 font-bold' : '' }}">Karir</a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li
                class="{{ $title === 'Hubungi Kami' ? 'text-yellow-600 font-bold' : '' }} relative mr-5 text-center duration-300 hover:text-yellow-500">
                <a href="{{ route('contact') }}" class="active:text-yellow-700">Hubungi Kami</a>
            </li>
        </ul>
    </div>

    <div class="relative ml-4 flex items-center lg:hidden">
        <button id="hamburger" class="group block h-full w-12 px-2 duration-200" onclick="hamburgerButton()">
            <div
                class="mb-1 h-1 origin-top-left -translate-y-0 rotate-0 transform bg-yellow-700 transition duration-300 ease-in-out group-hover:bg-yellow-600 group-active:bg-yellow-800">
            </div>
            <div
                class="mb-1 h-1 bg-yellow-700 transition duration-300 ease-in-out group-hover:bg-yellow-600 group-active:bg-yellow-800">
            </div>
            <div
                class="h-1 origin-bottom-left translate-y-0 -rotate-0 transform bg-yellow-700 transition duration-300 ease-in-out group-hover:bg-yellow-600 group-active:bg-yellow-800">
            </div>
        </button>
    </div>

    <ul id="navPopUp"
        class="absolute left-0 top-[66px] -z-50 w-full origin-top scale-0 rounded-md bg-white px-5 py-3 shadow-md duration-200">
        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
            <a href="/"
                class="{{ $title === 'Beranda' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Beranda</a>
        </li>
        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700">
            <button
                class="{{ $title === 'Profil' ? 'text-yellow-600 font-bold' : '' }} block w-full text-left hover:text-yellow-500 active:text-yellow-700"
                onclick="showSubmenu(this)">Profil</button>

            <ul class="submenu h-0 origin-top overflow-hidden bg-white px-5 duration-200">
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="{{ route('history') }}"
                        class="{{ $submenu === 'Sejarah' ? 'text-yellow-600  font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> Sejarah</a>
                </li>
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="{{ route('visiMisi') }}"
                        class="{{ $submenu === 'Visi dan Misi' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> Visi,
                        Misi, dan Motto</a>
                </li>
                {{-- <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                    <a href="{{ route('structure') }}"
                        class="active:text-yellow-700 block {{ $submenu === 'Struktur Organisasi' ? 'text-yellow-600 font-bold' : '' }}"><i
                            class="fa-solid fa-angle-right"></i> Struktur
                        Organisasi</a>
                </li> --}}
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="{{ route('sdm') }}"
                        class="{{ $submenu === 'SDM' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> SDM</a>
                </li>
                {{-- <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                    <a href="{{ route('floorPlan') }}"
                        class="active:text-yellow-700 block {{ $submenu === 'Denah Rumah Sakit' ? 'text-yellow-600 font-bold' : '' }}"><i
                            class="fa-solid fa-angle-right"></i> Denah
                        Rumah Sakit</a>
                </li> --}}
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="{{ route('logo') }}"
                        class="{{ $submenu === 'Logo' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> Logo</a>
                </li>
            </ul>

        </li>
        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700">
            <button
                class="{{ $title === 'Pelayanan' ? 'text-yellow-600 font-bold' : '' }} block w-full text-left hover:text-yellow-500 active:text-yellow-700"
                onclick="showSubmenu(this)">Pelayanan</button>

            <ul class="submenu h-0 origin-top overflow-hidden bg-white px-5 duration-200">
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="{{ route('outpacient') }}"
                        class="{{ $submenu === 'Rawat Jalan' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> Rawat
                        Jalan</a>
                </li>
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="{{ route('inpacient') }}"
                        class="{{ $submenu === 'Rawat Inap' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> Rawat
                        Inap</a>
                </li>
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="{{ route('support') }}"
                        class="{{ $submenu === 'Penunjang' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> Penunjang</a>
                </li>
            </ul>
        </li>
        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700">
            <button
                class="{{ $title === 'Informasi Pasien' ? 'text-yellow-600 font-bold' : '' }} block w-full text-left hover:text-yellow-500 active:text-yellow-700"
                onclick="showSubmenu(this)">Informasi
                Pasien</button>

            <ul class="submenu h-0 origin-top overflow-hidden bg-white px-5 duration-200">
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="{{ route('doctorSchedule') }}"
                        class="{{ $submenu === 'Jadwal Dokter' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> Jadwal
                        Dokter</a>
                </li>
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="https://rsbkendari.id:8085/webapps/bed5.php"
                        class="{{ $submenu === 'Informasi Tempat Tidur' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> Informasi
                        Tempat Tidur</a>
                </li>
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="{{ route('registrationFlow') }}"
                        class="{{ $submenu === 'Alur Pendaftaran' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> Alur
                        Pendaftaran</a>
                </li>
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="{{ route('JKNregistrationFlow') }}"
                        class="{{ $submenu === 'Alur Pendaftaran Via JKN' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> Alur
                        Pendaftaran Via JKN<a />
                </li>
                <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
                    <a href="{{ route('complaintProcedure') }}"
                        class="{{ $submenu === 'Prosedur Komplain' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700"><i
                            class="fa-solid fa-angle-right"></i> Prosedur
                        Komplain</a>
                </li>
            </ul>
        </li>
        {{-- <li class="border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
            <button
                class="w-full text-left hover:text-yellow-500 active:text-yellow-700 block {{ $title === 'Informasi Publik' ? 'text-yellow-600 font-bold' : '' }}"
                onclick="showSubmenu(this)">Informasi
                Publik</button>

            <ul class="submenu h-0 overflow-hidden px-5 bg-white origin-top duration-200">
                <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                    <a href="{{ route('topDeseases') }}"
                        class="active:text-yellow-700 block {{ $submenu === 'Informasi 20 Besar Penyakit' ? 'text-yellow-600 font-bold' : '' }}"><i
                            class="fa-solid fa-angle-right"></i> Informasi
                        20 Besar Penyakit</a>
                </li>
                <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                    <a href="{{ route('serviceRates') }}"
                        class="active:text-yellow-700 block {{ $submenu === 'Tarif Pelayanan' ? 'text-yellow-600 font-bold' : '' }}"><i
                            class="fa-solid fa-angle-right"></i> Tarif
                        Pelayanan</a>
                </li>
                <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                    <a href="{{ route('agenda') }}"
                        class="active:text-yellow-700 block {{ $submenu === 'Agenda Kegiatan' ? 'text-yellow-600 font-bold' : '' }}"><i
                            class="fa-solid fa-angle-right"></i> Agenda
                        Kegiatan</a>
                </li>
                <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                    <a href="{{ route('news') }}"
                        class="active:text-yellow-700 block {{ $submenu === 'Berita' ? 'text-yellow-600 font-bold' : '' }}"><i
                            class="fa-solid fa-angle-right"></i> Berita</a>
                </li>
                <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                    <a href="{{ route('pmkp') }}"
                        class="active:text-yellow-700 block {{ $submenu === 'PMKP' ? 'text-yellow-600 font-bold' : '' }}"><i
                            class="fa-solid fa-angle-right"></i> PMKP</a>
                </li>
                <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                    <a href="{{ route('healthArticle') }}"
                        class="active:text-yellow-700 block {{ $submenu === 'Artikel Kesehatan' ? 'text-yellow-600 font-bold' : '' }}"><i
                            class="fa-solid fa-angle-right"></i> Artikel
                        Kesehatan</a>
                </li>
                <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                    <a href="{{ route('satisfactionSurvey') }}"
                        class="active:text-yellow-700 block {{ $submenu === 'Hasil Survei Kepuasan' ? 'text-yellow-600 font-bold' : '' }}"><i
                            class="fa-solid fa-angle-right"></i> Hasil
                        Survei Kepuasan</a>
                </li>
                <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                    <a href="{{ route('career') }}"
                        class="active:text-yellow-700 block {{ $submenu === 'Karir' ? 'text-yellow-600 font-bold' : '' }}"><i
                            class="fa-solid fa-angle-right"></i> Karir</a>
                </li>
            </ul>
        </li> --}}
        <li class="border-y-2 border-y-white leading-7 hover:border-y-yellow-700 hover:text-yellow-500">
            <a href="{{ route('contact') }}"
                class="{{ $title === 'Hubungi Kami' ? 'text-yellow-600 font-bold' : '' }} block active:text-yellow-700">Hubungi
                Kami</a>
        </li>
    </ul>
</nav>
