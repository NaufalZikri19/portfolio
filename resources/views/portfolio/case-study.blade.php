@extends('layouts.app')

@section('content')
    <!-- Case Study Hero -->
    <section class="relative pt-28 pb-12 overflow-hidden border-b border-[#1c202a] bg-[#08090c]">
        <div class="max-w-container-max mx-auto px-gutter relative z-10 w-full">

            <!-- Breadcrumb Navigation -->
            <div class="mb-6 flex items-center gap-2 text-xs font-label-mono reveal-up">
                <a href="{{ url('/') }}" class="text-on-surface-subtle hover:text-white transition-colors">
                    Beranda
                </a>
                <span class="text-on-surface-subtle">/</span>
                <span class="text-accent font-medium">Studi Kasus</span>
            </div>

            <!-- Header Info -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end pb-8 border-b border-[#1c202a] reveal-up">
                <div class="lg:col-span-8">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#0f1117] border border-[#1c202a] mb-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                        <span class="font-label-mono text-xs text-accent font-medium">{{ $project['category'] }}</span>
                    </div>

                    <h1 class="font-headline-md font-bold text-3xl sm:text-4xl md:text-5xl text-white tracking-tight mb-3">
                        {{ $project['title'] }}
                    </h1>

                    <p class="font-body-md text-base sm:text-lg text-accent leading-relaxed max-w-3xl">
                        {{ $project['subtitle'] }}
                    </p>
                </div>

                <div class="lg:col-span-4 flex flex-col lg:items-end gap-3">
                    @if(!empty($project['url']))
                        <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer"
                            class="min-h-[42px] inline-flex items-center justify-center px-6 py-2.5 rounded-full bg-accent text-on-accent font-body-md font-semibold text-xs tracking-wide hover:bg-accent-hover transition-colors w-full sm:w-auto">
                            Kunjungi Website Live
                        </a>
                    @endif
                    <div class="text-xs font-label-mono text-on-surface-subtle">
                        Rekayasa Sistem oleh Naufal Zikri Hilmy
                    </div>
                </div>
            </div>

            <!-- Tech Stack Specifications -->
            <div class="pt-6 flex flex-wrap items-center gap-2 reveal-up">
                <span class="font-label-mono text-xs text-on-surface-subtle mr-2">Teknologi:</span>
                @foreach($project['tech'] as $tech)
                    <span class="px-2.5 py-1 rounded text-xs font-label-mono bg-[#0f1117] border border-[#1c202a] text-white">
                        {{ $tech }}
                    </span>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Screenshot Frame -->
    <section class="py-10 bg-[#08090c] border-b border-[#1c202a]">
        <div class="max-w-container-max mx-auto px-gutter reveal-up">
            <div class="rounded-lg overflow-hidden border border-[#1c202a] bg-[#0f1117] p-2 sm:p-4">
                @if(!empty($project['url']))
                    <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" class="block"
                        title="Buka website produksi live">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                            class="w-full h-auto rounded border border-[#1c202a] object-contain transition-opacity hover:opacity-95" />
                    </a>
                @else
                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                        class="w-full h-auto rounded border border-[#1c202a] object-contain" />
                @endif
            </div>
        </div>
    </section>

    <!-- Case Study Ledger Breakdown -->
    <section class="py-section-gap bg-[#08090c]">
        <div class="max-w-4xl mx-auto px-gutter flex flex-col gap-10 sm:gap-12">

            <!-- 01 Overview -->
            <div class="p-6 sm:p-8 rounded-lg bg-[#0f1117] border border-[#1c202a] reveal-up">
                <div class="flex items-center gap-3 mb-4 pb-3 border-b border-[#1c202a]">
                    <span class="font-headline-md font-bold text-base text-accent">01</span>
                    <h2 class="font-headline-md font-bold text-lg sm:text-xl text-white tracking-tight">
                        Ringkasan Arsitektur &amp; Tujuan
                    </h2>
                </div>
                <p class="font-body-md text-sm sm:text-base text-on-surface-variant leading-relaxed">
                    {{ $project['overview'] }}
                </p>
            </div>

            <!-- 02 Challenge -->
            <div class="p-6 sm:p-8 rounded-lg bg-[#0f1117] border border-[#1c202a] reveal-up">
                <div class="flex items-center gap-3 mb-4 pb-3 border-b border-[#1c202a]">
                    <span class="font-headline-md font-bold text-base text-accent">02</span>
                    <h2 class="font-headline-md font-bold text-lg sm:text-xl text-white tracking-tight">
                        Tantangan &amp; Kendala Operasional
                    </h2>
                </div>
                <p class="font-body-md text-sm sm:text-base text-on-surface-variant leading-relaxed">
                    {{ $project['challenge'] }}
                </p>
            </div>

            <!-- 03 Solution -->
            <div class="p-6 sm:p-8 rounded-lg bg-[#0f1117] border border-[#1c202a] reveal-up">
                <div class="flex items-center gap-3 mb-4 pb-3 border-b border-[#1c202a]">
                    <span class="font-headline-md font-bold text-base text-accent">03</span>
                    <h2 class="font-headline-md font-bold text-lg sm:text-xl text-white tracking-tight">
                        Solusi Teknis yang Diterapkan
                    </h2>
                </div>
                <p class="font-body-md text-sm sm:text-base text-on-surface-variant leading-relaxed">
                    {{ $project['solution'] }}
                </p>
            </div>

            <!-- 04 Impact -->
            <div class="p-6 sm:p-8 rounded-lg bg-[#161922] border border-[#1c202a] reveal-up">
                <div class="flex items-center gap-3 mb-4 pb-3 border-b border-[#1c202a]">
                    <span class="font-headline-md font-bold text-base text-accent">04</span>
                    <h2 class="font-headline-md font-bold text-lg sm:text-xl text-white tracking-tight">
                        Dampak &amp; Hasil Terukur
                    </h2>
                </div>
                <p class="font-body-md text-sm sm:text-base text-white leading-relaxed">
                    {{ $project['impact'] }}
                </p>
            </div>

        </div>
    </section>

    <!-- Bottom Call to Action -->
    <section class="py-16 bg-[#08090c] border-t border-[#1c202a]">
        <div class="max-w-container-max mx-auto px-gutter text-center reveal-up">
            <span class="font-label-mono text-xs text-accent font-medium uppercase tracking-wider block mb-2">
                Tertarik Mengembangkan Sistem Serupa?
            </span>
            <h3 class="font-headline-md font-bold text-2xl sm:text-3xl text-white tracking-tight mb-8">
                Diskusikan Kebutuhan Arsitektur Digital Anda
            </h3>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a class="min-h-[44px] inline-flex items-center justify-center px-6 py-2.5 rounded-full bg-accent text-on-accent font-body-md font-semibold text-xs tracking-wide hover:bg-accent-hover transition-colors"
                    href="{{ url('/#contact') }}">
                    Mulai Diskusi
                </a>
                <a class="min-h-[44px] inline-flex items-center justify-center px-6 py-2.5 rounded-full bg-[#0f1117] text-white border border-[#1c202a] hover:border-[#282d3b] hover:text-accent font-body-md font-semibold text-xs tracking-wide transition-colors"
                    href="{{ url('/#projects') }}">
                    Kembali ke Portofolio
                </a>
            </div>
        </div>
    </section>
@endsection