@extends('dashboard.layouts.app')

{{-- Title --}}
@section('title')
    Jadwal Dokter
@endsection

{{-- Head --}}
@section('head')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
@endsection

{{-- Container --}}
@section('container')
    <section>
        <div class="flex items-center">
            <i class="bx bxs-news mr-4 text-3xl"></i>
            <h1 class="text-2xl font-bold">Jadwal Dokter <span class="text-base font-normal"><i
                        class="fa-solid fa-chevron-right mx-1"></i>
                    Edit Jadwal</span></h1>
        </div>
        <hr class="mt-2 rounded-full border-2 border-yellow-700">
    </section>

    <section class="my-10">
        <form method="post" action="/dashboard/jadwal-dokter/{{ $data->id }}">
            @method('put')
            @csrf
            <label for="nama_dokter" class="font-bold">Nama Dokter <span class="text-red-600">*</span></label>
            <input type="text" name="nama_dokter" id="nama_dokter"
                class="mb-4 mt-1 block w-full rounded-lg border border-slate-700 bg-gray-50 p-2.5 text-sm invalid:border-red-500 invalid:text-red-600 focus:border-blue-500 focus:ring-blue-500 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                required autofocus value="{{ old('nama_dokter', $data->nama_dokter) }}">
            @error('nama_dokter')
                <p class="text-xs text-red-700">{{ $message }}</p>
            @enderror

            <label for="poliklinik" class="font-bold">Poliklinik <span class="text-red-600">*</span></label>
            <select name="poliklinik" id="poliklinik"
                class="mb-4 mt-1 block w-full rounded-lg border border-slate-700 bg-gray-50 p-2.5 text-sm invalid:border-red-500 invalid:text-red-600 focus:border-blue-500 focus:ring-blue-500 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                required>
                <option value="">--- Pilih ---</option>
                <option value="Anak" {{ old('poliklinik', $data->poliklinik) == 'Anak' ? 'selected' : '' }}>Anak
                </option>
                <option value="Bedah Umum" {{ old('poliklinik', $data->poliklinik) == 'Bedah Umum' ? 'selected' : '' }}>
                    Bedah Umum
                </option>
                <option value="Fisioterapi" {{ old('poliklinik', $data->poliklinik) == 'Fisioterapi' ? 'selected' : '' }}>
                    Fisioterapi
                </option>
                <option value="Gigi" {{ old('poliklinik', $data->poliklinik) == 'Gigi' ? 'selected' : '' }}>
                    Gigi
                </option>
                <option value="Interna" {{ old('poliklinik', $data->poliklinik) == 'Interna' ? 'selected' : '' }}>
                    Interna
                </option>
                <option value="Jantung" {{ old('poliklinik', $data->poliklinik) == 'Jantung' ? 'selected' : '' }}>Jantung
                </option>
                <option value="Kulit dan Kelamin"
                    {{ old('poliklinik', $data->poliklinik) == 'Kulit dan Kelamin' ? 'selected' : '' }}>Kulit dan
                    Kelamin
                </option>
                <option value="Mata" {{ old('poliklinik', $data->poliklinik) == 'Mata' ? 'selected' : '' }}>Mata
                </option>
                <option value="Obgyn" {{ old('poliklinik', $data->poliklinik) == 'Obgyn' ? 'selected' : '' }}>Obgyn
                </option>
                <option value="Ortopedi" {{ old('poliklinik', $data->poliklinik) == 'Ortopedi' ? 'selected' : '' }}>
                    Ortopedi
                </option>
                <option value="Paru" {{ old('poliklinik', $data->poliklinik) == 'Paru' ? 'selected' : '' }}>
                    Paru
                </option>
                <option value="Saraf" {{ old('poliklinik', $data->poliklinik) == 'Saraf' ? 'selected' : '' }}>
                    Saraf
                </option>
                <option value="THT" {{ old('poliklinik', $data->poliklinik) == 'THT' ? 'selected' : '' }}>THT
                </option>
                <option value="Umum" {{ old('poliklinik', $data->poliklinik) == 'Umum' ? 'selected' : '' }}>
                    Umum
                </option>
                <option value="Urologi" {{ old('poliklinik', $data->poliklinik) == 'Urologi' ? 'selected' : '' }}>Urologi
                </option>
            </select>
            @error('polikliinik')
                <p class="text-xs text-red-700">{{ $message }}</p>
            @enderror

            <label for="jam_mulai" class="font-bold">Jam Mulai <span class="text-red-600">*</span></label>
            <input type="time" name="jam_mulai" id="jam_mulai"
                class="mb-4 mt-1 block w-full rounded-lg border border-slate-700 bg-gray-50 p-2.5 text-sm invalid:border-red-500 invalid:text-red-600 focus:border-blue-500 focus:ring-blue-500 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                required autofocus value="{{ old('jam_mulai', $data->jam_mulai) }}">
            @error('jam_mulai')
                <p class="text-xs text-red-700">{{ $message }}</p>
            @enderror

            <button type="submit"
                class="mx-auto mt-7 block rounded-md bg-green-400 px-4 py-1 shadow shadow-black/60 duration-200 hover:bg-green-500 active:bg-green-600 active:text-white">Edit
                Jadwal</button>

        </form>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/slug.js') }}"></script>
    <script src="{{ asset('js/components/previewImage.js') }}"></script>
@endsection
