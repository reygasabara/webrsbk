<button id="hamburger"
    class="fixed hover:text-slate-500 active:text-slate-900 z-10 top-20 -left-12 text-3xl duration-200 backdrop-blur-sm px-2 rounded-md">
    <i class="fa-solid fa-bars"></i>
</button>
<nav id="sidenav" class="fixed duration-500 left-0 top-16 h-screen w-64 bg-slate-900 text-slate-100 py-7 px-4 text-xl ">

    <div class="flex justify-end items-center mb-5 font-bold">
        <button id="closeButton"
            class="rounded-lg p-4 hover:bg-slate-500 hover:text-slate-50 active:bg-slate-400 active:text-slate-800 duration-200 text-2xl w-6 h-6 flex items-center justify-center">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <div class="flex flex-col justify-between items-stretch h-[85%]">
        <ul class="">
            <li class="mb-2">
                <a href="{{ route('dashboard') }}"
                    class="w-full h-full flex items-center py-1 px-3 hover:bg-slate-400 hover:text-slate-100 active:bg-slate-500 rounded-md duration-200 {{ $title === 'Dashboard' ? 'text-yellow-400' : '' }}">
                    <i class="bx bxs-dashboard mr-4"></i>
                    Dashboard
                </a>
            </li>
            <li class="mb-2">
                <a href="{{ route('post') }}"
                    class="w-full h-full flex items-center py-1 px-3 hover:bg-slate-400 hover:text-slate-100 active:bg-slate-500 rounded-md duration-200 {{ $title === 'Post' ? 'text-yellow-400' : '' }}">
                    <i class="bx bxs-news mr-4"></i>
                    Post
                </a>
            </li>
        </ul>

        <ul class="">
            <hr class="border border-slate-100/25 mb-4">
            <li class="mb-2">
                <a href="{{ route('logout') }}"
                    class="w-full h-full flex items-center py-1 px-3 hover:bg-slate-400 active:bg-slate-500 rounded-md duration-200">
                    <i class="bx bx-log-out bx-flip-horizontal mr-4"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
