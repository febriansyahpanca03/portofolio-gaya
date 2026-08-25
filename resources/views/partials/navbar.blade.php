<header class="fixed inset-x-0 top-1 z-50 border-b border-rose-100 bg-white/70 backdrop-blur-lg">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
        <a href="#home" class="font-display text-xl font-semibold tracking-tight text-stone-800">
            {{ Str::before($profile['name'], ' ') }}<span class="text-rose-500">.</span>
        </a>

        <ul class="hidden items-center gap-7 text-sm font-medium text-stone-600 lg:flex">
            <li><a href="#about" data-nav-link class="nav-link relative transition hover:text-rose-600">Tentang</a></li>
            <li><a href="#education" data-nav-link class="nav-link relative transition hover:text-rose-600">Pendidikan</a></li>
            <li><a href="#skills" data-nav-link class="nav-link relative transition hover:text-rose-600">Skills</a></li>
            <li><a href="#experience" data-nav-link class="nav-link relative transition hover:text-rose-600">Pengalaman</a></li>
            <li><a href="#portfolio" data-nav-link class="nav-link relative transition hover:text-rose-600">Portofolio</a></li>
            <li>
                <a href="#contact" class="rounded-full bg-gradient-to-r from-rose-400 to-amber-300 px-5 py-2 font-semibold text-white shadow-sm shadow-rose-200 transition hover:shadow-md hover:shadow-rose-300 hover:brightness-105">
                    Hubungi Saya
                </a>
            </li>
        </ul>

        <button
            id="menu-toggle"
            type="button"
            class="text-stone-700 lg:hidden"
            aria-label="Buka menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
        >
            <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
            </svg>
            <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    <ul id="mobile-menu" class="hidden flex-col gap-1 border-t border-rose-100 bg-white/95 px-6 py-4 text-sm font-medium text-stone-600 lg:hidden">
        <li><a href="#about" class="block rounded-lg px-3 py-2 transition hover:bg-rose-50 hover:text-rose-600">Tentang</a></li>
        <li><a href="#education" class="block rounded-lg px-3 py-2 transition hover:bg-rose-50 hover:text-rose-600">Pendidikan</a></li>
        <li><a href="#skills" class="block rounded-lg px-3 py-2 transition hover:bg-rose-50 hover:text-rose-600">Skills</a></li>
        <li><a href="#experience" class="block rounded-lg px-3 py-2 transition hover:bg-rose-50 hover:text-rose-600">Pengalaman</a></li>
        <li><a href="#portfolio" class="block rounded-lg px-3 py-2 transition hover:bg-rose-50 hover:text-rose-600">Portofolio</a></li>
        <li><a href="#contact" class="block rounded-lg px-3 py-2 transition hover:bg-rose-50 hover:text-rose-600">Hubungi Saya</a></li>
    </ul>
</header>