<header id="navbar" class="absolute inset-x-0 top-0 z-50 bg-transparent text-white">
    <div class="mx-auto flex h-16 max-w-container-max items-center justify-between px-gutter">
        <a href="{{ url('/') }}" aria-label="Naufal Zikri Hilmy, beranda"
            class="font-headline-md text-base font-black tracking-tight text-white transition-colors hover:text-[#f3e4a2] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2]">
            NZH<span class="text-[#f3e4a2]">.</span>
        </a>

        <nav aria-label="Navigasi utama" class="hidden items-center gap-7 lg:flex">
            <a class="text-sm font-medium text-[#c2cee0] transition-colors hover:text-[#f3e4a2] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2]"
                href="{{ request()->is('/') ? '#services' : url('/#services') }}">Layanan</a>
            <a class="text-sm font-medium text-[#c2cee0] transition-colors hover:text-[#f3e4a2] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2]"
                href="{{ request()->is('/') ? '#projects' : url('/#projects') }}">Projek</a>
            <a class="text-sm font-medium text-[#c2cee0] transition-colors hover:text-[#f3e4a2] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2]"
                href="{{ request()->is('/') ? '#contact' : url('/#contact') }}">Kontak</a>
            <a class="text-sm font-medium text-[#c2cee0] transition-colors hover:text-[#f3e4a2] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2]"
                href="{{ request()->is('/') ? '#about' : url('/#about') }}">Tentang</a>
        </nav>

        <button id="mobile-menu-toggle" type="button" aria-controls="mobile-menu" aria-expanded="false"
            aria-haspopup="dialog" aria-label="Buka menu navigasi"
            class="inline-flex min-h-11 items-center gap-2 px-2 font-label-mono text-xs font-semibold tracking-[0.14em] text-white transition-colors hover:text-[#f3e4a2] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2] lg:hidden">
            <span>MENU</span>
            <span class="material-symbols-outlined text-lg" aria-hidden="true">menu</span>
        </button>
    </div>
</header>

<dialog id="mobile-menu" aria-label="Menu navigasi"
    class="fixed inset-0 m-0 h-dvh max-h-none w-screen max-w-none overflow-y-auto overscroll-contain border-0 bg-[#061329] p-0 text-white backdrop:bg-[#061329]/95">
    <div class="mx-auto flex min-h-full max-w-container-max flex-col px-gutter">
        <div class="flex h-16 items-center justify-between">
            <span class="font-headline-md text-base font-black tracking-tight text-white">NZH<span
                    class="text-[#f3e4a2]">.</span></span>
            <button type="button" data-menu-close
                class="inline-flex min-h-11 items-center gap-2 px-2 font-label-mono text-xs font-semibold tracking-[0.14em] text-white transition-colors hover:text-[#f3e4a2] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2]">
                <span>TUTUP</span>
                <span class="material-symbols-outlined text-lg" aria-hidden="true">close</span>
            </button>
        </div>
        <nav aria-label="Navigasi utama" class="flex flex-1 flex-col justify-center gap-4 py-10">
            <a class="w-fit font-headline-md text-4xl font-bold tracking-[-0.03em] text-white transition-colors hover:text-[#f3e4a2] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2] sm:text-5xl"
                href="{{ request()->is('/') ? '#services' : url('/#services') }}">Layanan</a>
            <a class="w-fit font-headline-md text-4xl font-bold tracking-[-0.03em] text-white transition-colors hover:text-[#f3e4a2] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2] sm:text-5xl"
                href="{{ request()->is('/') ? '#projects' : url('/#projects') }}">Portofolio</a>
            <a class="w-fit font-headline-md text-4xl font-bold tracking-[-0.03em] text-white transition-colors hover:text-[#f3e4a2] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2] sm:text-5xl"
                href="{{ request()->is('/') ? '#contact' : url('/#contact') }}">Kontak</a>
            <a class="w-fit font-headline-md text-4xl font-bold tracking-[-0.03em] text-white transition-colors hover:text-[#f3e4a2] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2] sm:text-5xl"
                href="{{ request()->is('/') ? '#about' : url('/#about') }}">Tentang</a>
        </nav>
    </div>
</dialog>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggle = document.getElementById('mobile-menu-toggle');
        const dialog = document.getElementById('mobile-menu');
        const closeButton = dialog?.querySelector('[data-menu-close]');

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
        dialog.addEventListener('close', syncState);
        dialog.addEventListener('click', (event) => {
            if (event.target === dialog) dialog.close();
        });
        dialog.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => dialog.close());
        });
    });
</script>
