@extends('layouts.app')

@section('title', 'Progress | Portfolio - Dwiki Dzaki Yudi Putra')

@section('footer-logo', 'PORTFOLIO')

@section('content')

<section class="projects-hero">
    <div class="projects-hero__container">
        <h1 class="progress-hero__title">SISTEM APPROVAL DAN WORKFLOW DOKUMEN KAMPUS BERBASIS WEB MENGGUNAKAN LARAVEL DAN FILAMENT</h1>
        <p class="progress-hero__desc">
            Perkembangan teknologi informasi pada era digital telah membawa perubahan besar dalam berbagai aspek kehidupan, termasuk pada sektor pendidikan tinggi. Perguruan tinggi dituntut untuk mampu menyediakan layanan administrasi yang cepat, efektif, transparan, dan terintegrasi guna mendukung kegiatan akademik mahasiswa maupun dosen. Salah satu aspek administrasi yang memiliki peran penting adalah proses pengajuan dan persetujuan dokumen akademik.
            Dalam lingkungan kampus, proses administrasi dokumen seperti pengajuan surat aktif kuliah, proposal tugas akhir, surat izin penelitian, seminar proposal, dan berbagai dokumen akademik lainnya masih banyak dilakukan secara manual. Mahasiswa umumnya harus mencetak dokumen, mendatangi dosen pembimbing atau pihak administrasi secara langsung, kemudian menunggu proses persetujuan yang terkadang memerlukan waktu cukup lama. Proses tersebut sering menimbulkan berbagai kendala, seperti keterlambatan approval, kehilangan dokumen, kesalahan pencatatan data, serta kurangnya transparansi terhadap status pengajuan dokumen.
        </p>
    </div>
</section>

{{-- FILTER --}}
<section class="projects-filter">
    <div class="filter-container">
        <span class="filter-label">TEKNOLOGI:</span>
        <div class="filter-tabs" id="filterTabs">
            <button class="filter-tab active" data-filter="all">Semua</button>
            <button class="filter-tab" data-filter="laravel">Laravel</button>
            <button class="filter-tab" data-filter="filament">Filament V3</button>
            <button class="filter-tab" data-filter="livewire">LiveWire</button>
            <button class="filter-tab" data-filter="mariadb">MariaDB</button>
            <button class="filter-tab" data-filter="docker">Docker</button>
        </div>
    </div>
</section>

{{-- PROJECTS GRID --}}
<section class="projects-grid-section">
    <div class="projects-grid" id="projectsGrid">

        {{-- Project 1 --}}
        <div class="project-card" data-category="laravel">
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
                <span class="project-tag project-tag--uiux">Laravel</span>
                <span class="project-tag project-tag--year">2025</span>
            </div>
            <h3 class="project-card__title">Laravel</h3>
            <p class="project-card__desc">
                Laravel merupakan framework PHP berbasis MVC (Model View Controller) yang digunakan untuk membangun backend aplikasi web.
            </p>
        </div>

        {{-- Project 2 --}}
        <div class="project-card" data-category="filament">
            <div class="project-card__image project-card__image--aurora">
                <div class="branding-mockup">
                    <div class="brand-box brand-box--lg"></div>
                    <div class="brand-box brand-box--sm"></div>
                    <div class="brand-box brand-box--card"></div>
                </div>
            </div>
            <div class="project-card__meta">
                <span class="project-tag project-tag--branding">Filament V3</span>
                <span class="project-tag project-tag--year">2024</span>
            </div>
            <h3 class="project-card__title">Filament V3</h3>
            <p class="project-card__desc">
                Filament v3 adalah admin panel berbasis Laravel yang digunakan untuk membangun dashboard dan manajemen data secara cepat.
            </p>
        </div>

        {{-- Project 3 --}}
        <div class="project-card" data-category="livewire">
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
                <span class="project-tag project-tag--webdev">LIVEWIRE</span>
                <span class="project-tag project-tag--year">2025</span>
            </div>
            <h3 class="project-card__title">Livewire</h3>
            <p class="project-card__desc">
                Livewire merupakan framework full-stack Laravel yang digunakan untuk membuat antarmuka interaktif tanpa banyak menggunakan JavaScript.
            </p>
        </div>

        {{-- Project 4 --}}
        <div class="project-card" data-category="mariadb">
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
                <span class="project-tag project-tag--uiux">MariaDB</span>
                <span class="project-tag project-tag--year">2024</span>
            </div>
            <h3 class="project-card__title">MariaDB</h3>
            <p class="project-card__desc">
                MariaDB adalah sistem manajemen basis data relasional (RDBMS) yang digunakan untuk menyimpan dan mengelola data aplikasi.
            </p>
        </div>

        {{-- Project 5 --}}
        <div class="project-card" data-category="docker">
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
                <span class="project-tag project-tag--uiux">Docker</span>
                <span class="project-tag project-tag--year">2025</span>
            </div>
            <h3 class="project-card__title">Docker</h3>
            <p class="project-card__desc">
                Docker digunakan sebagai container development environment untuk menjalankan aplikasi secara konsisten di berbagai perangkat.
            </p>
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
