<!-- 2. Featured Works Section -->
<section class="py-section-gap relative" id="projects">
    <div class="max-w-container-max mx-auto px-gutter">
        <div class="text-center mb-16 reveal-up">
            <h2 class="font-headline-md text-headline-md text-on-surface mb-4">Karya &amp; Proyek Pilihan</h2>
        </div>
        <div class="flex flex-col gap-8">
            <!-- Project Card 1 -->
            <div
                class="glass-panel rounded-2xl overflow-hidden group flex flex-col md:flex-row transition-all duration-500 hover:-translate-y-1 reveal-up">
                <div class="p-8 md:p-12 flex flex-col justify-center md:w-5/12 border-r border-white/5">
                    <div class="mb-6">
                        <span
                            class="bg-primary/20 text-primary px-3 py-1 rounded-full font-label-mono text-xs border border-primary/30">Web
                            App</span>
                    </div>
                    <h3
                        class="font-headline-sm text-headline-sm text-on-surface mb-2 group-hover:text-primary transition-colors">
                        Sistem Reservasi Lapangan Tenis</h3>
                    <p class="font-body-md text-on-surface-variant text-sm mb-8">Sistem reservasi online end-to-end
                        terintegrasi kueri basis data MySQL, manajemen slot real-time, dan asisten cerdas Google Gemini
                        AI Chatbot.</p>

                    <div class="flex flex-wrap gap-2 mb-10">
                        <span
                            class="bg-surface-bright text-on-surface-variant px-3 py-1.5 rounded-full font-label-mono text-xs">Laravel</span>
                        <span
                            class="bg-surface-bright text-on-surface-variant px-3 py-1.5 rounded-full font-label-mono text-xs">MySQL</span>
                        <span
                            class="bg-primary/10 text-primary border border-primary/30 px-3 py-1.5 rounded-full font-label-mono text-xs font-semibold">Gemini
                            AI</span>
                    </div>

                    <a class="inline-flex items-center text-primary font-semibold font-body-md group/link mt-auto"
                        href="{{ url('/project/gumbreg') }}">
                        Lihat Studi Kasus
                        <div
                            class="w-6 h-6 rounded-full bg-primary flex items-center justify-center ml-2 group-hover/link:translate-x-1 transition-transform">
                            <span
                                class="material-symbols-outlined text-on-primary text-sm font-bold">arrow_forward</span>
                        </div>
                    </a>
                </div>
                <div
                    class="relative h-64 md:h-auto md:w-7/12 overflow-hidden bg-surface-bright/50 p-6 flex items-center justify-center">
                    <img alt="GumbregQuickBook Project"
                        class="w-full h-auto rounded-xl object-cover shadow-2xl transition-transform duration-700 group-hover:scale-105"
                        src="{{ asset('images/gumbreg.png') }}" />
                </div>
            </div>

            <!-- Project Card 2 -->
            <div
                class="glass-panel rounded-2xl overflow-hidden group flex flex-col md:flex-row transition-all duration-500 hover:-translate-y-1 reveal-up">
                <div class="p-8 md:p-12 flex flex-col justify-center md:w-5/12 border-r border-white/5">
                    <div class="mb-6">
                        <span
                            class="bg-primary/20 text-primary px-3 py-1 rounded-full font-label-mono text-xs border border-primary/30">Sistem
                            ERP</span>
                    </div>
                    <h3
                        class="font-headline-sm text-headline-sm text-on-surface mb-2 group-hover:text-primary transition-colors">
                        Sirimby - Fresh Milk</h3>
                    <p class="font-body-md text-on-surface-variant text-sm mb-8">Implementasi Odoo ERP terpadu untuk
                        peternakan sapi perah lokal guna mengoptimalkan rantai pasok dan penjualan.</p>

                    <div class="flex flex-wrap gap-2 mb-10">
                        <span
                            class="bg-surface-bright text-on-surface-variant px-3 py-1.5 rounded-full font-label-mono text-xs">Odoo</span>
                        <span
                            class="bg-surface-bright text-on-surface-variant px-3 py-1.5 rounded-full font-label-mono text-xs">Python</span>
                    </div>

                    <a class="inline-flex items-center text-primary font-semibold font-body-md group/link mt-auto"
                        href="{{ url('/project/sirimby') }}">
                        Lihat Studi Kasus
                        <div
                            class="w-6 h-6 rounded-full bg-primary flex items-center justify-center ml-2 group-hover/link:translate-x-1 transition-transform">
                            <span
                                class="material-symbols-outlined text-on-primary text-sm font-bold">arrow_forward</span>
                        </div>
                    </a>
                </div>
                <div
                    class="relative h-64 md:h-auto md:w-7/12 overflow-hidden bg-surface-bright/50 p-6 flex items-center justify-center">
                    <img alt="Sirimby Project"
                        class="w-full h-auto rounded-xl object-cover shadow-2xl transition-transform duration-700 group-hover:scale-105"
                        src="{{ asset('images/sirimby.png') }}" />
                </div>
            </div>
        </div>
    </div>
</section>