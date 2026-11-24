<!DOCTYPE html>

<html class="dark scroll-smooth" lang="id">

<head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Naufal Zikri Hilmy | Portofolio Developer</title>
        <!-- Material Symbols -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
                rel="stylesheet" />
        <!-- Google Fonts: Montserrat (Headlines) & Inter (Body) & Geist Mono / Space Grotesk -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap"
                rel="stylesheet" />
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <!-- Tailwind Theme Config -->
        <script id="tailwind-config">
                tailwind.config = {
                        darkMode: "class",
                        theme: {
                                extend: {
                                        "colors": {
                                                "background": "#060709",
                                                "surface": "#0c0e12",
                                                "surface-dim": "#060709",
                                                "surface-bright": "#13171f",
                                                "surface-variant": "#1a1f2b",
                                                "surface-container": "#0c0e12",
                                                "surface-container-low": "#060709",
                                                "surface-container-high": "#13171f",
                                                "surface-container-highest": "#1a1f2b",
                                                "outline": "#2d3545",
                                                "outline-variant": "#1c222d",
                                                "primary": "#fbf9f4",
                                                "primary-container": "#242833",
                                                "on-primary": "#08090b",
                                                "accent": "#9bb8ff",
                                                "accent-hover": "#b3c8ff",
                                                "on-accent": "#080d18",
                                                "on-primary-container": "#fbf9f4",
                                                "secondary": "#e2ded4",
                                                "on-secondary": "#08090b",
                                                "on-background": "#ffffff",
                                                "on-surface": "#fbf9f4",
                                                "on-surface-variant": "#a1aab8",
                                                "on-surface-subtle": "#7a8699",
                                                "error": "#ef4444",
                                                "on-error": "#ffffff"
                                        },
                                        "borderRadius": {
                                                "DEFAULT": "0.25rem",
                                                "sm": "0.25rem",
                                                "md": "0.5rem",
                                                "lg": "0.75rem",
                                                "xl": "1rem",
                                                "2xl": "1.25rem",
                                                "3xl": "1.5rem",
                                                "full": "9999px"
                                        },
                                        "spacing": {
                                                "margin-mobile": "1.25rem",
                                                "element-gap": "1.5rem",
                                                "gutter": "2rem",
                                                "container-max": "1280px",
                                                "section-gap": "7rem"
                                        },
                                        "fontFamily": {
                                                "headline-md": [
                                                        "Montserrat",
                                                        "sans-serif"
                                                ],
                                                "body-md": [
                                                        "Inter",
                                                        "sans-serif"
                                                ],
                                                "label-mono": [
                                                        "Geist Mono",
                                                        "JetBrains Mono",
                                                        "monospace"
                                                ],
                                                "display-lg": [
                                                        "Montserrat",
                                                        "sans-serif"
                                                ]
                                        }
                                }
                        }
                }
        </script>
        <style>
                /* Dark Editorial Scrollbar & Browser Surface */
                ::-webkit-scrollbar {
                        width: 8px;
                }

                ::-webkit-scrollbar-track {
                        background: #060709;
                }

                ::-webkit-scrollbar-thumb {
                        background: #1c222d;
                        border-radius: 4px;
                }

                ::-webkit-scrollbar-thumb:hover {
                        background: #2d3545;
                }

                /* Text Selection & Caret */
                ::selection {
                        background-color: #9bb8ff;
                        color: #080d18;
                }

                input,
                textarea {
                        caret-color: #fbf9f4;
                }

                /* Dark Editorial Surface Utilities */
                .editorial-panel {
                        background: #0c0e12;
                        border: 1px solid #1c222d;
                        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
                }

                .editorial-panel:hover {
                        border-color: rgba(155, 184, 255, 0.55);
                }

                /* Editorial Marquee Tape */
                @keyframes marquee-scroll {
                        0% {
                                transform: translateX(0%);
                        }

                        100% {
                                transform: translateX(-50%);
                        }
                }

                .animate-marquee {
                        display: flex;
                        width: max-content;
                        animation: marquee-scroll 24s linear infinite;
                }

                .animate-marquee:hover {
                        animation-play-state: paused;
                }

                /* Editorial Corner Crosshair */
                .crosshair {
                        position: relative;
                }

                .crosshair::before,
                .crosshair::after {
                        content: '+';
                        position: absolute;
                        font-family: 'Geist Mono', monospace;
                        font-size: 12px;
                        color: #2d3545;
                        line-height: 1;
                        pointer-events: none;
                }

                .crosshair::before {
                        top: -6px;
                        left: -5px;
                }

                .crosshair::after {
                        bottom: -6px;
                        right: -5px;
                }

                .glass-panel {
                        background: rgba(12, 14, 18, 0.88);
                        backdrop-filter: blur(16px);
                        -webkit-backdrop-filter: blur(16px);
                        border: 1px solid #1c222d;
                        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
                }

                .glass-panel-hover:hover {
                        border-color: rgba(155, 184, 255, 0.55);
                        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.6);
                }

                /* Smooth scrolling */
                html {
                        scroll-behavior: smooth;
                        color-scheme: dark;
                }

                @media (prefers-reduced-motion: reduce) {
                        html {
                                scroll-behavior: auto;
                        }
                }

                :where(a, button, input, textarea, select, [tabindex]):focus-visible {
                        outline: 2px solid #9bb8ff;
                        outline-offset: 3px;
                }

                .hero-editorial-bg {
                        background-color: #060709;
                        background-image:
                                radial-gradient(circle at 85% 15%, rgba(155, 184, 255, 0.08) 0%, transparent 45%),
                                radial-gradient(circle at 10% 90%, rgba(155, 184, 255, 0.04) 0%, transparent 40%),
                                linear-gradient(180deg, #060709 0%, #0a0c10 100%);
                }

                .hero-reference-grid {
                        display: grid;
                        grid-template-columns: minmax(0, 1fr);
                        align-items: center;
                        gap: 2.5rem;
                }

                @media (min-width: 1024px) {
                        .hero-reference-grid {
                                grid-template-columns: minmax(0, 1.05fr) minmax(20rem, 0.95fr);
                                gap: 3rem;
                        }
                }

                @media (min-width: 1536px) {
                        .hero-reference-grid {
                                gap: 5rem;
                        }
                }

                /* Lenis Smooth Scroll Styles */
                html.lenis,
                html.lenis body {
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

                .lenis.lenis-smooth iframe {
                        pointer-events: none;
                }

                /* Scroll reveals are progressive-enhancement: content remains visible without JS. */
                .motion-ready .reveal-up {
                        opacity: 0;
                        transform: translateY(18px);
                        transition: opacity 600ms cubic-bezier(0.16, 1, 0.3, 1), transform 600ms cubic-bezier(0.16, 1, 0.3, 1);
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

<body
        class="bg-background text-on-surface font-body-md overflow-x-hidden selection:bg-accent selection:text-on-accent antialiased">
        @include('components.navbar')
        <main>
                @yield('content')
        </main>
        @include('components.footer')
        <!-- Lenis, GSAP & Interactive Script Orchestration -->
        <script>
                document.addEventListener('DOMContentLoaded', () => {
                        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                        const nav = document.getElementById('navbar');
                        const hero = document.getElementById('hero');
                        const indicatorPill = document.getElementById('nav-indicator-pill');
                        const desktopNavLinks = document.querySelectorAll('#desktop-nav .nav-item');
                        const mobileNavLinks = document.querySelectorAll('#mobile-menu .mobile-nav-item');
                        const trackedSections = ['about', 'experience', 'projects', 'techstack', 'services', 'contact'];

                        // ------------------------------------------------------------------
                        // 1. Navbar Visibility (Hide on Hero, Show when scrolled past Hero)
                        // ------------------------------------------------------------------
                        let isNavVisible = null;
                        const getHeroThreshold = () => {
                                if (!hero) return 0;
                                return Math.max(hero.offsetHeight * 0.65, 260);
                        };

                        const updateNavbarVisibility = (scrollY) => {
                                if (!nav) return;

                                // On subpages without #hero, keep navbar visible at all times
                                if (!hero) {
                                        if (isNavVisible !== true) {
                                                isNavVisible = true;
                                                nav.style.pointerEvents = 'auto';
                                                gsap.set(nav, { y: 0, opacity: 1 });
                                        }
                                        return;
                                }

                                const threshold = getHeroThreshold();

                                if (scrollY > threshold) {
                                        if (isNavVisible !== true) {
                                                isNavVisible = true;
                                                nav.style.pointerEvents = 'auto';
                                                gsap.to(nav, {
                                                        y: 0,
                                                        opacity: 1,
                                                        duration: prefersReducedMotion ? 0 : 0.35,
                                                        ease: 'power2.out',
                                                        overwrite: 'auto'
                                                });
                                        }
                                } else {
                                        if (isNavVisible !== false) {
                                                isNavVisible = false;
                                                gsap.to(nav, {
                                                        y: prefersReducedMotion ? 0 : -24,
                                                        opacity: 0,
                                                        duration: prefersReducedMotion ? 0 : 0.25,
                                                        ease: 'power2.in',
                                                        overwrite: 'auto',
                                                        onComplete: () => {
                                                                nav.style.pointerEvents = 'none';
                                                        }
                                                });
                                        }
                                }
                        };

                        // Initial setup for Navbar Visibility
                        if (hero) {
                                const initialScroll = window.scrollY;
                                const initialThreshold = getHeroThreshold();
                                if (initialScroll <= initialThreshold) {
                                        isNavVisible = false;
                                        nav.style.pointerEvents = 'none';
                                        gsap.set(nav, { y: prefersReducedMotion ? 0 : -24, opacity: 0 });
                                } else {
                                        isNavVisible = true;
                                        nav.style.pointerEvents = 'auto';
                                        gsap.set(nav, { y: 0, opacity: 1 });
                                }
                        } else if (nav) {
                                isNavVisible = true;
                                nav.style.pointerEvents = 'auto';
                                gsap.set(nav, { y: 0, opacity: 1 });
                        }

                        // ------------------------------------------------------------------
                        // 2. Active Section Scroll Spy & Menu Animation
                        // ------------------------------------------------------------------
                        let currentActiveSection = null;

                        const updateActiveMenuPill = (targetLink) => {
                                if (!indicatorPill || !targetLink) return;
                                const targetLeft = targetLink.offsetLeft;
                                const targetWidth = targetLink.offsetWidth;

                                gsap.to(indicatorPill, {
                                        x: targetLeft,
                                        width: targetWidth,
                                        opacity: 1,
                                        duration: prefersReducedMotion ? 0 : 0.32,
                                        ease: 'power2.out',
                                        overwrite: 'auto'
                                });
                        };

                        const updateScrollSpy = (scrollY) => {
                                if (!hero) return;

                                const threshold = getHeroThreshold();
                                let detectedSection = null;

                                // While in hero, no menu item is marked active
                                if (scrollY > threshold) {
                                        const scrollTarget = scrollY + 160;
                                        const docHeight = document.documentElement.scrollHeight;
                                        const winHeight = window.innerHeight;

                                        // Bottom of page: activate contact
                                        if (scrollY + winHeight >= docHeight - 60) {
                                                detectedSection = 'contact';
                                        } else {
                                                for (const id of trackedSections) {
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
                                                // Handle #process continuum section (mapped to 'services')
                                                if (!detectedSection) {
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
                                }

                                if (detectedSection !== currentActiveSection) {
                                        currentActiveSection = detectedSection;

                                        // Animate Desktop Nav Items & Sliding Indicator Pill
                                        if (currentActiveSection) {
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
                                                        updateActiveMenuPill(matchedDesktopLink);
                                                }
                                        } else {
                                                if (indicatorPill) {
                                                        gsap.to(indicatorPill, { opacity: 0, duration: 0.2, overwrite: 'auto' });
                                                }
                                                desktopNavLinks.forEach(link => {
                                                        link.classList.remove('text-accent', 'font-semibold');
                                                        link.classList.add('text-on-surface-variant');
                                                });
                                        }

                                        // Update Mobile Nav Menu Items
                                        mobileNavLinks.forEach(link => {
                                                if (currentActiveSection && link.getAttribute('data-section') === currentActiveSection) {
                                                        link.classList.add('text-accent', 'border-l-4', 'border-accent', 'pl-4');
                                                        link.classList.remove('text-white', 'pl-0', 'border-l-0');
                                                } else {
                                                        link.classList.remove('text-accent', 'border-l-4', 'border-accent', 'pl-4');
                                                        link.classList.add('text-white', 'pl-0', 'border-l-0');
                                                }
                                        });
                                }
                        };

                        // Recalculate on Resize
                        window.addEventListener('resize', () => {
                                if (currentActiveSection) {
                                        const activeLink = document.querySelector(`#desktop-nav .nav-item[data-section="${currentActiveSection}"]`);
                                        if (activeLink) updateActiveMenuPill(activeLink);
                                }
                        }, { passive: true });

                        // ------------------------------------------------------------------
                        // 3. Smooth Scrolling (Lenis) & Scroll Listeners
                        // ------------------------------------------------------------------
                        const handleScroll = (scrollY) => {
                                updateNavbarVisibility(scrollY);
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
                                        duration: 1.1,
                                        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                                        orientation: 'vertical',
                                        gestureOrientation: 'vertical',
                                        smoothWheel: true,
                                        wheelMultiplier: 1,
                                        touchMultiplier: 1.5,
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

                                // Smooth scroll for internal anchor links
                                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                                        anchor.addEventListener('click', function (e) {
                                                const targetId = this.getAttribute('href');
                                                if (targetId && targetId !== '#') {
                                                        const targetEl = document.querySelector(targetId);
                                                        if (targetEl) {
                                                                e.preventDefault();
                                                                lenis.scrollTo(targetEl, { offset: -64, duration: 1.1 });
                                                        }
                                                }
                                        });
                                });
                        } else {
                                window.addEventListener('scroll', () => handleScroll(window.scrollY), { passive: true });
                        }

                        // Run initial scroll check
                        handleScroll(window.scrollY);

                        // ------------------------------------------------------------------
                        // 4. GSAP Content Scroll Animations
                        // ------------------------------------------------------------------
                        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                                gsap.registerPlugin(ScrollTrigger);

                                const heroElements = document.querySelectorAll('#hero .reveal-up');
                                if (heroElements.length > 0) {
                                        gsap.fromTo(heroElements,
                                                { autoAlpha: 0, y: 16 },
                                                {
                                                        autoAlpha: 1,
                                                        y: 0,
                                                        duration: 0.62,
                                                        stagger: { amount: 0.12 },
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
                                                        { autoAlpha: 0, y: 16 },
                                                        {
                                                                autoAlpha: 1,
                                                                y: 0,
                                                                duration: 0.62,
                                                                stagger: { amount: Math.min(0.18, elements.length * 0.05) },
                                                                ease: "power2.out",
                                                                overwrite: 'auto',
                                                                scrollTrigger: {
                                                                        trigger: section,
                                                                        start: "top 82%",
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
                                                rootMargin: '0px 0px -40px 0px'
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
