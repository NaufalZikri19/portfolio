<!-- Footer (Dark Editorial Monograph) -->
<footer class="bg-[#060709] border-t border-[#1c222d] py-12">
    <div class="max-w-container-max mx-auto px-gutter flex flex-col gap-8">
        
        <!-- Top Row: Brand & Quick Navigation -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 pb-8 border-b border-[#1c222d]">
            <div>
                <a class="font-headline-md text-lg sm:text-xl font-black text-white hover:text-primary transition-colors flex items-center tracking-tight uppercase"
                    href="{{ url('/') }}">
                    NAUFAL ZIKRI HILMY<span class="text-primary text-xl font-black leading-none ml-0.5">.</span>
                </a>
                <span class="font-label-mono text-xs text-on-surface-subtle mt-1 block uppercase">
                    S1 SISTEM INFORMASI &bull; TELKOM UNIVERSITY (IPK 3.82) &bull; BNSP CWDev
                </span>
            </div>

            <!-- Nav Links -->
            <div class="flex flex-wrap gap-x-6 gap-y-2 text-xs font-label-mono text-on-surface-variant uppercase tracking-wider">
                <a class="hover:text-primary transition-colors" href="#">Beranda</a>
                <a class="hover:text-primary transition-colors" href="#about">Tentang</a>
                <a class="hover:text-primary transition-colors" href="#experience">Pengalaman</a>
                <a class="hover:text-primary transition-colors" href="#projects">Proyek</a>
                <a class="hover:text-primary transition-colors" href="#techstack">Tech Stack</a>
                <a class="hover:text-primary transition-colors" href="#services">Layanan</a>
                <a class="hover:text-primary transition-colors" href="#contact">Kontak</a>
            </div>
        </div>

        <!-- Bottom Row: Coordinates, Copyright & Socials -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 text-xs font-label-mono text-on-surface-subtle">
            <div class="flex items-center gap-2">
                <span class="text-primary font-bold">▪▪</span>
                <span>COORD: 7.4244&deg; S, 109.2302&deg; E &bull; PURWOKERTO, JAWA TENGAH, ID</span>
            </div>

            <div class="flex items-center gap-4">
                <a href="https://github.com/NaufalZikri19" target="_blank" rel="noopener noreferrer" class="hover:text-primary transition-colors" title="GitHub">GitHub</a>
                <span class="text-[#2d3545]">&bull;</span>
                <a href="https://www.linkedin.com/in/naufal-zikri-hilmy-4a37bb251" target="_blank" rel="noopener noreferrer" class="hover:text-primary transition-colors" title="LinkedIn">LinkedIn</a>
                <span class="text-[#2d3545]">&bull;</span>
                <a href="https://wa.me/6282198487319" target="_blank" rel="noopener noreferrer" class="hover:text-primary transition-colors" title="WhatsApp">WhatsApp</a>
                <span class="text-[#2d3545]">&bull;</span>
                <a href="mailto:naufal.zikri19@gmail.com" class="hover:text-primary transition-colors" title="Email">Email</a>
            </div>

            <div>
                &copy; {{ date('Y') }} Naufal Zikri Hilmy. All rights reserved.
            </div>
        </div>

    </div>
</footer>
