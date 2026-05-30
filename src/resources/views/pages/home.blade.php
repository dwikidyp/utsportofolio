@extends('layouts.app')

@section('title', 'Home | Portofolio - Dwiki Dzaki Yudi Putra')

@section('footer-logo', 'PORTOFOLIO DWIKI')

@section('content')

{{-- HERO SECTION --}}
<section class="hero">
    <div class="hero-container">
        <span class="hero-label">{{ $home->hero_label }}</span>
        <h1 class="hero-title">
            {!! nl2br(e($home->hero_title)) !!}
        </h1>
        <p class="hero-desc">
            {{ $home->hero_description }}
        </p>
        <div class="hero-actions">
            <a href="{{ $home->button_project_link }}" class="btn-primary">
                {{ $home->button_project_text }}
            </a>
            <a href="{{ $home->button_contact_link }}" class="btn-outline">
                {{ $home->button_contact_text }}
            </a>
        </div>
    </div>
</section>

{{-- ABOUT SECTION --}}
<section class="about">
    <div class="about-container">
        {{-- About Card --}}
        <div class="about-card about-card--text">
            <h2 class="about-card__title">Tentang Saya</h2>
            <p class="about-card__desc">
                {{ $home->about_description }}
            </p>
            <div class="about-card__tags">
                @foreach($home->skills ?? [] as $skill)
                    <span class="tag">{{ $skill }}</span>
                @endforeach
            </div>
            <div class="about-card__avatar">
                <div class="avatar-img" aria-label="Profile photo"></div>
            </div>
        </div>

        {{-- Right column --}}
        <div class="about-right">
            {{-- Presisi card --}}
            <div class="about-card about-card--dark about-card--sm">
                <div class="card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"/><line x1="12" y1="2" x2="12" y2="6"/>
                        <line x1="12" y1="18" x2="12" y2="22"/><line x1="2" y1="12" x2="6" y2="12"/>
                        <line x1="18" y1="12" x2="22" y2="12"/>
                    </svg>
                </div>
                <h3>Presisi</h3>
                <p>Setiap piksel memiliki tujuan dan logika yang kuat.</p>
            </div>

            {{-- Inovasi card --}}
            <div class="about-card about-card--light about-card--sm">
                <div class="card-icon card-icon--blue">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <h3>Inovasi</h3>
                <p>Mendorong batas kreativitas dengan teknologi terbaru.</p>
            </div>

            {{-- Filosofi card --}}
            <div class="about-card about-card--filosofi">
                <div class="filosofi-overlay">
                    <span>Filosofi Kerja Saya</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- SERVICES SECTION --}}
<section class="services">
    <div class="services-container">
        <h2 class="services-title">Keahlian & Layanan</h2>
        <div class="services-list">
            @foreach($home->services ?? [] as $service)
                <div class="service-item">
                    <h3 class="service-name">{{ $service['title'] }}</h3>
                    <p class="service-desc">{{ $service['description'] }}</p>
                    <hr class="service-divider">
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="cta">
    <div class="cta-container">
        <p class="cta-sub">{{ $home->cta_sub }}</p>
        <h2 class="cta-title">
            {{ $home->cta_title }}
        </h2>
        <a href="{{ route('contact') }}" class="btn-cta">
            MULAI PERCAKAPAN
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                <polyline points="22,6 12,13 2,6"/>
            </svg>
        </a>
    </div>
</section>

@endsection
