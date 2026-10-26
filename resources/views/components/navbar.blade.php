<!-- TopNavBar (From JSON) -->
<header
    class="fixed top-0 w-full z-50 bg-surface/60 backdrop-blur-md border-b border-white/5 shadow-sm transition-all duration-300"
    id="navbar">
    <div class="relative flex justify-between items-center max-w-container-max mx-auto px-gutter h-20">
        <!-- Brand -->
        <a class="font-display-sm text-2xl font-bold text-on-surface hover:text-primary transition-colors flex items-center z-10"
            href="#">
            NZH<span class="text-primary">.</span>
        </a>
        <!-- Navigation Links (Desktop) - Centered Exactly -->
        <nav id="desktop-nav"
            class="hidden lg:flex absolute left-1/2 -translate-x-1/2 items-center bg-surface-container/30 px-2 py-1.5 rounded-full border border-white/5 z-10">

            @if(request()->is('/'))
                <!-- Sliding Active Indicator -->
                <div id="nav-indicator"
                    class="absolute h-9 bg-surface-bright/80 rounded-full transition-all duration-300 ease-out z-0 opacity-0">
                </div>

                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-primary font-semibold font-body-md text-xs xl:text-sm whitespace-nowrap transition-colors duration-300"
                    href="#">Beranda</a>
                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-on-surface-variant font-body-md text-xs xl:text-sm whitespace-nowrap hover:text-primary transition-colors duration-300"
                    href="#about">Tentang</a>
                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-on-surface-variant font-body-md text-xs xl:text-sm whitespace-nowrap hover:text-primary transition-colors duration-300"
                    href="#experience">Pengalaman</a>
                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-on-surface-variant font-body-md text-xs xl:text-sm whitespace-nowrap hover:text-primary transition-colors duration-300"
                    href="#projects">Proyek</a>
                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-on-surface-variant font-body-md text-xs xl:text-sm whitespace-nowrap hover:text-primary transition-colors duration-300"
                    href="#techstack">Tech Stack</a>
                <a class="nav-link relative z-10 px-4 xl:px-5 py-1.5 text-on-surface-variant font-body-md text-xs xl:text-sm whitespace-nowrap hover:text-primary transition-colors duration-300"
                    href="#services">Layanan</a>
            @else
                <a class="relative z-10 px-6 py-1.5 text-on-surface-variant font-body-md hover:text-primary transition-colors duration-300 flex items-center gap-2"
                    href="{{ url('/') }}">
                    <span class="material-symbols-outlined text-sm">arrow_back</span> Kembali ke Portofolio
                </a>
            @endif
        </nav>
        <!-- Trailing Action & Mobile Menu Toggle -->
        <div class="flex items-center z-10">
            <div class="hidden lg:block">
                <a class="inline-flex items-center justify-center px-6 py-2.5 rounded-full bg-primary text-on-primary font-body-md font-bold hover:opacity-90 hover:scale-95 transition-all duration-300"
                    href="{{ request()->is('/') ? '#contact' : url('/#contact') }}">
                    Hubungi Saya
                </a>
            </div>
            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-toggle"
                class="lg:hidden text-on-surface hover:text-primary transition-colors relative w-10 h-10 flex items-center justify-center rounded-xl bg-surface-bright/40 border border-white/5 focus:outline-none">
                <span class="material-symbols-outlined text-2xl">menu</span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu"
    class="fixed inset-0 bg-black/95 backdrop-blur-xl z-40 flex flex-col justify-center items-center gap-5 p-6 overflow-y-auto opacity-0 pointer-events-none transition-all duration-300 lg:hidden">
    @if(request()->is('/'))
        <a class="mobile-nav-link text-lg text-on-surface hover:text-primary font-headline-md transition-colors py-1.5 px-4 rounded-full"
            href="#">Beranda</a>
        <a class="mobile-nav-link text-lg text-on-surface hover:text-primary font-headline-md transition-colors py-1.5 px-4 rounded-full"
            href="#about">Tentang Saya</a>
        <a class="mobile-nav-link text-lg text-on-surface hover:text-primary font-headline-md transition-colors py-1.5 px-4 rounded-full"
            href="#experience">Pengalaman &amp; Edukasi</a>
        <a class="mobile-nav-link text-lg text-on-surface hover:text-primary font-headline-md transition-colors py-1.5 px-4 rounded-full"
            href="#projects">Karya Proyek</a>
        <a class="mobile-nav-link text-lg text-on-surface hover:text-primary font-headline-md transition-colors py-1.5 px-4 rounded-full"
            href="#techstack">Tech Stack</a>
        <a class="mobile-nav-link text-lg text-on-surface hover:text-primary font-headline-md transition-colors py-1.5 px-4 rounded-full"
            href="#services">Layanan</a>
        <a class="inline-flex mt-3 items-center justify-center px-8 py-3 rounded-full bg-primary text-on-primary font-body-md font-bold hover:opacity-90 transition-all duration-300 mobile-nav-link shadow-lg shadow-primary/20"
            href="#contact">
            Hubungi Saya
        </a>
    @else
        <a class="mobile-nav-link text-xl text-on-surface hover:text-primary font-headline-md transition-colors flex items-center gap-2"
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