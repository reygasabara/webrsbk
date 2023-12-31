@extends('layouts.app')

@section('container')
    <section class="mx-6 mb-12 py-12">
        <h1 class="animate__animated animate__lightSpeedInLeft mb-2 inline-block text-2xl font-bold md:text-4xl">
            {{ $submenu }}</h1>
        <hr class="mb-12 rounded-md border-2 border-yellow-500 md:mb-20">

        <img src="{{ asset('img/complaint.png') }}" alt="" class="md:px-12">
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/components/heightCheck.js') }}"></script>
@endsection
