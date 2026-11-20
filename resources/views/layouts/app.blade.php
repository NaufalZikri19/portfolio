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
                input, textarea {
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
                        0% { transform: translateX(0%); }
                        100% { transform: translateX(-50%); }
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
                .crosshair::before, .crosshair::after {
                        content: '+';
                        position: absolute;
                        font-family: 'Geist Mono', monospace;
                        font-size: 12px;
                        color: #2d3545;
                        line-height: 1;
                        pointer-events: none;
                }
                .crosshair::before { top: -6px; left: -5px; }
                .crosshair::after { bottom: -6px; right: -5px; }

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
                        html { scroll-behavior: auto; }
                }

                :where(a, button, input, textarea, select, [tabindex]):focus-visible {
                        outline: 2px solid #9bb8ff;
                        outline-offset: 3px;
                }

                .hero-editorial-bg {
                        background-image:
                                radial-gradient(ellipse 32% 34% at 2% 96%, rgba(108, 45, 190, 0.78) 0%, rgba(74, 38, 153, 0.38) 48%, transparent 100%),
                                radial-gradient(ellipse 54% 82% at 96% 0%, rgba(34, 103, 172, 0.78) 0%, rgba(16, 60, 111, 0.5) 48%, transparent 100%),
                                linear-gradient(112deg, #041126 0%, #061a34 58%, #06162a 100%);
                }

                .hero-reference-grid {
                        display: grid;
                        grid-template-columns: minmax(0, 1fr);
                        align-items: center;
                        gap: 2rem;
                }

                @media (min-width: 1280px) {
                        .hero-reference-grid {
                                grid-template-columns: minmax(0, 0.92fr) minmax(21rem, 1.08fr) minmax(9rem, 0.5fr);
                                gap: 2rem;
                        }
                }

                @media (min-width: 1536px) {
                        .hero-reference-grid {
                                gap: 3rem;
                        }
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
                                opacity: 1;
                                transform: none;
                                transition: none;
                        }
                }
        </style>
</head>

<body
        class="bg-background text-on-surface font-body-md overflow-x-hidden selection:bg-accent selection:text-on-accent antialiased">
        @include('components.navbar')
        <main>
                @yield('content')
        </main>
        @include('components.footer')
        <!-- Interactive script for header blur effect on scroll -->
        <script>
                window.addEventListener('scroll', () => {
                        const nav = document.getElementById('navbar');
                        if (window.scrollY > 20) {
                                nav.classList.add('shadow-md', 'bg-surface/80');
                                nav.classList.remove('bg-surface/60');
                        } else {
                                nav.classList.remove('shadow-md', 'bg-surface/80');
                                nav.classList.add('bg-surface/60');
                        }
                });

                // Reveal content when it enters view, while preserving a no-JS fallback.
                const revealItems = document.querySelectorAll('.reveal-up');
                const motionPreference = window.matchMedia('(prefers-reduced-motion: reduce)');

                if (motionPreference.matches || !('IntersectionObserver' in window)) {
                        revealItems.forEach(el => el.classList.add('is-visible'));
                } else {
                        document.documentElement.classList.add('motion-ready');
                        const revealObserver = new IntersectionObserver((entries, observer) => {
                                entries.forEach(entry => {
                                        if (entry.isIntersecting) {
                                                entry.target.classList.add('is-visible');
                                                observer.unobserve(entry.target);
                                        }
                                });
                        }, {
                                threshold: 0.12,
                                rootMargin: '0px 0px -40px 0px'
                        });

                        revealItems.forEach(el => revealObserver.observe(el));
                }
        </script>
</body>

</html>
