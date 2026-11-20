@extends('layouts.app')

@section('content')
    <!-- Case Study Editorial Hero -->
    <section class="relative pt-32 pb-16 overflow-hidden border-b border-[#1c222d] bg-[#060709]">
        <div class="max-w-container-max mx-auto px-gutter relative z-10 w-full">
            
            <!-- Breadcrumb Navigation -->
            <div class="mb-8 flex items-center gap-3 text-xs font-label-mono reveal-up">
                <a href="{{ url('/') }}" class="text-on-surface-subtle hover:text-accent transition-colors flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">arrow_back</span>
                    <span>BERANDA</span>
                </a>
                <span class="text-on-surface-subtle">/</span>
                <span class="text-accent font-semibold uppercase">STUDI KASUS PROYEK</span>
            </div>

            <!-- Header Monograph -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end pb-8 border-b border-[#1c222d] reveal-up">
                <div class="lg:col-span-8">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#13171f] border border-[#2d3545] mb-4">
                        <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                        <span class="font-label-mono text-xs text-accent font-semibold uppercase tracking-wider">{{ $project['category'] }}</span>
                    </div>
                    <h1 class="font-headline-md font-black text-3xl sm:text-5xl md:text-6xl text-white uppercase tracking-tight mb-4">
                        {{ $project['title'] }}
                    </h1>
                    <p class="font-body-md text-base sm:text-xl text-primary font-medium leading-relaxed max-w-3xl">
                        {{ $project['subtitle'] }}
                    </p>
                </div>

                <div class="lg:col-span-4 flex flex-col lg:items-end gap-4">
                    @if(!empty($project['url']))
                        <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer"
                            class="min-h-[48px] inline-flex items-center justify-center gap-2 px-8 py-3 rounded-full bg-accent text-on-accent font-body-md font-bold text-xs uppercase tracking-wider hover:bg-accent-hover active:scale-95 transition-all w-full sm:w-auto">
                            <span>Kunjungi Website Live</span>
                            <span class="material-symbols-outlined text-base">open_in_new</span>
                        </a>
                    @endif
                    <div class="text-xs font-label-mono text-on-surface-subtle">
                        REKAYASA SISTEM OLEH NAUFAL ZIKRI HILMY
                    </div>
                </div>
            </div>

            <!-- Tech Stack Specifications Ledger -->
            <div class="pt-6 flex flex-wrap items-center gap-2 reveal-up">
                <span class="font-label-mono text-xs text-on-surface-subtle uppercase tracking-wider mr-2">TECH SPEC:</span>
                @foreach($project['tech'] as $tech)
                    <span class="px-3 py-1 rounded-md text-xs font-label-mono bg-[#13171f] border border-[#2d3545] text-white">
                        {{ $tech }}
                    </span>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Screenshot Feature Frame -->
    <section class="py-12 bg-[#060709] border-b border-[#1c222d]">
        <div class="max-w-container-max mx-auto px-gutter reveal-up">
            <div class="rounded-2xl overflow-hidden border border-[#1c222d] bg-[#0c0e12] p-2 sm:p-4">
                @if(!empty($project['url']))
                    <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" class="block relative group cursor-pointer" title="Buka website produksi live">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                            class="w-full h-auto rounded-xl object-cover border border-[#1c222d] transition-transform duration-700 group-hover:scale-[1.01]" />
                        <div class="absolute inset-0 bg-[#060709]/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="px-5 py-2.5 rounded-full bg-primary text-on-primary font-label-mono text-xs font-bold uppercase tracking-wider flex items-center gap-2">
                                <span>Buka {{ parse_url($project['url'], PHP_URL_HOST) }}</span>
                                <span class="material-symbols-outlined text-sm">open_in_new</span>
                            </span>
                        </div>
                    </a>
                @else
                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                        class="w-full h-auto rounded-xl object-cover border border-[#1c222d]" />
                @endif
            </div>
        </div>
    </section>

    <!-- In-depth Case Study Ledger Breakdown -->
    <section class="py-section-gap bg-[#060709]">
        <div class="max-w-4xl mx-auto px-gutter flex flex-col gap-12 sm:gap-16">
            
            <!-- 01 Overview -->
            <div class="p-6 sm:p-10 rounded-2xl bg-[#0c0e12] border border-[#1c222d] reveal-up">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-[#1c222d]">
                    <span class="font-label-mono text-xs text-accent font-bold">01 // OVERVIEW</span>
                    <h2 class="font-headline-md font-bold text-xl sm:text-2xl text-white uppercase tracking-tight">
                        Ringkasan Arsitektur &amp; Tujuan
                    </h2>
                </div>
                <p class="font-body-md text-base sm:text-lg text-on-surface-variant leading-relaxed">
                    {{ $project['overview'] }}
                </p>
            </div>

            <!-- 02 Challenge -->
            <div class="p-6 sm:p-10 rounded-2xl bg-[#0c0e12] border border-[#1c222d] reveal-up">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-[#1c222d]">
                    <span class="font-label-mono text-xs text-amber-400 font-bold">02 // PROBLEM STATEMENT</span>
                    <h2 class="font-headline-md font-bold text-xl sm:text-2xl text-white uppercase tracking-tight">
                        Tantangan &amp; Kendala Operasional
                    </h2>
                </div>
                <p class="font-body-md text-base sm:text-lg text-on-surface-variant leading-relaxed">
                    {{ $project['challenge'] }}
                </p>
            </div>

            <!-- 03 Solution -->
            <div class="p-6 sm:p-10 rounded-2xl bg-[#0c0e12] border border-[#1c222d] reveal-up">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-[#1c222d]">
                    <span class="font-label-mono text-xs text-accent font-bold">03 // ENGINEERING SOLUTION</span>
                    <h2 class="font-headline-md font-bold text-xl sm:text-2xl text-white uppercase tracking-tight">
                        Solusi Teknis yang Diterapkan
                    </h2>
                </div>
                <p class="font-body-md text-base sm:text-lg text-on-surface-variant leading-relaxed">
                    {{ $project['solution'] }}
                </p>
            </div>

            <!-- 04 Impact -->
            <div class="p-6 sm:p-10 rounded-2xl bg-[#13171f] border border-[#2d3545] reveal-up">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-[#2d3545]">
                    <span class="font-label-mono text-xs text-accent font-bold">04 // MEASURABLE OUTCOMES</span>
                    <h2 class="font-headline-md font-bold text-xl sm:text-2xl text-white uppercase tracking-tight">
                        Dampak &amp; Hasil Terukur
                    </h2>
                </div>
                <p class="font-body-md text-base sm:text-lg text-primary font-medium leading-relaxed">
                    {{ $project['impact'] }}
                </p>
            </div>

        </div>
    </section>

    <!-- Bottom Editorial Call to Action -->
    <section class="py-16 bg-[#060709] border-t border-[#1c222d]">
        <div class="max-w-container-max mx-auto px-gutter text-center reveal-up">
            <span class="font-label-mono text-xs text-accent font-bold uppercase tracking-[0.2em] block mb-3">
                TERTARIK MENGEMBANGKAN SISTEM SERUPA?
            </span>
            <h3 class="font-headline-md font-black text-2xl sm:text-4xl text-white uppercase tracking-tight mb-8">
                DISKUSIKAN KEBUTUHAN ARSITEKTUR DIGITAL ANDA
            </h3>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a class="min-h-[48px] inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-accent text-on-accent font-body-md font-bold text-xs uppercase tracking-wider hover:bg-accent-hover active:scale-95 transition-all"
                    href="{{ url('/#contact') }}">
                    Mulai Diskusi Sekarang
                </a>
                <a class="min-h-[48px] inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-[#13171f] text-white border border-[#2d3545] hover:border-accent font-body-md font-semibold text-xs uppercase tracking-wider active:scale-95 transition-all"
                    href="{{ url('/#projects') }}">
                    &larr; Kembali ke Daftar Portofolio
                </a>
            </div>
        </div>
    </section>
@endsection
