<!-- 1. Hero Section (Dark Editorial / High-Contrast Technical Showcase) -->
<section class="relative min-h-screen flex flex-col justify-center overflow-hidden bg-background pt-28 sm:pt-32 pb-16" id="hero">

    <!-- Subtle canvas particle network -->
    <canvas id="hero-particles" class="absolute inset-0 z-0 w-full h-full pointer-events-none opacity-30"></canvas>

    <!-- Editorial subtle grid background overlay -->
    <div
        class="absolute inset-0 z-0 bg-[linear-gradient(to_right,#1c222d0d_1px,transparent_1px),linear-gradient(to_bottom,#1c222d0d_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_70%_60%_at_50%_30%,#000_70%,transparent_100%)] pointer-events-none">
    </div>

    <!-- Radial vignette (Warm Off-White editorial glow) -->
    <div
        class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_60%_40%_at_50%_20%,rgba(251,249,244,0.03)_0%,transparent_70%)] pointer-events-none">
    </div>

    <div class="max-w-container-max mx-auto px-gutter relative z-10 w-full flex flex-col">

        <!-- Top Editorial Technical Strip -->
        <div id="hero-top-strip"
            class="flex flex-wrap items-center justify-between gap-3 pb-4 mb-8 sm:mb-12 border-b border-[#1c222d] text-xs font-label-mono text-on-surface-subtle opacity-0 translate-y-6 transition-all duration-700"
            style="transition-delay: 100ms;">
            <div class="flex items-center gap-2">
                <span class="text-primary font-black">▪▪</span>
                <span class="text-on-surface font-semibold tracking-wider uppercase">PORTFOLIO // 2026 ED.</span>
                <span class="text-[#2d3545]">•</span>
                <span>PURWOKERTO, INDONESIA</span>
            </div>
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-[#0c0e12] border border-[#1c222d] text-primary text-[11px] font-semibold">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                    OPEN TO WORK (FULL-TIME &amp; MAGANG)
                </span>
                <span class="hidden md:inline text-on-surface-variant font-medium">BNSP CWDev CERTIFIED</span>
            </div>
        </div>

        <!-- Main Asymmetrical Hero Grid (Inspired by Reference) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start mb-12 sm:mb-16">

            <!-- Left Editorial Block (Primary Statement & CTAs) -->
            <div id="hero-left"
                class="lg:col-span-7 flex flex-col text-left opacity-0 translate-y-6 transition-all duration-700"
                style="transition-delay: 250ms;">
                
                <div class="mb-3 flex items-center gap-2">
                    <span class="w-2 h-2 bg-primary inline-block"></span>
                    <span class="font-label-mono text-xs sm:text-sm text-primary uppercase tracking-[0.25em] font-semibold">
                        SISTEM INFORMASI &amp; REKAYASA WEB
                    </span>
                </div>

                <!-- Main Giant Display Headline (Solid White, No Cheap Gradient) -->
                <h1 id="hero-name"
                    class="font-headline-md font-black text-4xl sm:text-6xl md:text-7xl lg:text-7xl uppercase text-white tracking-tight leading-[0.96] mb-5">
                    BUILDING<br />
                    SYSTEMS THAT<br />
                    SCALE.
                </h1>

                <!-- Identity Subheading -->
                <div class="text-xl sm:text-2xl font-headline-md font-bold text-white mb-4">
                    Naufal Zikri Hilmy
                </div>

                <!-- High-contrast Scannable Lead Text -->
                <p id="hero-desc"
                    class="font-body-md text-sm sm:text-base md:text-lg text-on-surface-variant max-w-xl leading-relaxed mb-8">
                    Menjembatani analisis proses bisnis dengan implementasi perangkat lunak end-to-end. Berpengalaman merancang arsitektur aplikasi berbasis <strong class="text-white font-semibold">Laravel &amp; MySQL</strong>, integrasi kecerdasan buatan <strong class="text-white font-semibold">Google Gemini AI</strong>, serta kustomisasi alur <strong class="text-white font-semibold">ERP Odoo</strong>.
                </p>

                <!-- Action CTA Buttons (Clear, High Contrast, Target >= 48px) -->
                <div id="hero-cta" class="flex flex-col sm:flex-row gap-3.5 sm:gap-4 items-stretch sm:items-center">
                    <a class="min-h-[48px] inline-flex items-center justify-center gap-2.5 px-8 py-3.5 rounded-full bg-primary text-on-primary font-body-md font-bold text-sm sm:text-base hover:brightness-110 active:scale-95 transition-all duration-200 shadow-[0_0_25px_rgba(251,249,244,0.15)]"
                        href="#contact">
                        <span>Hubungi Saya</span>
                        <span class="material-symbols-outlined text-lg font-bold">arrow_forward</span>
                    </a>
                    <a class="min-h-[48px] inline-flex items-center justify-center gap-2.5 px-8 py-3.5 rounded-full bg-[#0c0e12] text-white border border-[#2d3545] hover:border-primary hover:text-primary font-body-md font-semibold text-sm sm:text-base active:scale-95 transition-all duration-200"
                        href="#projects">
                        <span>Lihat Proyek Pilihan</span>
                        <span class="material-symbols-outlined text-lg">folder_open</span>
                    </a>
                </div>
            </div>

            <!-- Right Editorial Block (Philosophy & Verified Credential Card) -->
            <div id="hero-right"
                class="lg:col-span-5 flex flex-col lg:items-end text-left lg:text-right opacity-0 translate-y-6 transition-all duration-700"
                style="transition-delay: 400ms;">
                
                <!-- Mission Statement -->
                <div class="mb-6 lg:mb-8">
                    <div class="flex items-center gap-2 lg:justify-end mb-2">
                        <span class="font-label-mono text-xs text-on-surface-subtle tracking-widest uppercase">PHILOSOPHY // 01</span>
                        <span class="w-1.5 h-1.5 bg-white/40"></span>
                    </div>
                    <h2 class="font-headline-md font-extrabold text-2xl sm:text-3xl lg:text-4xl uppercase text-white tracking-tight leading-tight">
                        TURNING<br class="hidden sm:inline" />
                        COMPLEXITY<br class="hidden sm:inline" />
                        INTO CLARITY.
                    </h2>
                </div>

                <!-- Verified Credential Card (Guaranteed 100% Unclipped, Responsive & Scannable) -->
                <div class="w-full max-w-md p-5 sm:p-6 rounded-2xl bg-[#0c0e12] border border-[#1c222d] text-left crosshair shadow-2xl relative">
                    <div class="flex items-center justify-between pb-3 border-b border-[#1c222d] text-xs font-label-mono">
                        <span class="text-primary font-bold flex items-center gap-1.5 uppercase">
                            <span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
                            STATUS TERVERIFIKASI
                        </span>
                        <span class="text-on-surface-subtle uppercase">KREDENSIAL UTAMA</span>
                    </div>

                    <!-- FIXED ROLE LABEL: Completely intact, never clipped, never truncated -->
                    <div class="mt-4">
                        <div class="font-headline-md font-extrabold text-lg sm:text-xl text-white leading-snug break-words">
                            Fresh Graduate S1 Sistem Informasi
                        </div>
                        <div class="font-body-md text-sm text-on-surface-variant mt-1">
                            Universitas Telkom Purwokerto
                        </div>
                    </div>

                    <!-- Detailed Proof Badges & Metrics -->
                    <div class="mt-5 pt-4 border-t border-[#1c222d] flex flex-col gap-2.5 font-label-mono text-xs">
                        <div class="flex items-center justify-between">
                            <span class="text-on-surface-subtle">Indeks Prestasi Kumulatif:</span>
                            <span class="text-primary font-bold text-sm">3.82 (Dengan Pujian)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-on-surface-subtle">Sertifikasi Kompetensi:</span>
                            <span class="text-white font-semibold">BNSP Certified Web Developer (CWDev)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-on-surface-subtle">Proyek Unggulan:</span>
                            <span class="text-white font-medium">GumbregQuickBook &amp; Sirimby</span>
                        </div>
                    </div>

                    <!-- Quick Contact Info -->
                    <div class="mt-4 pt-3 border-t border-[#1c222d]/60 flex items-center justify-between text-[11px] font-label-mono text-on-surface-subtle">
                        <span>WA: 082198487319</span>
                        <span class="text-[#2d3545]">•</span>
                        <span>naufal.zikri19@gmail.com</span>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Editorial Running Marquee Tape (Iconic Element from Reference Image) -->
    <div id="hero-tape"
        class="w-full overflow-hidden border-y border-[#1c222d] bg-[#0c0e12]/90 backdrop-blur-md py-3.5 my-4 opacity-0 translate-y-6 transition-all duration-700"
        style="transition-delay: 550ms;">
        <div class="animate-marquee whitespace-nowrap text-xs sm:text-sm font-label-mono uppercase tracking-[0.2em] text-on-surface-variant">
            <span class="mx-6 flex items-center gap-4">
                <span class="text-primary font-black">▪▪</span> NAUFAL ZIKRI HILMY
                <span class="text-primary font-black">▪▪</span> FRESH GRADUATE S1 SISTEM INFORMASI
                <span class="text-primary font-black">▪▪</span> TELKOM UNIVERSITY PURWOKERTO
                <span class="text-primary font-black">▪▪</span> IPK 3.82 (DENGAN PUJIAN)
                <span class="text-primary font-black">▪▪</span> CERTIFIED WEB DEVELOPER (BNSP CWDev)
                <span class="text-primary font-black">▪▪</span> GUMBREGQUICKBOOK (LARAVEL + GEMINI AI)
                <span class="text-primary font-black">▪▪</span> SIRIMBY (ODOO ERP INTEGRATION)
                <span class="text-primary font-black">▪▪</span> OPEN FOR WORK (FULL-TIME &amp; MAGANG)
            </span>
            <span class="mx-6 flex items-center gap-4" aria-hidden="true">
                <span class="text-primary font-black">▪▪</span> NAUFAL ZIKRI HILMY
                <span class="text-primary font-black">▪▪</span> FRESH GRADUATE S1 SISTEM INFORMASI
                <span class="text-primary font-black">▪▪</span> TELKOM UNIVERSITY PURWOKERTO
                <span class="text-primary font-black">▪▪</span> IPK 3.82 (DENGAN PUJIAN)
                <span class="text-primary font-black">▪▪</span> CERTIFIED WEB DEVELOPER (BNSP CWDev)
                <span class="text-primary font-black">▪▪</span> GUMBREGQUICKBOOK (LARAVEL + GEMINI AI)
                <span class="text-primary font-black">▪▪</span> SIRIMBY (ODOO ERP INTEGRATION)
                <span class="text-primary font-black">▪▪</span> OPEN FOR WORK (FULL-TIME &amp; MAGANG)
            </span>
        </div>
    </div>

    <!-- Editorial Quick Index of Selected Works (Directly below tape) -->
    <div id="hero-index"
        class="max-w-container-max mx-auto px-gutter relative z-10 w-full mt-6 opacity-0 translate-y-6 transition-all duration-700"
        style="transition-delay: 700ms;">
        <div class="flex items-center justify-between mb-4 pb-2 border-b border-[#1c222d]">
            <span class="font-label-mono text-xs text-on-surface-subtle uppercase tracking-widest flex items-center gap-2">
                <span class="w-1.5 h-1.5 bg-primary"></span>
                SELECTED WORK INDEX // 2026
            </span>
            <span class="font-label-mono text-xs text-on-surface-subtle hidden sm:inline">2 LIVE PRODUCTION PLATFORMS</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Index Item 1: Gumbreg -->
            <div class="group p-5 rounded-2xl bg-[#0c0e12] border border-[#1c222d] hover:border-[#2d3545] transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between text-xs font-label-mono text-on-surface-subtle mb-2">
                        <span class="text-primary font-bold">01 // APLIKASI WEB RESERVASI</span>
                        <a href="https://gumbreg.my.id/" target="_blank" rel="noopener noreferrer"
                            class="hover:text-primary transition-colors flex items-center gap-1">
                            <span>gumbreg.my.id</span>
                            <span class="material-symbols-outlined text-xs">open_in_new</span>
                        </a>
                    </div>
                    <div class="font-headline-md text-lg sm:text-xl font-bold text-white group-hover:text-primary transition-colors">
                        GumbregQuickBook
                    </div>
                    <p class="font-body-md text-xs sm:text-sm text-on-surface-variant mt-1.5 leading-relaxed">
                        Sistem reservasi online end-to-end terintegrasi basis data MySQL, manajemen slot real-time, dan Google Gemini AI Chatbot.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-[#1c222d] flex items-center justify-between">
                    <div class="flex flex-wrap gap-1.5">
                        <span class="px-2 py-0.5 rounded bg-[#13171f] text-[11px] font-label-mono text-on-surface-subtle">Laravel</span>
                        <span class="px-2 py-0.5 rounded bg-[#13171f] text-[11px] font-label-mono text-on-surface-subtle">MySQL</span>
                        <span class="px-2 py-0.5 rounded bg-primary/10 text-primary border border-primary/20 text-[11px] font-label-mono font-semibold">Gemini AI</span>
                    </div>
                    <a href="{{ url('/project/gumbreg') }}" class="text-xs font-label-mono text-primary font-semibold hover:underline flex items-center gap-1">
                        <span>Studi Kasus</span>
                        <span class="material-symbols-outlined text-xs">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Index Item 2: Sirimby -->
            <div class="group p-5 rounded-2xl bg-[#0c0e12] border border-[#1c222d] hover:border-[#2d3545] transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between text-xs font-label-mono text-on-surface-subtle mb-2">
                        <span class="text-primary font-bold">02 // SISTEM ERP USAHA LOKAL</span>
                        <a href="https://sirimby.org/" target="_blank" rel="noopener noreferrer"
                            class="hover:text-primary transition-colors flex items-center gap-1">
                            <span>sirimby.org</span>
                            <span class="material-symbols-outlined text-xs">open_in_new</span>
                        </a>
                    </div>
                    <div class="font-headline-md text-lg sm:text-xl font-bold text-white group-hover:text-primary transition-colors">
                        Sirimby - Fresh Milk
                    </div>
                    <p class="font-body-md text-xs sm:text-sm text-on-surface-variant mt-1.5 leading-relaxed">
                        Implementasi Odoo ERP terpadu untuk digitalisasi rantai pasok harian, penilaian stok inventaris, dan operasional penjualan.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-[#1c222d] flex items-center justify-between">
                    <div class="flex flex-wrap gap-1.5">
                        <span class="px-2 py-0.5 rounded bg-[#13171f] text-[11px] font-label-mono text-on-surface-subtle">Odoo ERP</span>
                        <span class="px-2 py-0.5 rounded bg-[#13171f] text-[11px] font-label-mono text-on-surface-subtle">Python</span>
                        <span class="px-2 py-0.5 rounded bg-[#13171f] text-[11px] font-label-mono text-on-surface-subtle">PostgreSQL</span>
                    </div>
                    <a href="{{ url('/project/sirimby') }}" class="text-xs font-label-mono text-primary font-semibold hover:underline flex items-center gap-1">
                        <span>Studi Kasus</span>
                        <span class="material-symbols-outlined text-xs">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // --- Entrance Animations ---
        const heroEls = [
            document.getElementById('hero-top-strip'),
            document.getElementById('hero-left'),
            document.getElementById('hero-right'),
            document.getElementById('hero-tape'),
            document.getElementById('hero-index'),
        ];

        heroEls.forEach(el => {
            if (!el) return;
            const delay = parseInt(el.style.transitionDelay) || 0;
            setTimeout(() => {
                el.classList.remove('opacity-0', 'translate-y-6');
            }, delay);
        });

        // --- Lightweight Canvas Particle Network ---
        const canvas = document.getElementById('hero-particles');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let particles = [];
        let animFrame;
        let W = 0, H = 0;

        function resizeCanvas() {
            W = canvas.width = canvas.parentElement.offsetWidth;
            H = canvas.height = canvas.parentElement.offsetHeight;
        }

        function createParticle() {
            return {
                x: Math.random() * W,
                y: Math.random() * H,
                radius: Math.random() * 1.5 + 0.5,
                vx: (Math.random() - 0.5) * 0.35,
                vy: (Math.random() - 0.5) * 0.35,
                alpha: Math.random() * 0.4 + 0.1,
            };
        }

        function initParticles(count = 45) {
            particles = Array.from({ length: count }, createParticle);
        }

        function drawParticles() {
            ctx.clearRect(0, 0, W, H);

            // Connect nearby nodes
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < 110) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(251, 249, 244, ${0.08 * (1 - dist / 110)})`;
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }

            // Draw nodes
            particles.forEach(p => {
                p.x += p.vx;
                p.y += p.vy;

                if (p.x < 0) p.x = W;
                if (p.x > W) p.x = 0;
                if (p.y < 0) p.y = H;
                if (p.y > H) p.y = 0;

                ctx.beginPath();
                ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(251, 249, 244, ${p.alpha})`;
                ctx.fill();
            });

            animFrame = requestAnimationFrame(drawParticles);
        }

        resizeCanvas();
        initParticles(window.innerWidth < 768 ? 25 : 50);
        drawParticles();

        window.addEventListener('resize', () => {
            resizeCanvas();
        });
    });
</script>
