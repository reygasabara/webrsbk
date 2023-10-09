@extends('layouts.app')

@section('container')
    <section class="mx-6 py-12">
        <h1 class="animate__animated animate__lightSpeedInLeft mb-2 inline-block text-2xl font-bold md:text-4xl">
            {{ $submenu }}</h1>
        <hr class="mb-12 rounded-md border-2 border-yellow-500">
        <div class="pt-10 text-center">
            <img src="{{ asset('img/logo.png') }}" alt="logo" class="mx-auto mb-10 w-56" data-aos="zoom-in">
            <h2 class="text-2xl font-bold md:text-4xl">Rumah Sakit Bhayangkara</h2>
            <p class="mb-12 italic md:text-xl">Humanis dan Prima dalam Pelayanan</p>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/heightCheck.js') }}"></script>
@endsection
