@extends('layouts.app')

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
@endsection

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">{{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">
    </section>

    <section class="">





    </section>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
@endsection
