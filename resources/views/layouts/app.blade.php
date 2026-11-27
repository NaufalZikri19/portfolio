<!DOCTYPE html>
<html class="dark scroll-smooth" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Naufal Zikri Hilmy — Portofolio Spesialis Sistem Informasi & Web Developer</title>
    <meta name="description" content="Portofolio resmi Naufal Zikri Hilmy. Lulusan S1 Sistem Informasi Universitas Telkom Purwokerto (IPK 3.82) dan BNSP Certified Web Developer." />

    <!-- Google Fonts: Montserrat (Headlines), Inter (Body) & Geist Mono (Code/Numbers) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@400;500;600&family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet" />

    <!-- Material Symbols for essential UI icons (menu, navigation) -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Tailwind Theme Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        background: "#08090c",
                        surface: "#0f1117",
                        "surface-raised": "#161922",
                        "surface-active": "#1e222e",
                        border: "#1c202a",
                        "border-muted": "#161922",
                        "border-light": "#282d3b",
                        accent: "#9bb8ff",
                        "accent-hover": "#b3c8ff",
                        "on-accent": "#080d18",
                        "on-surface": "#f8fafc",
                        "on-surface-variant": "#94a3b8",
                        "on-surface-subtle": "#64748b",
                        error: "#ef4444"
                    },
                    borderRadius: {
                        xs: "2px",
                        sm: "4px",
                        DEFAULT: "6px",
                        md: "6px",
                        lg: "8px",
                        xl: "12px",
                        "2xl": "16px",
                        full: "9999px"
                    },
                    spacing: {
                        gutter: "2rem",
                        "container-max": "1200px",
                        "section-gap": "6.5rem"
                    },
                    fontFamily: {
                        "headline-md": ["Montserrat", "sans-serif"],
                        "body-md": ["Inter", "sans-serif"],
                        "label-mono": ["Geist Mono", "monospace"]
                    }
                }
            }
        }
    </script>

    <style>
        /* Minimal Clean Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #08090c;
        }
        ::-webkit-scrollbar-thumb {
            background: #1c202a;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #282d3b;
        }

        /* Selection & Caret */
        ::selection {
            background-color: #9bb8ff;
            color: #080d18;
        }
        input, textarea {
            caret-color: #9bb8ff;
        }

        /* Accessibility focus state */
        :where(a, button, input, textarea, select, [tabindex]):focus-visible {
            outline: 2px solid #9bb8ff;
            outline-offset: 2px;
        }

        /* Minimal Lenis Smooth Scroll */
        html.lenis, html.lenis body {
            height: auto;
        }
        .lenis.lenis-smooth {
            scroll-behavior: auto !important;
        }
        .lenis.lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }
        .lenis.lenis-stopped {
            overflow: hidden;
        }

        /* Motion Progressive Enhancement */
        .motion-ready .reveal-up {
            opacity: 0;
            transform: translateY(14px);
            transition: opacity 500ms cubic-bezier(0.16, 1, 0.3, 1), transform 500ms cubic-bezier(0.16, 1, 0.3, 1);
        }
        .motion-ready .reveal-up.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (prefers-reduced-motion: reduce) {
            .motion-ready .reveal-up,
            .motion-ready .reveal-up.is-visible {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }
    </style>

    <!-- Lenis & GSAP CDN Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/lenis@1.1.20/dist/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
</head>

<body class="bg-background text-on-surface font-body-md overflow-x-hidden antialiased pb-16 md:pb-0">
    @include('components.navbar')
    <main>
        @yield('content')
    </main>
    @include('components.footer')

    <!-- Lenis, GSAP, Desktop Collapse-to-Logo & Mobile Bottom Tab Interactive Controller -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const hero = document.getElementById('hero');
            const pillContainer = document.getElementById('desktop-pill-container');
            const brandToggle = document.getElementById('nav-brand-toggle');
            const expandHint = document.getElementById('nav-expand-hint');
            const collapsibleWrapper = document.getElementById('nav-collapsible-wrapper');
            const manualCloseBtn = document.getElementById('nav-manual-close');
            const indicatorPill = document.getElementById('nav-indicator-pill');
            const desktopNavLinks = document.querySelectorAll('#desktop-nav .nav-item');
            const mobileTabLinks = document.querySelectorAll('#mobile-tab-bar .mobile-tab-link');

            // ------------------------------------------------------------------
            // 1. Desktop Collapse-to-Logo State & Animation Controller
            // ------------------------------------------------------------------
            let isDesktop = window.innerWidth >= 768;
            let isPastHero = false;
            let isManualExpanded = false;

            const getHeroThreshold = () => {
                if (!hero) return 240;
                return Math.max(hero.offsetHeight * 0.7, 260);
            };

            const updateDesktopCollapseState = (forceInstant = false) => {
                if (!isDesktop || !collapsibleWrapper || !pillContainer) return;

                const shouldCollapse = isPastHero && !isManualExpanded;
                const duration = (prefersReducedMotion || forceInstant) ? 0 : 0.32;

                if (shouldCollapse) {
                    // Collapsed state: shrink to website logo badge
                    brandToggle?.setAttribute('aria-expanded', 'false');
                    if (expandHint) {
                        expandHint.classList.remove('hidden');
                        expandHint.classList.add('inline-flex');
                    }
                    if (manualCloseBtn) {
                        manualCloseBtn.classList.add('hidden');
                        manualCloseBtn.classList.remove('inline-flex');
                    }

                    gsap.to(collapsibleWrapper, {
                        width: 0,
                        opacity: 0,
                        duration: duration,
                        ease: "power2.inOut",
                        overwrite: "auto",
                        onComplete: () => {
                            if (shouldCollapse) collapsibleWrapper.style.pointerEvents = 'none';
                        }
                    });
                } else {
                    // Expanded state: show full floating navigation pill
                    brandToggle?.setAttribute('aria-expanded', 'true');
                    collapsibleWrapper.style.pointerEvents = 'auto';
                    if (expandHint) {
                        expandHint.classList.add('hidden');
                        expandHint.classList.remove('inline-flex');
                    }

                    // Show close button only if user manually expanded while scrolled past hero
                    if (manualCloseBtn) {
                        if (isPastHero && isManualExpanded) {
                            manualCloseBtn.classList.remove('hidden');
                            manualCloseBtn.classList.add('inline-flex');
                        } else {
                            manualCloseBtn.classList.add('hidden');
                            manualCloseBtn.classList.remove('inline-flex');
                        }
                    }

                    gsap.to(collapsibleWrapper, {
                        width: "auto",
                        opacity: 1,
                        duration: duration,
                        ease: "power2.out",
                        overwrite: "auto",
                        onComplete: () => {
                            // Refresh indicator pill width/position once expanded
                            if (currentActiveSection) {
                                const activeLink = document.querySelector(`#desktop-nav .nav-item[data-section="${currentActiveSection}"]`);
                                if (activeLink) updateActiveDesktopPill(activeLink);
                            }
                        }
                    });
                }
            };

            // Click brand logo to toggle expand/collapse when past hero
            if (brandToggle) {
                brandToggle.addEventListener('click', (e) => {
                    if (!isDesktop) return;

                    if (isPastHero) {
                        isManualExpanded = !isManualExpanded;
                        updateDesktopCollapseState();
                    } else {
                        // At top of hero: scroll to top
                        if (typeof lenis !== 'undefined' && lenis) {
                            lenis.scrollTo(0, { duration: 1.0 });
                        } else {
                            window.scrollTo({ top: 0, behavior: 'smooth' });
                        }
                    }
                });
            }

            // Close button when manually expanded past hero
            if (manualCloseBtn) {
                manualCloseBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    isManualExpanded = false;
                    updateDesktopCollapseState();
                });
            }

            // Clicking outside collapses it back
            document.addEventListener('click', (e) => {
                if (isDesktop && isPastHero && isManualExpanded && pillContainer) {
                    if (!pillContainer.contains(e.target)) {
                        isManualExpanded = false;
                        updateDesktopCollapseState();
                    }
                }
            });

            // Escape key to close
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && isDesktop && isPastHero && isManualExpanded) {
                    isManualExpanded = false;
                    updateDesktopCollapseState();
                }
            });

            // Nav link click collapses menu if past hero
            desktopNavLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (isDesktop && isPastHero) {
                        isManualExpanded = false;
                        updateDesktopCollapseState();
                    }
                });
            });

            const checkHeroScroll = (scrollY) => {
                if (!isDesktop) return;
                const threshold = getHeroThreshold();
                const nowPastHero = scrollY > threshold;

                if (nowPastHero !== isPastHero) {
                    isPastHero = nowPastHero;
                    if (!isPastHero) {
                        // Returned back up to hero: automatically expand and reset manual state
                        isManualExpanded = false;
                    }
                    updateDesktopCollapseState();
                }
            };

            // ------------------------------------------------------------------
            // 2. Active Section Scroll Spy (Desktop Pill & Mobile Bottom Tabs)
            // ------------------------------------------------------------------
            let currentActiveSection = null;

            const updateActiveDesktopPill = (targetLink) => {
                if (!indicatorPill || !targetLink) return;
                const targetLeft = targetLink.offsetLeft;
                const targetWidth = targetLink.offsetWidth;

                gsap.to(indicatorPill, {
                    x: targetLeft,
                    width: targetWidth,
                    opacity: 1,
                    duration: prefersReducedMotion ? 0 : 0.28,
                    ease: 'power2.out',
                    overwrite: 'auto'
                });
            };

            const updateScrollSpy = (scrollY) => {
                if (!hero) return;

                const scrollTarget = scrollY + 200;
                const docHeight = document.documentElement.scrollHeight;
                const winHeight = window.innerHeight;
                let detectedSection = 'hero';

                if (scrollY + winHeight >= docHeight - 80) {
                    detectedSection = 'contact';
                } else if (scrollY < 180) {
                    detectedSection = 'hero';
                } else {
                    for (const id of ['about', 'experience', 'projects', 'techstack', 'services', 'contact']) {
                        const el = document.getElementById(id);
                        if (el) {
                            const top = el.offsetTop;
                            const height = el.offsetHeight;
                            if (scrollTarget >= top && scrollTarget < top + height) {
                                detectedSection = id;
                                break;
                            }
                        }
                    }
                    if (detectedSection === 'hero') {
                        const processEl = document.getElementById('process');
                        if (processEl) {
                            const top = processEl.offsetTop;
                            const height = processEl.offsetHeight;
                            if (scrollTarget >= top && scrollTarget < top + height) {
                                detectedSection = 'services';
                            }
                        }
                    }
                }

                if (detectedSection !== currentActiveSection) {
                    currentActiveSection = detectedSection;

                    // Update Desktop Nav
                    let matchedDesktopLink = null;
                    desktopNavLinks.forEach(link => {
                        if (link.getAttribute('data-section') === currentActiveSection) {
                            matchedDesktopLink = link;
                            link.classList.add('text-accent', 'font-semibold');
                            link.classList.remove('text-on-surface-variant');
                        } else {
                            link.classList.remove('text-accent', 'font-semibold');
                            link.classList.add('text-on-surface-variant');
                        }
                    });

                    if (matchedDesktopLink) {
                        updateActiveDesktopPill(matchedDesktopLink);
                    } else if (indicatorPill) {
                        gsap.to(indicatorPill, { opacity: 0, duration: 0.2, overwrite: 'auto' });
                    }

                    // Update Mobile Bottom Tab Bar Items
                    mobileTabLinks.forEach(link => {
                        const linkSection = link.getAttribute('data-section');
                        const isMatch = (linkSection === currentActiveSection) ||
                            (linkSection === 'about' && currentActiveSection === 'experience') ||
                            (linkSection === 'techstack' && currentActiveSection === 'services');

                        if (isMatch) {
                            link.classList.add('text-accent', 'font-semibold');
                            link.classList.remove('text-on-surface-subtle');
                        } else {
                            link.classList.remove('text-accent', 'font-semibold');
                            link.classList.add('text-on-surface-subtle');
                        }
                    });
                }
            };

            window.addEventListener('resize', () => {
                isDesktop = window.innerWidth >= 768;
                if (currentActiveSection) {
                    const activeLink = document.querySelector(`#desktop-nav .nav-item[data-section="${currentActiveSection}"]`);
                    if (activeLink) updateActiveDesktopPill(activeLink);
                }
                if (isDesktop) {
                    updateDesktopCollapseState(true);
                }
            }, { passive: true });

            // ------------------------------------------------------------------
            // 3. Lenis Smooth Scroll & Navigation Link Interception
            // ------------------------------------------------------------------
            const handleScroll = (scrollY) => {
                checkHeroScroll(scrollY);
                updateScrollSpy(scrollY);
            };

            if (prefersReducedMotion) {
                window.addEventListener('scroll', () => handleScroll(window.scrollY), { passive: true });
                document.querySelectorAll('.reveal-up').forEach(el => el.classList.add('is-visible'));
                handleScroll(window.scrollY);
                return;
            }

            let lenis = null;
            if (typeof Lenis !== 'undefined') {
                lenis = new Lenis({
                    duration: 1.0,
                    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                    orientation: 'vertical',
                    gestureOrientation: 'vertical',
                    smoothWheel: true,
                    wheelMultiplier: 1,
                    touchMultiplier: 1.2,
                });

                lenis.on('scroll', ({ scroll }) => {
                    handleScroll(scroll);
                });

                if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                    gsap.registerPlugin(ScrollTrigger);
                    lenis.on('scroll', ScrollTrigger.update);
                    gsap.ticker.add((time) => {
                        lenis.raf(time * 1000);
                    });
                    gsap.ticker.lagSmoothing(0);
                } else {
                    function raf(time) {
                        lenis.raf(time);
                        requestAnimationFrame(raf);
                    }
                    requestAnimationFrame(raf);
                }

                // Smooth scroll for anchor links
                document.querySelectorAll('a[href*="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        const href = this.getAttribute('href');
                        const hashIndex = href.indexOf('#');
                        if (hashIndex !== -1) {
                            const hash = href.substring(hashIndex);
                            if (hash && hash !== '#') {
                                const targetEl = document.querySelector(hash);
                                if (targetEl) {
                                    e.preventDefault();
                                    const offset = window.innerWidth >= 768 ? -76 : -30;
                                    lenis.scrollTo(targetEl, { offset, duration: 1.0 });
                                }
                            }
                        }
                    });
                });
            } else {
                window.addEventListener('scroll', () => handleScroll(window.scrollY), { passive: true });
            }

            // Initial Scroll Check
            handleScroll(window.scrollY);

            // ------------------------------------------------------------------
            // 4. GSAP Content Scroll Animations
            // ------------------------------------------------------------------
            if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);

                const heroElements = document.querySelectorAll('#hero .reveal-up');
                if (heroElements.length > 0) {
                    gsap.fromTo(heroElements,
                        { autoAlpha: 0, y: 12 },
                        {
                            autoAlpha: 1,
                            y: 0,
                            duration: 0.5,
                            stagger: { amount: 0.1 },
                            ease: "power2.out",
                            overwrite: 'auto',
                            onComplete: () => gsap.set(heroElements, { clearProps: 'opacity,visibility,transform' })
                        }
                    );
                }

                const sections = document.querySelectorAll('#about, #experience, #projects, #techstack, #services, #process, #contact');
                sections.forEach(section => {
                    const elements = section.querySelectorAll('.reveal-up');
                    if (elements.length > 0) {
                        gsap.fromTo(elements,
                            { autoAlpha: 0, y: 14 },
                            {
                                autoAlpha: 1,
                                y: 0,
                                duration: 0.5,
                                stagger: { amount: Math.min(0.15, elements.length * 0.04) },
                                ease: "power2.out",
                                overwrite: 'auto',
                                scrollTrigger: {
                                    trigger: section,
                                    start: "top 84%",
                                    toggleActions: "play none none none",
                                    once: true
                                },
                                onComplete: () => gsap.set(elements, { clearProps: 'opacity,visibility,transform' })
                            }
                        );
                    }
                });

                window.addEventListener('load', () => ScrollTrigger.refresh(), { once: true });
            } else {
                const revealItems = document.querySelectorAll('.reveal-up');
                if ('IntersectionObserver' in window) {
                    document.documentElement.classList.add('motion-ready');
                    const revealObserver = new IntersectionObserver((entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('is-visible');
                                observer.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.1,
                        rootMargin: '0px 0px -30px 0px'
                    });
                    revealItems.forEach(el => revealObserver.observe(el));
                } else {
                    revealItems.forEach(el => el.classList.add('is-visible'));
                }
            }
        });
    </script>
</body>

</html>
