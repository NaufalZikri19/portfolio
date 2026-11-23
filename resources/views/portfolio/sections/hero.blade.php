<section id="hero"
    class="hero-editorial-bg relative isolate flex min-h-[calc(100svh-4rem)] flex-col justify-center overflow-hidden px-gutter pb-12 pt-24 sm:pb-16 sm:pt-28"
    aria-labelledby="hero-name">
    <div class="hero-reference-grid relative z-10 mx-auto w-full max-w-container-max">

        <!-- Left Column: Identity, Narrative, and Primary CTAs -->
        <div class="order-1 flex min-w-0 flex-col items-start text-left reveal-up">
            <!-- Label Utuh & Anti-Truncation -->
            <div
                class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#13171f] border border-[#2d3545] mb-4">
                <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                <span class="font-label-mono text-xs text-accent font-semibold uppercase tracking-wider break-words">
                    Fresh Graduate S1 Sistem Informasi
                </span>
            </div>

            <h1 id="hero-name"
                class="font-headline-md text-3xl sm:text-5xl xl:text-6xl font-black leading-[1.08] tracking-tight text-white mb-4">
                Naufal Zikri Hilmy
            </h1>

            <span aria-hidden="true" class="h-1 w-20 bg-accent rounded-full block mb-6"></span>

            <p class="max-w-[36ch] font-body-md text-sm sm:text-base leading-relaxed text-on-surface-variant mb-8">
                Menjembatani analisis proses bisnis dengan rekayasa aplikasi web yang siap dipakai — teruji pada sistem
                reservasi live dan implementasi ERP terintegrasi.
            </p>

            <div class="flex flex-wrap items-center gap-4">
                <a href="#contact"
                    class="min-h-[48px] inline-flex items-center justify-center gap-2.5 px-7 py-3 rounded-full bg-accent text-on-accent font-body-md font-bold text-xs uppercase tracking-wider hover:bg-accent-hover active:scale-95 transition-all shadow-[0_4px_20px_rgba(155,184,255,0.18)] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent">
                    <span>Hubungi Saya</span>
                    <span class="material-symbols-outlined text-lg" aria-hidden="true">arrow_forward</span>
                </a>
                <a href="#projects"
                    class="min-h-[48px] inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-[#13171f] text-white border border-[#2d3545] hover:border-accent font-body-md font-semibold text-xs uppercase tracking-wider active:scale-95 transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent">
                    <span>Lihat Projek Live</span>
                </a>
            </div>
        </div>

        <!-- Center Column: Portrait Photograph with Clean Frame -->
        <figure
            class="order-2 mx-auto aspect-[3/4] max-h-[64svh] min-h-[20rem] w-full max-w-[21rem] overflow-hidden rounded-2xl border border-[#1c222d] bg-[#0c0e12] shadow-2xl reveal-up sm:max-h-[70svh] xl:aspect-auto xl:h-[min(68svh,38rem)] xl:max-h-none xl:max-w-none">
            <img src="{{ asset('images/naufal-profile.jpg') }}" alt="Foto Profil Naufal Zikri Hilmy"
                class="h-full w-full object-cover object-[50%_65%] transition-transform duration-700 hover:scale-105"
                width="1152" height="2304" fetchpriority="high" decoding="async" />
        </figure>

        <!-- Right Column: Verified Factual Credentials Rail -->
        <aside aria-label="Ringkasan profil terverifikasi"
            class="order-3 grid grid-cols-3 gap-3 border-t border-[#1c222d] pt-6 text-center reveal-up xl:flex xl:h-[min(68svh,38rem)] xl:flex-col xl:items-end xl:justify-between xl:border-0 xl:py-2 xl:text-right">

            <div
                class="min-w-0 p-3 sm:p-4 rounded-xl xl:bg-transparent bg-[#0c0e12] border border-[#1c222d] xl:border-0">
                <span class="font-label-mono text-xs uppercase tracking-wider text-accent font-semibold block mb-1">
                    AKADEMIK
                </span>
                <p class="font-headline-md text-2xl sm:text-3xl font-bold leading-tight text-white xl:text-4xl">
                    3.82<span class="block text-xs font-label-mono text-on-surface-subtle mt-0.5">/ 4.00 IPK</span>
                </p>
                <span class="hidden xl:block font-body-md text-xs text-on-surface-variant mt-1">
                    Telkom University (Pujian)
                </span>
            </div>

            <div
                class="min-w-0 p-3 sm:p-4 rounded-xl xl:bg-transparent bg-[#0c0e12] border border-[#1c222d] xl:border-0">
                <span class="font-label-mono text-xs uppercase tracking-wider text-accent font-semibold block mb-1">
                    PRODUKSI
                </span>
                <p class="font-headline-md text-2xl sm:text-3xl font-bold leading-tight text-white xl:text-4xl">
                    02
                </p>
                <span class="block text-xs font-label-mono text-on-surface-subtle mt-0.5">
                    Projek Live
                </span>
                <span class="hidden xl:block font-body-md text-xs text-on-surface-variant mt-1">
                    Gumbreg &amp; Sirimby
                </span>
            </div>

            <div
                class="min-w-0 p-3 sm:p-4 rounded-xl xl:bg-transparent bg-[#0c0e12] border border-[#1c222d] xl:border-0">
                <span class="font-label-mono text-xs uppercase tracking-wider text-accent font-semibold block mb-1">
                    KOMPETENSI
                </span>
                <p class="font-headline-md text-xl sm:text-2xl font-bold leading-tight text-white xl:text-3xl">
                    BNSP
                </p>
                <span class="block text-xs font-label-mono text-on-surface-subtle mt-0.5">
                    CWDev Certified
                </span>
                <span class="hidden xl:block font-body-md text-xs text-on-surface-variant mt-1">
                    Lembaga Sertifikasi Profesi
                </span>
            </div>

        </aside>
    </div>
</section>