@extends('layouts.app')

@section('content')
    <section class="relative pt-32 pb-16 overflow-hidden min-h-[50vh] flex flex-col justify-center">
        <!-- Background Layer -->
        <div
            class="absolute inset-0 z-0 bg-background bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-primary/10 via-background to-background">
        </div>

        <div class="max-w-4xl mx-auto px-gutter relative z-10 w-full flex flex-col items-center text-center">
            <div class="mb-6 inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-primary/30 bg-surface/50 backdrop-blur-md reveal-up"
                style="transition-delay: 100ms">
                <span class="font-label-mono text-label-mono text-primary">{{ $project['category'] }}</span>
            </div>
            <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6 max-w-4xl mx-auto leading-tight reveal-up"
                style="transition-delay: 200ms">
                {{ $project['title'] }}
            </h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-10 reveal-up"
                style="transition-delay: 300ms">
                {{ $project['subtitle'] }}
            </p>
            <div class="flex flex-wrap justify-center gap-2 mb-8 reveal-up" style="transition-delay: 400ms">
                @foreach($project['tech'] as $tech)
                    <span
                        class="bg-surface-bright text-on-surface-variant px-4 py-2 rounded-full font-label-mono text-sm border border-white/5">{{ $tech }}</span>
                @endforeach
            </div>
            @if(!empty($project['url']))
                <div class="reveal-up mb-6" style="transition-delay: 450ms">
                    <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-primary/20 text-primary border border-primary/30 hover:bg-primary hover:text-on-primary font-body-md font-semibold text-sm transition-all duration-300">
                        <span class="material-symbols-outlined text-base">language</span>
                        <span>Kunjungi Website Proyek</span>
                        <span class="material-symbols-outlined text-sm">open_in_new</span>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <section class="py-8 relative z-10 -mt-10">
        <div class="max-w-5xl mx-auto px-gutter reveal-up">
            <div
                class="rounded-3xl overflow-hidden shadow-2xl border border-white/5 bg-surface-bright/30 p-2 backdrop-blur-sm">
                @if(!empty($project['url']))
                    <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" class="block relative group cursor-pointer" title="Buka website proyek">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                            class="w-full h-auto rounded-2xl object-cover transition-transform duration-700 group-hover:scale-[1.01]" />
                    </a>
                @else
                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                        class="w-full h-auto rounded-2xl object-cover" />
                @endif
            </div>
        </div>
    </section>

    <section class="py-section-gap relative">
        <div class="max-w-3xl mx-auto px-gutter flex flex-col gap-16">
            <!-- Overview -->
            <div class="reveal-up">
                <h2 class="font-headline-md text-3xl text-on-surface mb-6 flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">info</span>
                    Ringkasan Proyek
                </h2>
                <p class="font-body-lg text-on-surface-variant leading-relaxed">
                    {{ $project['overview'] }}
                </p>
            </div>

            <!-- Challenge -->
            <div class="reveal-up">
                <h2 class="font-headline-md text-3xl text-on-surface mb-6 flex items-center gap-3">
                    <span class="material-symbols-outlined text-error" style="color: #ef4444;">warning</span>
                    Tantangan &amp; Masalah
                </h2>
                <div class="glass-panel p-8 rounded-2xl border-l-4" style="border-left-color: #ef4444;">
                    <p class="font-body-lg text-on-surface-variant leading-relaxed">
                        {{ $project['challenge'] }}
                    </p>
                </div>
            </div>

            <!-- Solution -->
            <div class="reveal-up">
                <h2 class="font-headline-md text-3xl text-on-surface mb-6 flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">lightbulb</span>
                    Solusi yang Diterapkan
                </h2>
                <div class="glass-panel p-8 rounded-2xl border-l-4 border-primary">
                    <p class="font-body-lg text-on-surface-variant leading-relaxed">
                        {{ $project['solution'] }}
                    </p>
                </div>
            </div>

            <!-- Impact -->
            <div class="reveal-up">
                <h2 class="font-headline-md text-3xl text-on-surface mb-6 flex items-center gap-3">
                    <span class="material-symbols-outlined text-surface-tint">trending_up</span>
                    Dampak &amp; Hasil
                </h2>
                <p class="font-body-lg text-on-surface-variant leading-relaxed">
                    {{ $project['impact'] }}
                </p>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 relative text-center border-t border-white/5 bg-surface-bright/20">
        <div class="max-w-2xl mx-auto px-gutter reveal-up">
            <h3 class="font-headline-md text-2xl text-on-surface mb-6">Tertarik membangun sistem serupa?</h3>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a class="inline-flex items-center justify-center px-8 py-3 rounded-full bg-primary text-on-primary font-body-md font-bold hover:bg-secondary hover:scale-95 transition-all duration-300"
                    href="{{ url('/#contact') }}">
                    Hubungi Saya
                </a>
                @if(!empty($project['url']))
                    <a class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-full bg-surface-bright text-on-surface hover:text-primary border border-white/10 hover:border-primary/40 font-body-md font-semibold hover:scale-95 transition-all duration-300"
                        href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer">
                        <span>Kunjungi Website</span>
                        <span class="material-symbols-outlined text-base">open_in_new</span>
                    </a>
                @endif
            </div>
        </div>
    </section>
@endsection