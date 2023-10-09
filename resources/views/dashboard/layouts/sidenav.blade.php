<button id="hamburger"
    class="fixed top-20 z-10 ml-1 w-full translate-x-0 rounded-md bg-white px-2 text-left text-3xl duration-200 hover:text-slate-500 active:text-slate-900 md:w-auto">
    <i class="fa-solid fa-bars"></i>
    <div class="absolute -top-3 h-4 w-full bg-white md:hidden"></div>
</button>
<nav id="sidenav"
    class="fixed top-16 z-10 -ml-0 h-screen w-64 bg-slate-900 px-4 py-7 text-xl text-slate-100 shadow-2xl shadow-black duration-500">

    <div class="mb-5 flex items-center justify-end font-bold">
        <button id="closeButton"
            class="flex h-6 w-6 items-center justify-center rounded-lg p-4 text-2xl duration-200 hover:bg-slate-500 hover:text-slate-50 active:bg-slate-400 active:text-slate-800">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <div class="flex h-[85%] flex-col items-stretch justify-between">
        <ul class="">
            <li class="mb-2">
                <a href="{{ route('dashboard') }}"
                    class="{{ Request::is('dashboard') ? 'text-yellow-400' : '' }} flex h-full w-full items-center rounded-md px-3 py-1 duration-200 hover:bg-slate-400 hover:text-slate-100 active:bg-slate-500">
                    <i class="bx bxs-dashboard mr-4"></i>
                    Dashboard
                </a>
            </li>
            <li class="mb-2">
                <a href="{{ url('dashboard/post') }}"
                    class="{{ Request::is('dashboard/post*') ? 'text-yellow-400' : '' }} flex h-full w-full items-center rounded-md px-3 py-1 duration-200 hover:bg-slate-400 hover:text-slate-100 active:bg-slate-500">
                    <i class="bx bxs-news mr-4"></i>
                    Post
                </a>
            </li>
        </ul>

        <ul class="">
            <hr class="mb-4 border border-slate-100/25">
            <li class="mb-2">
                <a href="{{ route('logout') }}"
                    class="flex h-full w-full items-center rounded-md px-3 py-1 duration-200 hover:bg-slate-400 active:bg-slate-500">
                    <i class="bx bx-log-out bx-flip-horizontal mr-4"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
