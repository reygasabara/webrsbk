@extends('dashboard.layouts.app')

{{-- Title --}}
@section('title')
    Dashboard
@endsection

{{-- Head --}}
@section('head')
@endsection

{{-- Container --}}
@section('container')
    <section>
        <div class="flex items-center">
            <i class="bx bxs-dashboard text-3xl mr-4"></i>
            <h1 class="font-bold text-2xl">DASHBOARD</h1>
        </div>
        <hr class="border-2 border-yellow-700 rounded-full mt-2">
    </section>

    <section class="mt-10">
        <div class="rounded-md shadow-md w-40 h-40 bg-slate-300"></div>
    </section>
@endsection

@section('scripts')
@endsection
