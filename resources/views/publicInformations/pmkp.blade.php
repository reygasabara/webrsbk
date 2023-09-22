@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-2xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">
            {{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-6 md:mb-10">

        <h2 class="text-center font-bold md:text-2xl mb-2 md:mb-4">Indikator Mutu 2023</h2>

        <img src="{{ asset('img/imut12023.jpg') }}" alt="pmkp" class="mx-auto">
    </section>
@endsection
