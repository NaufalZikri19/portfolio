<section id="hero"
    class="hero-editorial-bg relative isolate flex min-h-[calc(100svh-4rem)] flex-col justify-center overflow-hidden px-gutter pb-10 pt-20 sm:pb-14 sm:pt-24"
    aria-labelledby="hero-name">
    <div class="hero-reference-grid relative z-10 mx-auto w-full max-w-container-max">
        <div class="order-1 flex min-w-0 flex-col items-start text-left reveal-up xl:order-1">
            <p class="mb-3 font-body-md text-lg font-medium text-[#aab8cf] sm:text-2xl">
                Software Developer
            </p>
            <h1 id="hero-name"
                class="max-w-none font-headline-md text-3xl font-black leading-[1.04] tracking-[-0.03em] text-white sm:text-5xl xl:relative xl:z-20 xl:w-max xl:whitespace-nowrap xl:text-5xl">
                Naufal Zikri Hilmy
            </h1>
            <span aria-hidden="true" class="mt-6 h-[5px] w-28 bg-[#f3e4a2]"></span>
            <p class="mt-7 max-w-[34ch] font-body-md text-sm leading-[1.8] text-[#b3bfd1] sm:text-base">
                Menjembatani analisis proses bisnis dengan pengembangan aplikasi web yang siap dipakai, dari rancangan alur hingga implementasi.
            </p>
            <a href="#contact"
                class="mt-8 inline-flex min-h-12 items-center gap-4 font-body-md text-sm font-semibold text-[#f3e4a2] transition-colors hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#f3e4a2] focus-visible:ring-offset-4 focus-visible:ring-offset-[#07152c] sm:text-base">
                <span>Hubungi Saya</span>
                <span class="material-symbols-outlined text-xl" aria-hidden="true">arrow_forward</span>
            </a>
        </div>

        <figure class="order-2 mx-auto aspect-[3/5] max-h-[72svh] min-h-[24rem] w-full max-w-[23rem] overflow-hidden rounded-[3px] bg-[#0a1426]/40 reveal-up sm:max-h-[76svh] xl:order-2 xl:aspect-auto xl:h-[min(72svh,42rem)] xl:max-h-none xl:max-w-none">
            <img src="{{ asset('images/naufal-profile.jpg') }}"
                alt="Naufal Zikri Hilmy di tepi pantai"
                class="h-full w-full object-cover object-[50%_76%]"
                width="1152" height="2304" fetchpriority="high" decoding="async" />
        </figure>

        <aside aria-label="Ringkasan profil"
            class="order-3 grid grid-cols-3 gap-4 border-t border-white/15 pt-5 text-center reveal-up xl:flex xl:h-[min(72svh,42rem)] xl:flex-col xl:items-end xl:justify-between xl:border-0 xl:py-2 xl:text-right">
            <div class="min-w-0">
                <p class="font-body-md text-xs leading-relaxed text-[#aab8cf] sm:text-sm">IPK</p>
                <p class="mt-1 font-headline-md text-2xl font-bold leading-tight text-white sm:text-3xl xl:mt-4 xl:text-4xl">
                    3.82<span class="block text-xs font-medium text-[#b3bfd1] sm:text-sm lg:mt-1">/ 4.00</span>
                </p>
            </div>
            <div class="min-w-0">
                <p class="font-body-md text-xs leading-relaxed text-[#aab8cf] sm:text-sm">Proyek Live</p>
                <p class="mt-1 font-headline-md text-2xl font-bold leading-tight text-white sm:text-3xl xl:mt-4 xl:text-4xl">02</p>
            </div>
            <div class="min-w-0">
                <p class="font-body-md text-xs leading-relaxed text-[#aab8cf] sm:text-sm">Sertifikasi</p>
                <p class="mt-1 font-headline-md text-xl font-bold leading-tight text-white sm:text-2xl xl:mt-4 xl:text-3xl">BNSP</p>
            </div>
        </aside>
    </div>
</section>
