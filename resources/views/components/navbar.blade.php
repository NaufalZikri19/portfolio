<header id="navbar"
    class="fixed inset-x-0 top-0 z-50 bg-[#060709]/90 backdrop-blur-md border-b border-[#1c222d] text-white">
    <div class="mx-auto flex h-16 max-w-container-max items-center justify-between px-gutter">
        <a href="{{ url('/') }}" aria-label="Naufal Zikri Hilmy, beranda"
            class="group font-headline-md text-base sm:text-lg font-black tracking-tight text-white transition-colors hover:text-accent focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent">
            <span>NAUFAL ZIKRI HILMY</span><span
                class="text-accent ml-0.5 inline-block group-hover:scale-125 transition-transform">.</span>
        </a>

        <!-- Desktop Segmented Pill Navigation Container -->
        <nav id="desktop-nav" aria-label="Navigasi utama"
            class="hidden items-center relative p-1 rounded-full bg-[#0c0e12]/90 border border-[#1c222d] lg:flex">
            <!-- Animated Sliding Active Pill Background -->
            <div id="nav-indicator-pill"
                class="absolute h-[calc(100%-8px)] top-1 rounded-full bg-[#13171f] border border-accent/40 shadow-[0_0_14px_rgba(155,184,255,0.2)] pointer-events-none opacity-0"
                style="left: 0; width: 0;">
            </div>

            <a class="nav-item relative z-10 px-3.5 py-1.5 rounded-full text-xs font-label-mono uppercase tracking-wider text-on-surface-variant transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="about" href="{{ request()->is('/') ? '#about' : url('/#about') }}">Tentang</a>
            <a class="nav-item relative z-10 px-3.5 py-1.5 rounded-full text-xs font-label-mono uppercase tracking-wider text-on-surface-variant transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="experience"
                href="{{ request()->is('/') ? '#experience' : url('/#experience') }}">Pengalaman</a>
            <a class="nav-item relative z-10 px-3.5 py-1.5 rounded-full text-xs font-label-mono uppercase tracking-wider text-on-surface-variant transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="projects" href="{{ request()->is('/') ? '#projects' : url('/#projects') }}">Projek</a>
            <a class="nav-item relative z-10 px-3.5 py-1.5 rounded-full text-xs font-label-mono uppercase tracking-wider text-on-surface-variant transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="techstack" href="{{ request()->is('/') ? '#techstack' : url('/#techstack') }}">Tech
                Stack</a>
            <a class="nav-item relative z-10 px-3.5 py-1.5 rounded-full text-xs font-label-mono uppercase tracking-wider text-on-surface-variant transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="services" href="{{ request()->is('/') ? '#services' : url('/#services') }}">Layanan</a>
            <a class="nav-item relative z-10 px-3.5 py-1.5 rounded-full text-xs font-label-mono uppercase tracking-wider text-on-surface-variant transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="contact" href="{{ request()->is('/') ? '#contact' : url('/#contact') }}">Kontak</a>
        </nav>

        <div class="hidden lg:flex items-center gap-4">
            <a href="{{ asset('cv/CV-Naufal-Zikri-Hilmy.pdf') }}" target="_blank" rel="noopener noreferrer"
                aria-label="Unduh atau buka Resume Naufal Zikri Hilmy (PDF)"
                class="min-h-[38px] inline-flex items-center gap-1.5 px-5 py-2 rounded-full bg-accent text-on-accent font-body-md font-bold text-xs uppercase tracking-wider hover:bg-accent-hover active:scale-95 transition-all shadow-[0_2px_12px_rgba(155,184,255,0.16)] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent">
                <span>Resume</span>
                <span class="material-symbols-outlined text-[15px]" aria-hidden="true">open_in_new</span>
            </a>
        </div>

        <button id="mobile-menu-toggle" type="button" aria-controls="mobile-menu" aria-expanded="false"
            aria-haspopup="dialog" aria-label="Buka menu navigasi"
            class="inline-flex min-h-11 items-center gap-2 px-2 font-label-mono text-xs font-semibold tracking-[0.14em] text-white transition-colors hover:text-accent focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent lg:hidden">
            <span>MENU</span>
            <span class="material-symbols-outlined text-lg" aria-hidden="true">menu</span>
        </button>
    </div>
</header>

<dialog id="mobile-menu" aria-label="Menu navigasi"
    class="fixed inset-0 m-0 h-dvh max-h-none w-screen max-w-none overflow-y-auto overscroll-contain border-0 bg-[#060709] p-0 text-white backdrop:bg-[#060709]/95">
    <div class="mx-auto flex min-h-full max-w-container-max flex-col px-gutter py-4">
        <div class="flex h-16 items-center justify-between border-b border-[#1c222d] pb-2">
            <span class="font-headline-md text-base font-black tracking-tight text-white">
                NAUFAL ZIKRI HILMY<span class="text-accent">.</span>
            </span>
            <button type="button" data-menu-close
                class="inline-flex min-h-11 items-center gap-2 px-2 font-label-mono text-xs font-semibold tracking-[0.14em] text-white transition-colors hover:text-accent focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent">
                <span>TUTUP</span>
                <span class="material-symbols-outlined text-lg" aria-hidden="true">close</span>
            </button>
        </div>
        <nav aria-label="Navigasi mobile" class="flex flex-1 flex-col justify-center gap-6 py-10">
            <a class="mobile-nav-item w-fit font-headline-md text-3xl font-extrabold uppercase tracking-tight text-white transition-all hover:text-accent focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="about" href="{{ request()->is('/') ? '#about' : url('/#about') }}">Tentang</a>
            <a class="mobile-nav-item w-fit font-headline-md text-3xl font-extrabold uppercase tracking-tight text-white transition-all hover:text-accent focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="experience"
                href="{{ request()->is('/') ? '#experience' : url('/#experience') }}">Pengalaman</a>
            <a class="mobile-nav-item w-fit font-headline-md text-3xl font-extrabold uppercase tracking-tight text-white transition-all hover:text-accent focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="projects" href="{{ request()->is('/') ? '#projects' : url('/#projects') }}">Projek</a>
            <a class="mobile-nav-item w-fit font-headline-md text-3xl font-extrabold uppercase tracking-tight text-white transition-all hover:text-accent focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="techstack" href="{{ request()->is('/') ? '#techstack' : url('/#techstack') }}">Tech
                Stack</a>
            <a class="mobile-nav-item w-fit font-headline-md text-3xl font-extrabold uppercase tracking-tight text-white transition-all hover:text-accent focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="services" href="{{ request()->is('/') ? '#services' : url('/#services') }}">Layanan</a>
            <a class="mobile-nav-item w-fit font-headline-md text-3xl font-extrabold uppercase tracking-tight text-white transition-all hover:text-accent focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                data-section="contact" href="{{ request()->is('/') ? '#contact' : url('/#contact') }}">Kontak</a>
        </nav>
        <div class="border-t border-[#1c222d] pt-6 pb-8 flex flex-col gap-3">
            <a href="{{ asset('cv/CV-Naufal-Zikri-Hilmy.pdf') }}" target="_blank" rel="noopener noreferrer"
                class="min-h-[48px] w-full inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-accent text-on-accent font-body-md font-bold text-xs uppercase tracking-wider hover:bg-accent-hover transition-all shadow-[0_2px_12px_rgba(155,184,255,0.16)]">
                <span>Buka Resume (PDF)</span>
                <span class="material-symbols-outlined text-sm" aria-hidden="true">open_in_new</span>
            </a>
            <a href="#contact" data-menu-close-action
                class="min-h-[44px] w-full inline-flex items-center justify-center gap-2 px-6 py-2.5 rounded-full bg-[#13171f] text-white border border-[#2d3545] hover:border-accent font-body-md font-semibold text-xs uppercase tracking-wider transition-all">
                <span>Hubungi Saya</span>
                <span class="material-symbols-outlined text-sm" aria-hidden="true">arrow_forward</span>
            </a>
        </div>
    </div>
</dialog>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggle = document.getElementById('mobile-menu-toggle');
        const dialog = document.getElementById('mobile-menu');
        const closeButton = dialog?.querySelector('[data-menu-close]');
        const closeAction = dialog?.querySelector('[data-menu-close-action]');

        if (!toggle || !(dialog instanceof HTMLDialogElement) || !closeButton) return;

        const syncState = () => {
            const isOpen = dialog.open;
            toggle.setAttribute('aria-expanded', String(isOpen));
            toggle.setAttribute('aria-label', isOpen ? 'Menu navigasi terbuka' : 'Buka menu navigasi');
        };

        toggle.addEventListener('click', () => {
            dialog.showModal();
            syncState();
            closeButton.focus();
        });
        closeButton.addEventListener('click', () => dialog.close());
        closeAction?.addEventListener('click', () => dialog.close());
        dialog.addEventListener('close', syncState);
        dialog.addEventListener('click', (event) => {
            if (event.target === dialog) dialog.close();
        });
        dialog.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => dialog.close());
        });
    });
</script>