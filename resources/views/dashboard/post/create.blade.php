@extends('dashboard.layouts.app')

{{-- Title --}}
@section('title')
    Post
@endsection

{{-- Head --}}
@section('head')
    <script src="https://cdn.tiny.cloud/1/mpneam3qk6kcix8ozp1o6bgd4o79o37raa8ro16op7dz4l0h/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    {{-- <script src="\node_modules\tinymce\tinymce.min.js" referrerpolicy="origin"></script> --}}
@endsection

{{-- Container --}}
@section('container')
    <section>
        <div class="flex items-center">
            <i class="bx bxs-news mr-4 text-3xl"></i>
            <h1 class="font-bold text-2xl">POST <span class="text-base font-normal"><i
                        class="fa-solid fa-chevron-right mx-1"></i>
                    Tambah Berita</span></h1>
        </div>
        <hr class="border-2 border-yellow-700 rounded-full mt-2">
    </section>

    <section class="my-10">
        <form action="">

            <label for="judul" class="font-bold">Judul <span class="text-red-600">*</span></label>
            <input type="text" name="judul" id="judul"
                class="bg-gray-50 mb-4 mt-1 border border-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                required>

            <label for="deskripsi" class="font-bold">Deskripsi <span class="text-red-600">*</span></label>
            <input
                class="bg-gray-50 mb-4 mt-1 border border-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                type="text" name="deskripsi" id="deskripsi" required>

            <label for="berita" class="font-bold block mb-1">Berita <span class="text-red-600">*</span></label>
            <textarea
                class="bg-gray-50 mb-4 mt-1 min-h-[270px] border border-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                type="text" name="berita" id="berita" required></textarea>

            <label for="foto" class="font-bold mt-4 block">Foto</label>
            <input
                class="bg-gray-50 mb-4 mt-1 border border-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                type="file" accept="image/*" name="foto" id="foto">

            <label for="created_at" class="font-bold block mt-4">Tanggal</label>
            <input
                class="bg-gray-50 mb-4 mt-1 border border-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500"
                type="date" name="created_at" id="created_at">

            <button type="submit"
                class="rounded-md bg-green-400 hover:bg-green-500 active:bg-green-600 active:text-white duration-200 py-1 px-4 mt-7 block mx-auto">Posting</button>
        </form>
    </section>
@endsection

@section('scripts')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                "See docs to implement AI Assistant"))
        });
    </script>
@endsection
