@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">{{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">
        <div class="text-center pt-10">
            <img src="{{ asset('img/logo.png') }}" alt="logo" class="mx-auto mb-10" data-aos="zoom-in">
            <h2 class="text-4xl font-bold">Rumah Sakit Bhayangkara</h2>
            <p class="italic text-xl mb-12">Humanis dan Prima dalam Pelayanan</p>
        </div>
    </section>
@endsection
