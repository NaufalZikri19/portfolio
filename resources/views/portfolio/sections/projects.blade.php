<!-- Featured Projects Section (Clean Structured Minimal) -->
<section class="py-section-gap relative" id="projects">
    <div class="max-w-container-max mx-auto px-gutter">

        <!-- Section Header -->
        <div
            class="border-b border-[#1c202a] pb-6 mb-12 flex flex-col md:flex-row md:items-end justify-between gap-4 reveal-up">
            <div>
                <span class="font-label-mono text-xs text-accent font-medium uppercase tracking-wider block mb-1">
                    Portofolio
                </span>
                <h2 class="font-headline-md font-bold text-2xl sm:text-3xl md:text-4xl text-white tracking-tight">
                    Proyek Pilihan
                </h2>
            </div>
            <div class="font-label-mono text-xs text-on-surface-subtle md:text-right max-w-sm">
                2 platform produksi live ter-deploy dengan metrik dan studi kasus terukur
            </div>
        </div>

        <div class="flex flex-col gap-12 sm:gap-14">

            <!-- Project 01: GumbregQuickBook -->
            <div class="rounded-lg bg-[#0f1117] border border-[#1c202a] overflow-hidden reveal-up">
                <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch">

                    <!-- Content Column (Left) -->
                    <div
                        class="lg:col-span-6 p-6 sm:p-8 md:p-10 flex flex-col justify-between border-b lg:border-b-0 lg:border-r border-[#1c202a]">
                        <div>
                            <!-- Header metadata -->
                            <div
                                class="flex flex-wrap items-center justify-between gap-2 mb-4 pb-3 border-b border-[#1c202a]">
                                <span class="font-label-mono text-xs text-accent font-medium">
                                    Aplikasi Web Reservasi
                                </span>
                                <a href="https://gumbreg.my.id/" target="_blank" rel="noopener noreferrer"
                                    class="text-xs font-label-mono text-on-surface-subtle hover:text-white transition-colors">
                                    gumbreg.my.id
                                </a>
                            </div>

                            <h3 class="font-headline-md font-bold text-2xl sm:text-3xl text-white mb-2">
                                GumbregQuickBook
                            </h3>

                            <div class="font-body-md text-sm text-accent mb-4">
                                Sistem Reservasi Lapangan Tenis Terintegrasi Google Gemini AI
                            </div>

                            <p class="font-body-md text-sm sm:text-base text-on-surface-variant leading-relaxed mb-6">
                                Platform aplikasi web end-to-end yang mengotomatisasi alur pemesanan jadwal lapangan
                                secara real-time. Dilengkapi asisten cerdas berbasis Google Gemini AI Chatbot untuk
                                menjawab pertanyaan pengunjung 24/7 dan meniadakan potensi bentrok jadwal.
                            </p>

                            <!-- Impact Banner -->
                            <div
                                class="p-3.5 rounded bg-[#161922] border border-[#1c202a] mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-2 text-xs font-label-mono">
                                <span class="text-on-surface-subtle">Dampak Terukur:</span>
                                <span class="text-white font-medium">0% Konflik Jadwal • Beban Admin Turun 60%</span>
                            </div>

                            <!-- Tech Chips -->
                            <div class="flex flex-wrap gap-2 mb-8">
                                <span
                                    class="px-2.5 py-1 rounded text-xs font-label-mono bg-[#161922] border border-[#1c202a] text-white">Laravel
                                    12</span>
                                <span
                                    class="px-2.5 py-1 rounded text-xs font-label-mono bg-[#161922] border border-[#1c202a] text-white">MySQL</span>
                                <span
                                    class="px-2.5 py-1 rounded text-xs font-label-mono bg-accent text-on-accent font-medium">Google
                                    Gemini AI</span>
                                <span
                                    class="px-2.5 py-1 rounded text-xs font-label-mono bg-[#161922] border border-[#1c202a] text-white">Tailwind
                                    CSS</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap items-center gap-3 pt-4 border-t border-[#1c202a]">
                            <a href="https://gumbreg.my.id/" target="_blank" rel="noopener noreferrer"
                                class="min-h-[42px] inline-flex items-center justify-center px-5 py-2 rounded-full bg-accent text-on-accent font-body-md font-semibold text-xs tracking-wide hover:bg-accent-hover transition-colors">
                                Kunjungi Website
                            </a>
                            <a href="{{ url('/project/gumbreg') }}"
                                class="min-h-[42px] inline-flex items-center justify-center px-5 py-2 rounded-full bg-[#161922] text-white border border-[#1c202a] hover:border-[#282d3b] hover:text-accent font-body-md font-semibold text-xs tracking-wide transition-colors">
                                Lihat Studi Kasus
                            </a>
                        </div>
                    </div>

                    <!-- Screenshot Column (Right) -->
                    <div class="lg:col-span-6 bg-[#08090c] p-4 sm:p-6 lg:p-8 flex items-center justify-center">
                        <a href="https://gumbreg.my.id/" target="_blank" rel="noopener noreferrer" class="block w-full">
                            <img alt="Tampilan antarmuka GumbregQuickBook"
                                class="w-full h-auto rounded border border-[#1c202a] object-contain transition-opacity hover:opacity-95"
                                src="{{ asset('images/gumbreg.png') }}" width="1024" height="464" loading="lazy"
                                decoding="async" />
                        </a>
                    </div>

                </div>
            </div>

            <!-- Project 02: Sirimby Fresh Milk -->
            <div class="rounded-lg bg-[#0f1117] border border-[#1c202a] overflow-hidden reveal-up">
                <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch">

                    <!-- Screenshot Column (Left on Desktop) -->
                    <div
                        class="lg:col-span-6 order-2 lg:order-1 bg-[#08090c] p-4 sm:p-6 lg:p-8 flex items-center justify-center border-t lg:border-t-0 lg:border-r border-[#1c202a]">
                        <a href="https://sirimby.org/" target="_blank" rel="noopener noreferrer" class="block w-full">
                            <img alt="Tampilan antarmuka Sirimby Fresh Milk"
                                class="w-full h-auto rounded border border-[#1c202a] object-contain transition-opacity hover:opacity-95"
                                src="{{ asset('images/sirimby.png') }}" width="1024" height="465" loading="lazy"
                                decoding="async" />
                        </a>
                    </div>

                    <!-- Content Column (Right on Desktop) -->
                    <div class="lg:col-span-6 order-1 lg:order-2 p-6 sm:p-8 md:p-10 flex flex-col justify-between">
                        <div>
                            <!-- Header metadata -->
                            <div
                                class="flex flex-wrap items-center justify-between gap-2 mb-4 pb-3 border-b border-[#1c202a]">
                                <span class="font-label-mono text-xs text-accent font-medium">
                                    Sistem Enterprise ERP
                                </span>
                                <a href="https://sirimby.org/" target="_blank" rel="noopener noreferrer"
                                    class="text-xs font-label-mono text-on-surface-subtle hover:text-white transition-colors">
                                    sirimby.org
                                </a>
                            </div>

                            <h3 class="font-headline-md font-bold text-2xl sm:text-3xl text-white mb-2">
                                Sirimby – Fresh Milk
                            </h3>

                            <div class="font-body-md text-sm text-accent mb-4">
                                Implementasi Odoo ERP Terpadu Digitalisasi Rantai Pasok Usaha Peternakan
                            </div>

                            <p class="font-body-md text-sm sm:text-base text-on-surface-variant leading-relaxed mb-6">
                                Solusi digitalisasi proses operasional Sirimby, peternakan dan pengolahan susu sapi
                                murni di Desa Glempang. Mengkustomisasi modul Odoo ERP untuk pelacakan batch produksi
                                harian, penilaian stok inventaris otomatis, hingga Point of Sale (POS) ritel
                                terintegrasi.
                            </p>

                            <!-- Impact Banner -->
                            <div
                                class="p-3.5 rounded bg-[#161922] border border-[#1c202a] mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-2 text-xs font-label-mono">
                                <span class="text-on-surface-subtle">Dampak Terukur:</span>
                                <span class="text-white font-medium">Rekapitulasi Manual Turun 40% • Akurasi Stok
                                    95%</span>
                            </div>

                            <!-- Tech Chips -->
                            <div class="flex flex-wrap gap-2 mb-8">
                                <span
                                    class="px-2.5 py-1 rounded text-xs font-label-mono bg-accent text-on-accent font-medium">Odoo
                                    ERP</span>
                                <span
                                    class="px-2.5 py-1 rounded text-xs font-label-mono bg-[#161922] border border-[#1c202a] text-white">Python</span>
                                <span
                                    class="px-2.5 py-1 rounded text-xs font-label-mono bg-[#161922] border border-[#1c202a] text-white">PostgreSQL</span>
                                <span
                                    class="px-2.5 py-1 rounded text-xs font-label-mono bg-[#161922] border border-[#1c202a] text-white">Point
                                    of Sale (POS)</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap items-center gap-3 pt-4 border-t border-[#1c202a]">
                            <a href="https://sirimby.org/" target="_blank" rel="noopener noreferrer"
                                class="min-h-[42px] inline-flex items-center justify-center px-5 py-2 rounded-full bg-accent text-on-accent font-body-md font-semibold text-xs tracking-wide hover:bg-accent-hover transition-colors">
                                Kunjungi Website
                            </a>
                            <a href="{{ url('/project/sirimby') }}"
                                class="min-h-[42px] inline-flex items-center justify-center px-5 py-2 rounded-full bg-[#161922] text-white border border-[#1c202a] hover:border-[#282d3b] hover:text-accent font-body-md font-semibold text-xs tracking-wide transition-colors">
                                Lihat Studi Kasus
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>