@extends('layouts.app')

@section('container')
    <section class="py-12 mx-6 ">
        <h1 class="text-3xl md:text-4xl font-bold mb-2 animate__animated animate__lightSpeedInLeft inline-block">
            {{ $submenu }}</h1>
        <hr class="border-2 border-yellow-500 rounded-md mb-12">

        <div class="text-justify px-7">
            <img src="{{ asset('img/rsbk.jpg') }}" alt="rsbk"
                class="h-[150px] md:h-[200px] lg:h-[400px] w-full object-cover rounded-xl mb-10">
            <h2 class="text-2xl md:text-3xl font-bold">Visi</h2>
            <p class="md:text-xl text-center mt-12 mb-20 text-yellow-600 flex items-center justify-center"><span
                    class="font-bold text-9xl mr-5">/</span> “Terciptanya
                pelayanan kesehatan Rumah Sakit
                Bhayangkara Kendari yang
                profesional
                dan
                dipercaya”. <span class="font-bold text-9xl ml-5">/</span></p>
            <h2 class="text-2xl md:text-3xl font-bold">Misi</h2>
            <ol class="list-decimal -translate-x-6 ml-16 md:ml-40 leading-8">
                <li>Memberikan pelayanan kesehatan bagi anggota Polri dan masyarakat umum secara paripurna.</li>
                <li>Memberikan dukungan kesehatan pada kegiatan operasional fungsi Kepolisian.</li>
                <li>Terciptanya insan kesehatan Polri yang handal melalui pelatihan teknis.</li>
            </ol>
            <h2 class="text-2xl md:text-3xl font-bold mt-16">Motto</h2>
            <p class="md:text-xl text-center md:text-left mt-5 md:mt-8 md:ml-[115px] italic mb-20 flex items-center">
                “Humanis dan
                Prima
                dalam Pelayanan”.</p>
        </div>
    </section>
@endsection
