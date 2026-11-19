<!-- TopNavBar -->
<header
    class="fixed top-0 w-full z-50 bg-[#060709]/90 backdrop-blur-md border-b border-[#1c222d] transition-all duration-300"
    id="navbar">
    <div class="relative flex justify-between items-center max-w-container-max mx-auto px-gutter h-20">
        <!-- Brand & Metadata -->
        <div class="flex items-center gap-3 z-10">
            <a class="font-headline-md text-base sm:text-lg font-black text-white hover:text-primary transition-colors flex items-center tracking-tight uppercase"
                href="{{ url('/') }}">
                NAUFAL ZIKRI HILMY<span class="text-primary text-xl font-black leading-none ml-0.5">.</span>
            </a>
        </div>

        <!-- Navigation Links (Desktop) - Centered Exactly -->
        <nav id="desktop-nav"
            class="hidden lg:flex absolute left-1/2 -translate-x-1/2 items-center bg-[#0c0e12] px-2 py-1.5 rounded-full border border-[#1c222d] z-10">

            @if(request()->is('/'))
                <!-- Sliding Active Indicator -->
                <div id="nav-indicator"
                    class="absolute h-9 bg-[#13171f] border border-[#2d3545] rounded-full transition-all duration-300 ease-out z-0 opacity-0">
                </div>

                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-primary font-semibold font-body-md text-xs xl:text-sm whitespace-nowrap transition-colors duration-200 uppercase tracking-wider"
                    href="#">Beranda</a>
                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-on-surface-variant font-medium font-body-md text-xs xl:text-sm whitespace-nowrap hover:text-white transition-colors duration-200 uppercase tracking-wider"
                    href="#about">Tentang</a>
                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-on-surface-variant font-medium font-body-md text-xs xl:text-sm whitespace-nowrap hover:text-white transition-colors duration-200 uppercase tracking-wider"
                    href="#experience">Pengalaman</a>
                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-on-surface-variant font-medium font-body-md text-xs xl:text-sm whitespace-nowrap hover:text-white transition-colors duration-200 uppercase tracking-wider"
                    href="#projects">Proyek</a>
                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-on-surface-variant font-medium font-body-md text-xs xl:text-sm whitespace-nowrap hover:text-white transition-colors duration-200 uppercase tracking-wider"
                    href="#techstack">Tech Stack</a>
                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-on-surface-variant font-medium font-body-md text-xs xl:text-sm whitespace-nowrap hover:text-white transition-colors duration-200 uppercase tracking-wider"
                    href="#services">Layanan</a>
            @else
                <a class="relative z-10 px-6 py-1.5 text-on-surface-variant font-medium font-body-md hover:text-primary transition-colors duration-200 flex items-center gap-2"
                    href="{{ url('/') }}">
                    <span class="material-symbols-outlined text-sm">arrow_back</span> Kembali ke Portofolio
                </a>
            @endif
        </nav>

        <!-- Trailing Action & Mobile Menu Toggle -->
        <div class="flex items-center gap-3 z-10">
            <div class="hidden lg:block">
                <a class="inline-flex items-center justify-center gap-2 px-6 py-2.5 rounded-full bg-primary text-on-primary font-body-md font-bold text-xs uppercase tracking-wider hover:brightness-110 active:scale-95 transition-all duration-200 shadow-[0_0_20px_rgba(251,249,244,0.12)]"
                    href="{{ request()->is('/') ? '#contact' : url('/#contact') }}">
                    <span>Hubungi Saya</span>
                    <span class="material-symbols-outlined text-sm font-bold">arrow_forward</span>
                </a>
            </div>
            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-toggle" aria-label="Toggle menu"
                class="lg:hidden text-white hover:text-primary transition-colors relative w-11 h-11 flex items-center justify-center rounded-xl bg-[#0c0e12] border border-[#1c222d] hover:border-[#2d3545] focus:outline-none focus-visible:ring-2 focus-visible:ring-primary">
                <span class="material-symbols-outlined text-2xl">menu</span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu"
    class="fixed inset-0 bg-[#060709]/95 backdrop-blur-2xl z-40 flex flex-col justify-center items-center gap-4 p-6 overflow-y-auto opacity-0 pointer-events-none transition-all duration-300 lg:hidden">
    @if(request()->is('/'))
        <a class="mobile-nav-link text-xl text-on-surface hover:text-primary font-headline-md font-semibold transition-colors py-2 px-6 rounded-full"
            href="#">Beranda</a>
        <a class="mobile-nav-link text-xl text-on-surface hover:text-primary font-headline-md font-semibold transition-colors py-2 px-6 rounded-full"
            href="#about">Tentang Saya</a>
        <a class="mobile-nav-link text-xl text-on-surface hover:text-primary font-headline-md font-semibold transition-colors py-2 px-6 rounded-full"
            href="#experience">Pengalaman &amp; Edukasi</a>
        <a class="mobile-nav-link text-xl text-on-surface hover:text-primary font-headline-md font-semibold transition-colors py-2 px-6 rounded-full"
            href="#projects">Karya Proyek</a>
        <a class="mobile-nav-link text-xl text-on-surface hover:text-primary font-headline-md font-semibold transition-colors py-2 px-6 rounded-full"
            href="#techstack">Tech Stack</a>
        <a class="mobile-nav-link text-xl text-on-surface hover:text-primary font-headline-md font-semibold transition-colors py-2 px-6 rounded-full"
            href="#services">Layanan</a>
        <a class="inline-flex mt-4 items-center justify-center gap-2 px-8 py-3.5 rounded-full bg-primary text-on-primary font-body-md font-bold hover:brightness-110 active:scale-95 transition-all duration-200 mobile-nav-link shadow-[0_0_25px_rgba(251,249,244,0.15)] text-base"
            href="#contact">
            <span>Hubungi Saya</span>
            <span class="material-symbols-outlined text-base">arrow_forward</span>
        </a>
    @else
        <a class="mobile-nav-link text-xl text-on-surface hover:text-primary font-headline-md font-semibold transition-colors flex items-center gap-2"
            href="{{ url('/') }}">
            <span class="material-symbols-outlined">arrow_back</span> Kembali ke Portofolio
        </a>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // --- Desktop Navbar Logic ---
        const nav = document.getElementById('desktop-nav');
        if (nav) {
            const links = nav.querySelectorAll('.nav-link');
            const indicator = document.getElementById('nav-indicator');
            let isClicking = false;

            function updateIndicator(activeLink) {
                if (!activeLink) return;

                // Un-hide indicator on first update
                indicator.style.opacity = '1';

                // Set size and position
                indicator.style.width = `${activeLink.offsetWidth}px`;
                indicator.style.left = `${activeLink.offsetLeft}px`;

                // Update text colors
                links.forEach(link => {
                    if (link === activeLink) {
                        link.classList.remove('text-on-surface-variant');
                        link.classList.add('text-primary', 'font-semibold');
                    } else {
                        link.classList.add('text-on-surface-variant');
                        link.classList.remove('text-primary', 'font-semibold');
                    }
                });
            }

            // Initial set based on current hash or just the first link
            let activeLink = links[0];
            const hash = window.location.hash;
            if (hash) {
                const match = Array.from(links).find(l => l.getAttribute('href') === hash);
                if (match) activeLink = match;
            }

            setTimeout(() => updateIndicator(activeLink), 100);

            links.forEach(link => {
                link.addEventListener('click', function (e) {
                    isClicking = true;
                    updateIndicator(this);
                    setTimeout(() => { isClicking = false; }, 800);
                });
            });

            // Handle resize to adjust indicator position
            window.addEventListener('resize', () => {
                const currentActive = Array.from(links).find(l => l.classList.contains('text-primary'));
                if (currentActive) updateIndicator(currentActive);
            });

            // ScrollSpy logic
            const sections = Array.from(links).map(link => {
                const href = link.getAttribute('href');
                if (href === '#') return { id: '#', el: document.body };
                return { id: href, el: document.querySelector(href) };
            }).filter(s => s.el);

            window.addEventListener('scroll', () => {
                if (isClicking) return;

                let currentId = '#';
                const scrollPos = window.scrollY + 200; // offset for the fixed navbar

                sections.forEach(section => {
                    if (section.el === document.body) {
                        if (scrollPos < 300) currentId = '#';
                    } else {
                        if (section.el.offsetTop <= scrollPos) {
                            currentId = section.id;
                        }
                    }
                });

                const currentActiveLink = Array.from(links).find(l => l.classList.contains('text-primary'));
                if (currentActiveLink && currentActiveLink.getAttribute('href') !== currentId) {
                    const newActiveLink = Array.from(links).find(l => l.getAttribute('href') === currentId);
                    if (newActiveLink) updateIndicator(newActiveLink);
                }
            });
        }

        // --- Mobile Menu Logic ---
        const mobileToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');
        const toggleIcon = mobileToggle.querySelector('.material-symbols-outlined');
        let isMobileMenuOpen = false;

        function toggleMobileMenu() {
            isMobileMenuOpen = !isMobileMenuOpen;
            if (isMobileMenuOpen) {
                mobileMenu.classList.remove('opacity-0', 'pointer-events-none');
                mobileMenu.classList.add('opacity-100', 'pointer-events-auto');
                toggleIcon.textContent = 'close';
                document.body.style.overflow = 'hidden'; // Prevent scrolling
            } else {
                mobileMenu.classList.add('opacity-0', 'pointer-events-none');
                mobileMenu.classList.remove('opacity-100', 'pointer-events-auto');
                toggleIcon.textContent = 'menu';
                document.body.style.overflow = '';
            }
        }

        if (mobileToggle) {
            mobileToggle.addEventListener('click', toggleMobileMenu);
        }

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (isMobileMenuOpen) toggleMobileMenu();
            });
        });
    });
</script>