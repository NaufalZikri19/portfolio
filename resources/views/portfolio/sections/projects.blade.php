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
                <div
                    class="p-6 sm:p-8 md:p-12 flex flex-col justify-center md:w-5/12 border-b md:border-b-0 md:border-r border-white/5">
                    <div class="mb-4 sm:mb-6 flex items-center justify-between gap-2">
                        <span
                            class="bg-primary/20 text-primary px-3 py-1 rounded-full font-label-mono text-xs border border-primary/30">Web
                            App</span>
                        <a href="https://gumbreg.my.id/" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-1.5 text-xs font-label-mono text-on-surface-variant hover:text-primary transition-colors group/ext-top"
                            title="Buka https://gumbreg.my.id/">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span class="hover:underline">gumbreg.my.id</span>
                            <span
                                class="material-symbols-outlined text-[13px] group-hover/ext-top:-translate-y-0.5 group-hover/ext-top:translate-x-0.5 transition-transform">open_in_new</span>
                        </a>
                    </div>
                    <h3
                        class="font-headline-sm text-xl sm:text-headline-sm text-on-surface mb-2 group-hover:text-primary transition-colors">
                        Sistem Reservasi Lapangan Tenis</h3>
                    <p class="font-body-md text-on-surface-variant text-xs sm:text-sm mb-6 sm:mb-8 leading-relaxed">
                        Sistem reservasi online end-to-end
                        terintegrasi kueri basis data MySQL, manajemen slot real-time, dan asisten cerdas Google Gemini
                        AI Chatbot.</p>

                    <div class="flex flex-wrap gap-2 mb-8 sm:mb-10">
                        <span
                            class="bg-surface-bright text-on-surface-variant px-3 py-1.5 rounded-full font-label-mono text-xs">Laravel</span>
                        <span
                            class="bg-surface-bright text-on-surface-variant px-3 py-1.5 rounded-full font-label-mono text-xs">MySQL</span>
                        <span
                            class="bg-primary/10 text-primary border border-primary/30 px-3 py-1.5 rounded-full font-label-mono text-xs font-semibold">Gemini
                            AI</span>
                    </div>

                    <div class="flex flex-wrap items-center gap-3 sm:gap-4 mt-auto">
                        <a class="inline-flex items-center text-primary font-semibold font-body-md group/link text-sm sm:text-base"
                            href="{{ url('/project/gumbreg') }}">
                            Lihat Studi Kasus
                            <div
                                class="w-6 h-6 rounded-full bg-primary flex items-center justify-center ml-2 group-hover/link:translate-x-1 transition-transform">
                                <span
                                    class="material-symbols-outlined text-on-primary text-sm font-bold">arrow_forward</span>
                            </div>
                        </a>
                        <a class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-surface-bright text-on-surface-variant hover:text-primary hover:border-primary/40 border border-white/5 font-body-md text-xs sm:text-sm font-medium transition-all duration-300 group/ext"
                            href="https://gumbreg.my.id/" target="_blank" rel="noopener noreferrer">
                            <span>Kunjungi Website</span>
                            <span
                                class="material-symbols-outlined text-sm group-hover/ext:-translate-y-0.5 group-hover/ext:translate-x-0.5 transition-transform">open_in_new</span>
                        </a>
                    </div>
                </div>
                <div
                    class="relative min-h-[220px] sm:min-h-[280px] md:min-h-0 md:w-7/12 overflow-hidden bg-surface-bright/50 p-4 sm:p-6 flex items-center justify-center">
                    <a href="https://gumbreg.my.id/" target="_blank" rel="noopener noreferrer"
                        class="block w-full h-full relative cursor-pointer group/img" title="Buka gumbreg.my.id">
                        <img alt="GumbregQuickBook Project"
                            class="w-full h-auto rounded-xl object-cover shadow-2xl transition-transform duration-700 group-hover:scale-105"
                            src="{{ asset('images/gumbreg.png') }}" />
                        <div
                            class="absolute bottom-6 right-6 px-3 py-1.5 rounded-full bg-background/80 backdrop-blur-md border border-white/10 text-on-surface text-xs font-label-mono flex items-center gap-1.5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>gumbreg.my.id</span>
                            <span class="material-symbols-outlined text-xs">open_in_new</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div
                class="glass-panel rounded-2xl overflow-hidden group flex flex-col md:flex-row transition-all duration-500 hover:-translate-y-1 reveal-up">
                <div
                    class="p-6 sm:p-8 md:p-12 flex flex-col justify-center md:w-5/12 border-b md:border-b-0 md:border-r border-white/5">
                    <div class="mb-4 sm:mb-6 flex items-center justify-between gap-2">
                        <span
                            class="bg-primary/20 text-primary px-3 py-1 rounded-full font-label-mono text-xs border border-primary/30">Sistem
                            ERP</span>
                        <a href="https://sirimby.org/" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-1.5 text-xs font-label-mono text-on-surface-variant hover:text-primary transition-colors group/ext-top"
                            title="Buka https://sirimby.org/">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span class="hover:underline">sirimby.org</span>
                            <span
                                class="material-symbols-outlined text-[13px] group-hover/ext-top:-translate-y-0.5 group-hover/ext-top:translate-x-0.5 transition-transform">open_in_new</span>
                        </a>
                    </div>
                    <h3
                        class="font-headline-sm text-xl sm:text-headline-sm text-on-surface mb-2 group-hover:text-primary transition-colors">
                        Sirimby - Fresh Milk</h3>
                    <p class="font-body-md text-on-surface-variant text-xs sm:text-sm mb-6 sm:mb-8 leading-relaxed">
                        Implementasi Odoo ERP terpadu untuk
                        peternakan sapi perah lokal guna mengoptimalkan rantai pasok dan penjualan.</p>

                    <div class="flex flex-wrap gap-2 mb-8 sm:mb-10">
                        <span
                            class="bg-surface-bright text-on-surface-variant px-3 py-1.5 rounded-full font-label-mono text-xs">Odoo</span>
                        <span
                            class="bg-surface-bright text-on-surface-variant px-3 py-1.5 rounded-full font-label-mono text-xs">Python</span>
                    </div>

                    <div class="flex flex-wrap items-center gap-3 sm:gap-4 mt-auto">
                        <a class="inline-flex items-center text-primary font-semibold font-body-md group/link text-sm sm:text-base"
                            href="{{ url('/project/sirimby') }}">
                            Lihat Studi Kasus
                            <div
                                class="w-6 h-6 rounded-full bg-primary flex items-center justify-center ml-2 group-hover/link:translate-x-1 transition-transform">
                                <span
                                    class="material-symbols-outlined text-on-primary text-sm font-bold">arrow_forward</span>
                            </div>
                        </a>
                        <a class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-surface-bright text-on-surface-variant hover:text-primary hover:border-primary/40 border border-white/5 font-body-md text-xs sm:text-sm font-medium transition-all duration-300 group/ext"
                            href="https://sirimby.org/" target="_blank" rel="noopener noreferrer">
                            <span>Kunjungi Website</span>
                            <span
                                class="material-symbols-outlined text-sm group-hover/ext:-translate-y-0.5 group-hover/ext:translate-x-0.5 transition-transform">open_in_new</span>
                        </a>
                    </div>
                </div>
                <div
                    class="relative min-h-[220px] sm:min-h-[280px] md:min-h-0 md:w-7/12 overflow-hidden bg-surface-bright/50 p-4 sm:p-6 flex items-center justify-center">
                    <a href="https://sirimby.org/" target="_blank" rel="noopener noreferrer"
                        class="block w-full h-full relative cursor-pointer group/img" title="Buka sirimby.org">
                        <img alt="Sirimby Project"
                            class="w-full h-auto rounded-xl object-cover shadow-2xl transition-transform duration-700 group-hover:scale-105"
                            src="{{ asset('images/sirimby.png') }}" />
                        <div
                            class="absolute bottom-6 right-6 px-3 py-1.5 rounded-full bg-background/80 backdrop-blur-md border border-white/10 text-on-surface text-xs font-label-mono flex items-center gap-1.5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>sirimby.org</span>
                            <span class="material-symbols-outlined text-xs">open_in_new</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>