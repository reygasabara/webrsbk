@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">{{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">

        <div class="relative mt-5 mb-12 flex justify-center items-center" data-aos="fade-right" data-delay="10000"
            data-duration="50000">
            <hr class="w-10 mr-5 border-2 border-yellow-500 rounded-md">
            <h2 class="text-center font-bold text-3xl">Rawat Jalan</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-500 rounded-md">
        </div>
    </section>
@endsection
