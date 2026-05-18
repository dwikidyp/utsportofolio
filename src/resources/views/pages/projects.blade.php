@extends('layouts.app')

@section('title', 'Projects | Portfolio - Kinetic Precision')

@section('footer-logo', 'PORTFOLIO')

@section('content')

<section class="projects-hero">
    <div class="projects-hero__container">
        <h1 class="projects-hero__title">Pameran Karya</h1>
        <p class="projects-hero__desc">
            Kumpulan proyek terpilih yang menggabungkan presisi teknis dengan estetika minimalis.
            Fokus pada solusi digital yang berdampak tinggi.
        </p>
    </div>
</section>

{{-- FILTER --}}
<section class="projects-filter">
    <div class="filter-container">
        <span class="filter-label">FILTER:</span>
        <div class="filter-tabs" id="filterTabs">
            <button class="filter-tab active" data-filter="all">Semua</button>
            <button class="filter-tab" data-filter="uiux">UI/UX Design</button>
            <button class="filter-tab" data-filter="branding">Branding</button>
            <button class="filter-tab" data-filter="webdev">Web Development</button>
        </div>
    </div>
</section>

{{-- PROJECTS GRID --}}
<section class="projects-grid-section">
    <div class="projects-grid" id="projectsGrid">

        {{-- Project 1 --}}
        <div class="project-card" data-category="uiux">
            <div class="project-card__image project-card__image--elevate">
                <div class="project-mockup">
                    <div class="mockup-screen">
                        <div class="mockup-topbar"></div>
                        <div class="mockup-content">
                            <div class="mockup-sidebar"></div>
                            <div class="mockup-body">
                                <div class="mockup-row"></div>
                                <div class="mockup-row mockup-row--wide"></div>
                                <div class="mockup-row"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-card__meta">
                <span class="project-tag project-tag--uiux">UI/UX</span>
                <span class="project-tag project-tag--year">2024</span>
            </div>
            <h3 class="project-card__title">Sistem Desain Elevate</h3>
            <p class="project-card__desc">
                Membangun fondasi visual yang konsisten untuk platform SaaS skala global
                dengan fokus pada aksesibilitas.
            </p>
            <a href="#" class="project-link">LIHAT PROYEK</a>
        </div>

        {{-- Project 2 --}}
        <div class="project-card" data-category="branding">
            <div class="project-card__image project-card__image--aurora">
                <div class="branding-mockup">
                    <div class="brand-box brand-box--lg"></div>
                    <div class="brand-box brand-box--sm"></div>
                    <div class="brand-box brand-box--card"></div>
                </div>
            </div>
            <div class="project-card__meta">
                <span class="project-tag project-tag--branding">BRANDING</span>
                <span class="project-tag project-tag--year">2023</span>
            </div>
            <h3 class="project-card__title">Identitas Visual Aurora</h3>
            <p class="project-card__desc">
                Rebranding untuk agensi kreatif yang mengedepankan kesederhanaan
                dan ketajaman visi di pasar modern.
            </p>
            <a href="#" class="project-link">LIHAT PROYEK</a>
        </div>

        {{-- Project 3 --}}
        <div class="project-card" data-category="webdev">
            <div class="project-card__image project-card__image--flux">
                <div class="dashboard-mockup">
                    <div class="dash-header"></div>
                    <div class="dash-charts">
                        <div class="dash-chart dash-chart--bar"></div>
                        <div class="dash-chart dash-chart--line"></div>
                    </div>
                    <div class="dash-stats">
                        <div class="dash-stat"></div>
                        <div class="dash-stat"></div>
                        <div class="dash-stat"></div>
                    </div>
                </div>
            </div>
            <div class="project-card__meta">
                <span class="project-tag project-tag--webdev">WEB DEV</span>
                <span class="project-tag project-tag--year">2024</span>
            </div>
            <h3 class="project-card__title">Dashboard Analitik Flux</h3>
            <p class="project-card__desc">
                Interface aplikasi web yang kompleks namun intuitif, dirancang untuk
                mengelola data real-time dalam jumlah besar.
            </p>
            <a href="#" class="project-link">LIHAT PROYEK</a>
        </div>

        {{-- Project 4 --}}
        <div class="project-card" data-category="uiux">
            <div class="project-card__image project-card__image--zen">
                <div class="mobile-mockup">
                    <div class="mobile-device mobile-device--1">
                        <div class="mobile-screen"></div>
                    </div>
                    <div class="mobile-device mobile-device--2">
                        <div class="mobile-screen mobile-screen--2"></div>
                    </div>
                    <div class="mobile-device mobile-device--3">
                        <div class="mobile-screen"></div>
                    </div>
                </div>
            </div>
            <div class="project-card__meta">
                <span class="project-tag project-tag--uiux">UI/UX</span>
                <span class="project-tag project-tag--year">2023</span>
            </div>
            <h3 class="project-card__title">Aplikasi Gaya Hidup Zen</h3>
            <p class="project-card__desc">
                Pengalaman mobile yang tenang dan terfokus, menghilangkan distraksi visual
                untuk meningkatkan kesejahteraan pengguna.
            </p>
            <a href="#" class="project-link">LIHAT PROYEK</a>
        </div>

    </div>
</section>

{{-- CTA SECTION --}}
<section class="cta cta--dark">
    <div class="cta-container cta-container--center">
        <h2 class="cta-title cta-title--white">Punya Proyek Luar Biasa?</h2>
        <p class="cta-sub cta-sub--light">
            Mari berkolaborasi untuk mewujudkan ide Anda menjadi produk digital yang presisi dan berkelas.
        </p>
        <a href="{{ route('contact') }}" class="btn-outline-white">MULAI DISKUSI</a>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Filter tabs logic
    const tabs = document.querySelectorAll('.filter-tab');
    const cards = document.querySelectorAll('.project-card');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const filter = tab.dataset.filter;
            cards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.opacity = '0';
                    card.style.display = 'block';
                    setTimeout(() => { card.style.opacity = '1'; }, 10);
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => { card.style.display = 'none'; }, 300);
                }
            });
        });
    });
</script>
@endpush
