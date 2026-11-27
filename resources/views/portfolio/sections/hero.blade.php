<!-- Hero Section (Clean Structured Minimal) -->
<section id="hero"
    class="relative isolate flex min-h-[calc(100svh-4rem)] flex-col justify-center overflow-hidden px-gutter pb-16 pt-24 sm:pb-20 sm:pt-28 border-b border-[#1c202a]"
    aria-labelledby="hero-name">
    <div class="mx-auto w-full max-w-container-max">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

            <!-- Left / Content Column (7 cols on desktop) -->
            <div class="lg:col-span-7 flex flex-col items-start text-left reveal-up">
                <!-- Role Tag -->
                <div
                    class="mb-4 inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#0f1117] border border-[#1c202a]">
                    <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                    <span class="font-label-mono text-xs text-on-surface-variant font-medium">
                        Fresh Graduate S1 Sistem Informasi
                    </span>
                </div>

                <!-- Main Name Headline -->
                <h1 id="hero-name"
                    class="mb-4 font-headline-md text-4xl sm:text-5xl xl:text-6xl font-bold tracking-tight text-white leading-[1.08]">
                    Naufal Zikri Hilmy
                </h1>

                <!-- Brief Bio Narrative -->
                <p class="mb-8 max-w-[46ch] font-body-md text-base sm:text-lg text-on-surface-variant leading-relaxed">
                    Menjembatani analisis proses bisnis dengan rekayasa aplikasi web yang siap dipakai teruji pada
                    sistem reservasi live dan implementasi ERP terintegrasi.
                </p>

                <!-- Actions: Direct Clean Text -->
                <div class="flex flex-wrap items-center gap-4 mb-10">
                    <a href="#contact"
                        class="min-h-[44px] inline-flex items-center justify-center rounded-full bg-accent px-6 py-2.5 font-body-md text-xs font-semibold tracking-wide text-on-accent transition-colors hover:bg-accent-hover focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent">
                        Hubungi Saya
                    </a>
                    <a href="#projects"
                        class="min-h-[44px] inline-flex items-center justify-center rounded-full bg-[#0f1117] border border-[#1c202a] px-6 py-2.5 font-body-md text-xs font-semibold tracking-wide text-white transition-colors hover:border-[#282d3b] hover:text-accent focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent">
                        Lihat Projek Live
                    </a>
                </div>
            </div>

            <!-- Right / Portrait Column (5 cols on desktop) -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end reveal-up">
                <figure
                    class="relative w-full max-w-[22rem] sm:max-w-[24rem] aspect-[4/5] overflow-hidden rounded-lg border border-[#1c202a] bg-[#0f1117]">
                    <img src="{{ asset('images/naufal-profile(2).jpeg') }}" alt="Potret Naufal Zikri Hilmy"
                        class="h-full w-full object-cover object-[50%_40%]" width="1287" height="1716"
                        fetchpriority="high" decoding="async" />
                </figure>
            </div>

        </div>
    </div>
</section>