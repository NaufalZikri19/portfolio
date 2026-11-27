<!-- Footer (Clean Structured Minimal) -->
<footer class="bg-[#08090c] border-t border-[#1c202a] pt-12 pb-24 md:py-12">
    <div class="max-w-container-max mx-auto px-gutter flex flex-col gap-8">

        <!-- Top Row: Brand & Quick Navigation -->
        <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 pb-8 border-b border-[#1c202a]">
            <div>
                <a class="font-headline-md text-base sm:text-lg font-bold text-white hover:text-accent transition-colors flex items-center tracking-tight"
                    href="{{ url('/') }}">
                    NAUFAL ZIKRI HILMY<span class="text-accent ml-0.5">.</span>
                </a>
                <span class="font-label-mono text-xs text-on-surface-subtle mt-1.5 block">
                    S1 Sistem Informasi Telkom University (IPK 3.82) • BNSP CWDev
                </span>
            </div>

            <!-- Nav Links -->
            <div class="flex flex-wrap gap-x-6 gap-y-2 text-xs font-label-mono text-on-surface-variant">
                <a class="hover:text-accent transition-colors" href="#">Beranda</a>
                <a class="hover:text-accent transition-colors" href="#about">Tentang</a>
                <a class="hover:text-accent transition-colors" href="#experience">Pengalaman</a>
                <a class="hover:text-accent transition-colors" href="#projects">Proyek</a>
                <a class="hover:text-accent transition-colors" href="#techstack">Tech Stack</a>
                <a class="hover:text-accent transition-colors" href="#services">Layanan</a>
                <a class="hover:text-accent transition-colors" href="#contact">Kontak</a>
            </div>
        </div>

        <!-- Bottom Row: Location, Socials & Copyright -->
        <div
            class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 text-xs font-label-mono text-on-surface-subtle">
            <div>
                Purwokerto, Jawa Tengah, Indonesia
            </div>

            <div class="flex items-center gap-4">
                <a href="https://github.com/NaufalZikri19" target="_blank" rel="noopener noreferrer"
                    class="hover:text-accent transition-colors">GitHub</a>
                <span class="text-border-light">•</span>
                <a href="https://www.linkedin.com/in/naufal-zikri-hilmy-4a37bb251" target="_blank"
                    rel="noopener noreferrer" class="hover:text-accent transition-colors">LinkedIn</a>
                <span class="text-border-light">•</span>
                <a href="https://wa.me/6282198487319" target="_blank" rel="noopener noreferrer"
                    class="hover:text-accent transition-colors">WhatsApp</a>
                <span class="text-border-light">•</span>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=naufal.zikri19@gmail.com&su=Inquiry%20Rekrutmen%20/%20Proyek%20-%20Naufal%20Zikri"
                    target="_blank" rel="noopener noreferrer" class="hover:text-accent transition-colors">Email</a>
            </div>

            <div>
                &copy; {{ date('Y') }} Naufal Zikri Hilmy. All rights reserved.
            </div>
        </div>

    </div>
</footer>