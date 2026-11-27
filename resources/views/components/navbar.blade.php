<!-- Desktop Floating Pill Navbar (Collapsible into Logo on Scroll) -->
<header id="navbar"
    class="hidden md:flex fixed top-4 sm:top-5 left-1/2 -translate-x-1/2 z-50 pointer-events-none transition-all duration-300">
    <div id="desktop-pill-container"
        class="pointer-events-auto relative flex items-center rounded-full bg-[#0f1117]/90 backdrop-blur-md border border-[#1c202a] shadow-[0_8px_30px_rgba(0,0,0,0.5)] p-1.5 transition-colors duration-300">

        <!-- Brand Logo Toggle (Always visible; toggles menu when collapsed past hero) -->
        <button id="nav-brand-toggle" type="button" aria-label="Naufal Zikri Hilmy, navigasi utama"
            class="group flex items-center gap-2 px-3.5 py-1.5 rounded-full font-headline-md text-xs sm:text-sm font-bold tracking-tight text-white hover:text-accent transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent whitespace-nowrap cursor-pointer">
            <span>NAUFAL ZIKRI HILMY</span><span class="text-accent ml-0.5">.</span>
            <span id="nav-expand-hint"
                class="hidden items-center font-label-mono text-[10px] text-accent font-medium px-2 py-0.5 rounded-full bg-[#161922] border border-accent/30 tracking-wider">
                Menu
            </span>
        </button>

        <!-- Collapsible Content (Navigation links + Contact CTA + Close toggle) -->
        <div id="nav-collapsible-wrapper" class="flex items-center gap-3 sm:gap-4 overflow-hidden pr-1">
            <!-- Desktop Navigation Links -->
            <nav id="desktop-nav" aria-label="Navigasi utama"
                class="flex items-center relative p-0.5 rounded-full bg-[#161922]/70 border border-[#1c202a]">
                <!-- Animated Sliding Active Pill Background -->
                <div id="nav-indicator-pill"
                    class="absolute h-[calc(100%-6px)] top-[3px] rounded-full bg-[#1e222e] border border-[#282d3b] pointer-events-none opacity-0"
                    style="left: 0; width: 0;">
                </div>

                <a class="nav-item relative z-10 px-3.5 py-1.5 rounded-full text-xs font-label-mono text-on-surface-variant transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                    data-section="about" href="{{ request()->is('/') ? '#about' : url('/#about') }}">Tentang</a>
                <a class="nav-item relative z-10 px-3.5 py-1.5 rounded-full text-xs font-label-mono text-on-surface-variant transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                    data-section="experience"
                    href="{{ request()->is('/') ? '#experience' : url('/#experience') }}">Pengalaman</a>
                <a class="nav-item relative z-10 px-3.5 py-1.5 rounded-full text-xs font-label-mono text-on-surface-variant transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                    data-section="projects" href="{{ request()->is('/') ? '#projects' : url('/#projects') }}">Projek</a>
                <a class="nav-item relative z-10 px-3.5 py-1.5 rounded-full text-xs font-label-mono text-on-surface-variant transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                    data-section="techstack"
                    href="{{ request()->is('/') ? '#techstack' : url('/#techstack') }}">Keahlian</a>
                <a class="nav-item relative z-10 px-3.5 py-1.5 rounded-full text-xs font-label-mono text-on-surface-variant transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent"
                    data-section="services" href="{{ request()->is('/') ? '#services' : url('/#services') }}">Layanan</a>
            </nav>

            <!-- Compact Contact Action -->
            <a href="{{ request()->is('/') ? '#contact' : url('/#contact') }}"
                class="min-h-[34px] inline-flex items-center justify-center px-4 py-1.5 rounded-full bg-accent text-on-accent font-body-md font-semibold text-xs tracking-wide hover:bg-accent-hover transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent whitespace-nowrap">
                Hubungi Saya
            </a>

            <!-- Close Button (Visible only when manually expanded past hero) -->
            <button id="nav-manual-close" type="button" aria-label="Tutup menu navigasi" title="Tutup menu"
                class="hidden items-center justify-center w-7 h-7 rounded-full text-on-surface-subtle hover:text-white hover:bg-[#161922] transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent">
                <span class="material-symbols-outlined text-[16px] leading-none" aria-hidden="true">close</span>
            </button>
        </div>

    </div>
</header>

<!-- Mobile Bottom Tab Bar (Fixed Bottom Navigation with Safe Area Support) -->
<nav id="mobile-tab-bar" aria-label="Navigasi bawah mobile"
    class="md:hidden fixed bottom-0 inset-x-0 z-50 bg-[#08090c]/90 backdrop-blur-md border-t border-[#1c202a] px-2 pt-1.5 pb-[calc(0.4rem+env(safe-area-inset-bottom,0px))] shadow-[0_-4px_24px_rgba(0,0,0,0.5)]">
    <div class="grid grid-cols-5 items-center justify-around max-w-md mx-auto">

        <!-- Tab 1: Beranda -->
        <a href="{{ request()->is('/') ? '#hero' : url('/#hero') }}" data-section="hero"
            class="mobile-tab-link flex flex-col items-center justify-center py-1 px-1 rounded-lg text-on-surface-subtle hover:text-white transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-accent">
            <span class="material-symbols-outlined text-[20px] leading-none mb-0.5" aria-hidden="true">home</span>
            <span class="text-[10px] font-label-mono leading-tight tracking-tight">Beranda</span>
        </a>

        <!-- Tab 2: Tentang -->
        <a href="{{ request()->is('/') ? '#about' : url('/#about') }}" data-section="about"
            class="mobile-tab-link flex flex-col items-center justify-center py-1 px-1 rounded-lg text-on-surface-subtle hover:text-white transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-accent">
            <span class="material-symbols-outlined text-[20px] leading-none mb-0.5" aria-hidden="true">person</span>
            <span class="text-[10px] font-label-mono leading-tight tracking-tight">Tentang</span>
        </a>

        <!-- Tab 3: Projek -->
        <a href="{{ request()->is('/') ? '#projects' : url('/#projects') }}" data-section="projects"
            class="mobile-tab-link flex flex-col items-center justify-center py-1 px-1 rounded-lg text-on-surface-subtle hover:text-white transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-accent">
            <span class="material-symbols-outlined text-[20px] leading-none mb-0.5" aria-hidden="true">layers</span>
            <span class="text-[10px] font-label-mono leading-tight tracking-tight">Projek</span>
        </a>

        <!-- Tab 4: Keahlian -->
        <a href="{{ request()->is('/') ? '#techstack' : url('/#techstack') }}" data-section="techstack"
            class="mobile-tab-link flex flex-col items-center justify-center py-1 px-1 rounded-lg text-on-surface-subtle hover:text-white transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-accent">
            <span class="material-symbols-outlined text-[20px] leading-none mb-0.5" aria-hidden="true">terminal</span>
            <span class="text-[10px] font-label-mono leading-tight tracking-tight">Keahlian</span>
        </a>

        <!-- Tab 5: Kontak -->
        <a href="{{ request()->is('/') ? '#contact' : url('/#contact') }}" data-section="contact"
            class="mobile-tab-link flex flex-col items-center justify-center py-1 px-1 rounded-lg text-on-surface-subtle hover:text-white transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-accent">
            <span class="material-symbols-outlined text-[20px] leading-none mb-0.5" aria-hidden="true">chat_bubble</span>
            <span class="text-[10px] font-label-mono leading-tight tracking-tight">Kontak</span>
        </a>

    </div>
</nav>
