<!-- 1. Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden" id="hero">

    <!-- Canvas Particle Background -->
    <canvas id="hero-particles" class="absolute inset-0 z-0 w-full h-full pointer-events-none"></canvas>

    <!-- Radial gradient overlay -->
    <div
        class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_0%,rgba(0,229,115,0.08)_0%,transparent_70%)]">
    </div>

    <!-- Animated glow orbs -->
    <div
        class="absolute top-1/4 left-1/4 w-[500px] h-[500px] rounded-full bg-primary/5 blur-[120px] pointer-events-none z-0 animate-[orb-float_8s_ease-in-out_infinite]">
    </div>
    <div
        class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] rounded-full bg-primary/5 blur-[120px] pointer-events-none z-0 animate-[orb-float_10s_ease-in-out_infinite_reverse]">
    </div>

    <!-- Content -->
    <div
        class="max-w-container-max mx-auto px-gutter relative z-10 w-full flex flex-col items-center text-center pt-28 sm:pt-32 pb-16">

        <!-- Greeting Line -->
        <div id="hero-greeting" class="mb-4 sm:mb-5 opacity-0 translate-y-8 transition-all duration-700"
            style="transition-delay: 100ms;">
            <span class="font-label-mono text-sm sm:text-base tracking-[0.3em] text-primary uppercase">
                Halo, Perkenalkan
            </span>
        </div>

        <!-- Main Headline -->
        <h1 id="hero-name"
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-headline-md font-bold text-on-surface mb-4 sm:mb-5 max-w-5xl mx-auto leading-tight opacity-0 translate-y-8 transition-all duration-700"
            style="transition-delay: 250ms;">
            Naufal Zikri <span
                class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-emerald-400 to-primary bg-[length:200%_auto] animate-[gradient-shift_3s_linear_infinite]">Hilmy</span>
        </h1>

        <!-- Typewriter Role -->
        <div id="hero-role"
            class="mb-6 sm:mb-8 opacity-0 translate-y-8 transition-all duration-700 flex items-center justify-center gap-2 sm:gap-3"
            style="transition-delay: 400ms;">
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse shrink-0"></span>
            <span class="font-label-mono text-base sm:text-lg md:text-xl text-on-surface-variant">
                <span id="typewriter-text"></span><span id="typewriter-cursor"
                    class="inline-block w-0.5 h-5 bg-primary ml-0.5 align-middle animate-[blink_1s_step-end_infinite]"></span>
            </span>
        </div>

        <!-- Description -->
        <p id="hero-desc"
            class="font-body-md text-sm sm:text-base md:text-lg text-on-surface-variant max-w-2xl mx-auto mb-10 sm:mb-12 px-2 leading-relaxed opacity-0 translate-y-8 transition-all duration-700"
            style="transition-delay: 550ms;">
            Fresh graduate <span class="text-on-surface font-medium">S1 Sistem Informasi</span> yang tertarik pada
            <span class="text-on-surface font-medium">web development</span>,
            <span class="text-on-surface font-medium">rekayasa perangkat lunak</span>, dan
            <span class="text-on-surface font-medium">integrasi AI</span> siap berkontribusi dan terus belajar.
        </p>

        <!-- CTA Buttons -->
        <div id="hero-cta"
            class="flex flex-col sm:flex-row gap-3.5 sm:gap-4 mb-12 sm:mb-16 w-full sm:w-auto max-w-xs sm:max-w-none justify-center opacity-0 translate-y-8 transition-all duration-700"
            style="transition-delay: 700ms;">
            <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full bg-primary text-on-primary font-body-md font-bold hover:scale-95 hover:brightness-110 transition-all duration-300 shadow-lg shadow-primary/25 text-sm sm:text-base"
                href="#contact">
                <span class="material-symbols-outlined text-base" style="font-variation-settings: 'FILL' 1;">mail</span>
                Hubungi Saya
            </a>
            <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full bg-surface-container/50 text-on-surface border border-outline-variant hover:border-primary/50 font-body-md font-semibold glass-panel glass-panel-hover hover:scale-95 transition-all duration-300 text-sm sm:text-base"
                href="#projects">
                <span class="material-symbols-outlined text-base">folder_open</span>
                Lihat Proyek
            </a>
        </div>

        <!-- Scroll indicator -->
        <div
            class="absolute bottom-6 sm:bottom-8 left-1/2 -translate-x-1/2 z-10 opacity-0 animate-[fade-in-up_1s_ease_1.5s_forwards]">
            <a href="#about"
                class="flex flex-col items-center gap-2 group text-on-surface-variant hover:text-primary transition-colors">
                <span class="font-label-mono text-[10px] tracking-widest uppercase">Scroll</span>
                <span
                    class="w-px h-8 bg-gradient-to-b from-primary/60 to-transparent group-hover:h-10 transition-all duration-300"></span>
            </a>
        </div>

</section>

{{-- Inline styles & scripts for hero --}}
<style>
    @keyframes gradient-shift {
        0% {
            background-position: 0% center;
        }

        100% {
            background-position: 200% center;
        }
    }

    @keyframes orb-float {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        33% {
            transform: translate(30px, -20px) scale(1.05);
        }

        66% {
            transform: translate(-20px, 15px) scale(0.97);
        }
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }

    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateX(-50%) translateY(12px);
        }

        to {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }
    }

    #hero-particles {
        opacity: 0.6;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // --- Entrance Animations ---
        const heroEls = [
            document.getElementById('hero-greeting'),
            document.getElementById('hero-name'),
            document.getElementById('hero-role'),
            document.getElementById('hero-desc'),
            document.getElementById('hero-cta'),
            document.getElementById('hero-status'),
        ];

        heroEls.forEach(el => {
            if (!el) return;
            const delay = parseInt(el.style.transitionDelay) || 0;
            setTimeout(() => {
                el.classList.remove('opacity-0', 'translate-y-8');
            }, delay);
        });

        // --- Typewriter Effect ---
        const roles = [
            'Fresh Graduate Sistem Informasi',
            'Web Developer',
            'Laravel & MySQL Enthusiast',
            'AI Integration Learner',
            'Open to Work',
        ];

        const typeEl = document.getElementById('typewriter-text');
        let roleIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typingTimeout;

        function typeWriter() {
            const currentRole = roles[roleIndex];

            if (isDeleting) {
                charIndex--;
                typeEl.textContent = currentRole.substring(0, charIndex);
            } else {
                charIndex++;
                typeEl.textContent = currentRole.substring(0, charIndex);
            }

            let speed = isDeleting ? 50 : 90;

            if (!isDeleting && charIndex === currentRole.length) {
                speed = 1800;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                roleIndex = (roleIndex + 1) % roles.length;
                speed = 400;
            }

            typingTimeout = setTimeout(typeWriter, speed);
        }

        // Start typewriter after role line becomes visible
        setTimeout(typeWriter, 900);

        // --- Particle Canvas ---
        const canvas = document.getElementById('hero-particles');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let particles = [];
        let animFrame;
        let W, H;

        function resizeCanvas() {
            W = canvas.width = canvas.offsetWidth;
            H = canvas.height = canvas.offsetHeight;
        }

        function getRandBetween(min, max) {
            return Math.random() * (max - min) + min;
        }

        function createParticle() {
            return {
                x: getRandBetween(0, W),
                y: getRandBetween(0, H),
                radius: getRandBetween(0.8, 2.5),
                vx: getRandBetween(-0.3, 0.3),
                vy: getRandBetween(-0.5, -0.1),
                alpha: getRandBetween(0.1, 0.6),
                alphaDir: getRandBetween(0.001, 0.004),
            };
        }

        function initParticles(count = 90) {
            particles = Array.from({ length: count }, createParticle);
        }

        function drawParticles() {
            ctx.clearRect(0, 0, W, H);

            // Draw connection lines
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < 120) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(0, 229, 115, ${0.12 * (1 - dist / 120)})`;
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }

            // Draw dots
            particles.forEach(p => {
                p.alpha += p.alphaDir;
                if (p.alpha >= 0.65 || p.alpha <= 0.05) p.alphaDir *= -1;

                p.x += p.vx;
                p.y += p.vy;

                if (p.y < -10) { p.y = H + 10; p.x = getRandBetween(0, W); }
                if (p.x < -10) { p.x = W + 10; }
                if (p.x > W + 10) { p.x = -10; }

                ctx.beginPath();
                ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(0, 229, 115, ${p.alpha})`;
                ctx.fill();
            });

            animFrame = requestAnimationFrame(drawParticles);
        }

        resizeCanvas();
        initParticles();
        drawParticles();

        window.addEventListener('resize', () => {
            resizeCanvas();
            initParticles();
        });
    });
</script>