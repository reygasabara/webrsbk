<nav class="fixed top-0 bg-slate-300 w-full px-3 md:px-5 flex justify-between z-50">
    <div class="flex items-center py-4">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-10">
        <div class="pl-5">
            <h1 class="font-bold text-xl md:text-2xl text-yellow-700">RSB KENDARI</h1>
        </div>
    </div>

    <div class="flex items-center">
        <ul class="flex">
            <li class="relative  text-center overflow-hidden text-xl">
                <a href="{{ route('dashboard') }}"
                    class="w-full h-full flex items-center py-1 px-3 rounded-md hover:bg-yellow-400 active:bg-yellow-500 duration-200"><i
                        class='bx bxs-user-circle mr-2 text-2xl mt-[1px]'></i>{{ auth()->user()->name }}</a>
            </li>
    </div>
</nav>
