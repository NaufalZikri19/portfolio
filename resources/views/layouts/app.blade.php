<!DOCTYPE html>

<html class="dark scroll-smooth" lang="id">

<head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Naufal Zikri Hilmy | Portofolio Developer</title>
        <!-- Material Symbols -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
                rel="stylesheet" />
        <!-- Google Fonts: Montserrat (Headlines) & Inter (Body) & Geist (Mono) -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Montserrat:wght@600;700;800&amp;display=swap"
                rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Geist:wght@500&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                                                "surface-dim": "#050505",
                                                "on-error": "#ffffff",
                                                "surface-tint": "#00e573",
                                                "surface-bright": "#1a1a1a",
                                                "on-secondary-fixed": "#064e3b",
                                                "error-container": "#7f1d1d",
                                                "on-primary": "#000000",
                                                "error": "#ef4444",
                                                "on-secondary": "#000000",
                                                "surface-variant": "#121212",
                                                "background": "#050505",
                                                "on-primary-fixed": "#022c22",
                                                "outline": "#3f3f46",
                                                "outline-variant": "#27272a",
                                                "inverse-primary": "#10b981",
                                                "surface": "#0a0a0a",
                                                "on-surface-variant": "#a3a3a3",
                                                "inverse-surface": "#f4f4f5",
                                                "on-tertiary-container": "#dcfce7",
                                                "surface-container-low": "#0a0a0a",
                                                "surface-container-high": "#121212",
                                                "surface-container-highest": "#1a1a1a",
                                                "tertiary-fixed": "#bbf7d0",
                                                "secondary": "#10b981",
                                                "tertiary-fixed-dim": "#86efac",
                                                "secondary-fixed": "#d1fae5",
                                                "surface-container": "#0f0f0f",
                                                "on-background": "#ffffff",
                                                "primary-container": "#059669",
                                                "on-tertiary": "#064e3b",
                                                "on-primary-container": "#d1fae5",
                                                "on-tertiary-fixed-variant": "#065f46",
                                                "surface-container-lowest": "#000000",
                                                "on-tertiary-fixed": "#022c22",
                                                "tertiary-container": "#047857",
                                                "primary": "#00e573",
                                                "primary-fixed-dim": "#10b981",
                                                "on-secondary-container": "#d1fae5",
                                                "on-primary-fixed-variant": "#047857",
                                                "on-secondary-fixed-variant": "#065f46",
                                                "primary-fixed": "#a7f3d0",
                                                "inverse-on-surface": "#050505",
                                                "on-error-container": "#fef2f2",
                                                "secondary-fixed-dim": "#34d399",
                                                "tertiary": "#4ade80",
                                                "on-surface": "#ffffff",
                                                "secondary-container": "#047857"
                                        },
                                        "borderRadius": {
                                                "DEFAULT": "0.25rem",
                                                "lg": "0.5rem",
                                                "xl": "0.75rem",
                                                "full": "9999px"
                                        },
                                        "spacing": {
                                                "margin-mobile": "1.5rem",
                                                "element-gap": "1.5rem",
                                                "gutter": "2rem",
                                                "container-max": "1280px",
                                                "section-gap": "8rem"
                                        },
                                        "fontFamily": {
                                                "headline-md": [
                                                        "Montserrat"
                                                ],
                                                "body-md": [
                                                        "Inter"
                                                ],
                                                "label-mono": [
                                                        "Geist"
                                                ],
                                                "display-lg-mobile": [
                                                        "Montserrat"
                                                ],
                                                "body-lg": [
                                                        "Inter"
                                                ],
                                                "display-lg": [
                                                        "Montserrat"
                                                ],
                                                "headline-sm": [
                                                        "Montserrat"
                                                ]
                                        },
                                        "fontSize": {
                                                "headline-md": [
                                                        "32px",
                                                        {
                                                                "lineHeight": "1.3",
                                                                "fontWeight": "700"
                                                        }
                                                ],
                                                "body-md": [
                                                        "16px",
                                                        {
                                                                "lineHeight": "1.6",
                                                                "fontWeight": "400"
                                                        }
                                                ],
                                                "label-mono": [
                                                        "14px",
                                                        {
                                                                "lineHeight": "1.0",
                                                                "letterSpacing": "0.05em",
                                                                "fontWeight": "500"
                                                        }
                                                ],
                                                "display-lg-mobile": [
                                                        "40px",
                                                        {
                                                                "lineHeight": "1.2",
                                                                "letterSpacing": "-0.02em",
                                                                "fontWeight": "800"
                                                        }
                                                ],
                                                "body-lg": [
                                                        "18px",
                                                        {
                                                                "lineHeight": "1.6",
                                                                "fontWeight": "400"
                                                        }
                                                ],
                                                "display-lg": [
                                                        "64px",
                                                        {
                                                                "lineHeight": "1.1",
                                                                "letterSpacing": "-0.04em",
                                                                "fontWeight": "800"
                                                        }
                                                ],
                                                "headline-sm": [
                                                        "24px",
                                                        {
                                                                "lineHeight": "1.4",
                                                                "fontWeight": "600"
                                                        }
                                                ]
                                        }
                                },
                        },
                }
        </script>
        <style>
                /* Minimalist Glassmorphism Utilities */
                .glass-panel {
                        background: rgba(10, 10, 10, 0.8);
                        backdrop-filter: blur(12px);
                        -webkit-backdrop-filter: blur(12px);
                        border: 1px solid rgba(255, 255, 255, 0.03);
                        border-top: 1px solid rgba(255, 255, 255, 0.05);
                        border-left: 1px solid rgba(255, 255, 255, 0.05);
                        transition: all 0.3s ease;
                }

                .glass-panel-hover:hover {
                        border-color: rgba(0, 229, 115, 0.4);
                        box-shadow: 0 0 20px rgba(0, 229, 115, 0.1);
                }

                .text-gradient {
                        background: linear-gradient(to right, #ffffff, #00e573);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        background-clip: text;
                }

                /* Smooth scrolling */
                html {
                        scroll-behavior: smooth;
                }

                /* Scroll Reveal Animation */
                .reveal-up {
                        opacity: 0;
                        transform: translateY(40px);
                        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
                }

                .reveal-up.is-visible {
                        opacity: 1;
                        transform: translateY(0);
                }
        </style>
</head>

<body
        class="bg-background text-on-surface font-body-md overflow-x-hidden selection:bg-primary-container selection:text-on-primary-container">
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

                // Scroll Reveal Logic
                document.addEventListener('DOMContentLoaded', () => {
                        const revealObserver = new IntersectionObserver((entries, observer) => {
                                entries.forEach(entry => {
                                        if (entry.isIntersecting) {
                                                entry.target.classList.add('is-visible');
                                                observer.unobserve(entry.target);
                                        }
                                });
                        }, {
                                threshold: 0.1,
                                rootMargin: "0px 0px -50px 0px"
                        });

                        document.querySelectorAll('.reveal-up').forEach(el => {
                                revealObserver.observe(el);
                        });
                });
        </script>
</body>

</html>