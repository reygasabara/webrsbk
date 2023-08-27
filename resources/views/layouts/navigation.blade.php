<nav class="fixed top-0 bg-slate-300 w-full px-5 flex justify-between z-50">
    <div class="flex items-center py-4">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-14">
        <div class="pl-5">
            <h1 class="font-bold text-2xl text-yellow-700">RS BHAYANGKARA KENDARI</h1>
            <p class="italic text-center">Humanis dan Prima dalam pelayanan</p>
        </div>
    </div>

    <div class="flex items-center">
        <ul class="flex">
            <li
                class="relative mr-5 text-center duration-300 hover:text-yellow-500 {{ $title === 'Beranda' ? 'text-yellow-600 font-bold' : '' }}">
                <a href="/" class="active:text-yellow-700">Beranda</a>
            </li>

            <li class="group relative mr-5 text-center duration-300">
                <a href="{{ route('profiles') }}"
                    class="group-hover:text-yellow-500 {{ $title === 'Profil' ? 'text-yellow-600 group-active:text-yellow-700 font-bold' : '' }}">Profil</a>
                <div class="flex justify-center scale-0 group-hover:scale-100 duration-200">
                    <div class="absolute w-56 h-10"></div>
                    <ul class=" absolute rounded-md shadow-md py-3 px-5 w-56 bg-white top-10  origin-top duration-200">
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('history') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Sejarah' ? 'text-yellow-600  font-bold' : '' }}">Sejarah</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('visiMisi') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Visi dan Misi' ? 'text-yellow-600 font-bold' : '' }}">Visi,
                                Misi, dan Motto</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('structure') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Struktur Organisasi' ? 'text-yellow-600 font-bold' : '' }}">Struktur
                                Organisasi</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('sdm') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'SDM' ? 'text-yellow-600 font-bold' : '' }}">SDM</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('floorPlan') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Denah Rumah Sakit' ? 'text-yellow-600 font-bold' : '' }}">Denah
                                Rumah Sakit</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('logo') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Logo' ? 'text-yellow-600 font-bold' : '' }}">Logo</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="group relative mr-5 text-center duration-300">
                <a href="{{ route('services') }}"
                    class="group-hover:text-yellow-500 {{ $title === 'Pelayanan' ? 'text-yellow-600 group-active:text-yellow-700 font-bold' : '' }}">Pelayanan</a>
                <div class="flex justify-center scale-0 group-hover:scale-100 duration-200">
                    <div class="absolute w-56 h-10"></div>
                    <ul class=" absolute rounded-md shadow-md py-3 px-5 w-56 bg-white top-10  origin-top duration-200">
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('logo') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Logo' ? 'text-yellow-600 font-bold' : '' }}">Rawat
                                Jalan</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('logo') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Logo' ? 'text-yellow-600 font-bold' : '' }}">Rawat
                                Inap</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="{{ route('logo') }}"
                                class="active:text-yellow-700 block {{ $submenu === 'Logo' ? 'text-yellow-600 font-bold' : '' }}">Penunjang</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li
                class="group relative mr-5 text-center duration-300 {{ $title === 'Pasien' ? 'text-yellow-600 font-bold' : '' }}">
                <a href="/" class="group-hover:text-yellow-500">Informasi Pasien</a>
                <div class="flex justify-center scale-0 group-hover:scale-100 duration-200">
                    <div class="absolute w-64 h-10"></div>
                    <ul class=" absolute rounded-md shadow-md py-3 px-5 w-64 bg-white top-10  origin-top duration-200">
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Jadwal Dokter</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Informasi Tempat Tidur</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Alur Pendaftaran</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Alur Pendaftaran Via JKN</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Prosedur Komplain</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li
                class="group relative mr-5 text-center duration-300 {{ $title === 'Publik' ? 'text-yellow-600 font-bold' : '' }}">
                <a href="/" class="group-hover:text-yellow-500">Informasi Publik</a>
                <div class="flex justify-center scale-0 group-hover:scale-100 duration-200">
                    <div class="absolute w-72 h-10"></div>
                    <ul class=" absolute rounded-md shadow-md py-3 px-5 w-72 bg-white top-10  origin-top duration-200">
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Informasi 20 Besar Penyakit</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Tarif Pelayanan</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Agenda Kegiatan</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Berita</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">PMKP</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Artikel Kesehatan</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Hasil Survei Kepuasan</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Karir</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li
                class="group relative mr-5 text-center duration-300 {{ $title === 'Galeri' ? 'text-yellow-600 font-bold' : '' }}">
                <a href="/" class="group-hover:text-yellow-500">Galeri</a>
                <div class="flex justify-center scale-0 group-hover:scale-100 duration-200">
                    <div class="absolute w-28 h-10"></div>
                    <ul class=" absolute rounded-md shadow-md py-3 px-5 w-28 bg-white top-10  origin-top duration-200">
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Foto</a>
                        </li>
                        <li class="hover:text-yellow-500 border-y-2 border-y-white hover:border-y-yellow-700 leading-7">
                            <a href="/">Video</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li
                class="relative mr-5 text-center duration-300 hover:text-yellow-500 {{ $title === 'Kontak' ? 'text-yellow-600 font-bold' : '' }}">
                <a href="/">Hubungi Kami</a>
            </li>
    </div>
</nav>
