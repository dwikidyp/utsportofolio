@php
use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.app')

@section('title', 'Progress | Portfolio - Dwiki Dzaki Yudi Putra')

@section('footer-logo', 'PORTFOLIO')

@section('content')

<section class="projects-hero">
    <div class="projects-hero__container">
        @php
        $mainProject = $progressProjects->first();
        @endphp

        <h1 class="progress-hero__title">
            {{ $mainProject?->title }}
        </h1>

        <p class="progress-hero__desc">
            {{ $mainProject?->description }}
        </p>
    </div>
</section>

{{-- FILTER --}}
<section class="projects-filter">
    <div class="filter-container">
        <span class="filter-label">TEKNOLOGI:</span>
        <div class="filter-tabs" id="filterTabs">
            <button class="filter-tab active" data-filter="all">
                Semua
            </button>

            @foreach($progressProjects->pluck('technology')->unique() as $technology)
                <button
                    class="filter-tab"
                    data-filter="{{ strtolower($technology) }}"
                >
                    {{ $technology }}
                </button>
            @endforeach
        </div>
    </div>
</section>

{{-- PROJECTS GRID --}}
<section class="projects-grid-section">
    <div class="projects-grid" id="projectsGrid">

        <div class="projects-grid" id="projectsGrid">

            @foreach($progressProjects as $project)

                <div
                    class="project-card"
                    data-category="{{ strtolower($project->technology) }}"
                >

                    <div class="project-card__image">

                        @if($project->image)
                            <img
                                src="{{ Storage::url($project->image) }}"
                                alt="{{ $project->title }}"
                                style="width:100%;height:100%;object-fit:cover;"
                            >
                        @endif

                    </div>

                    <div class="project-card__meta">
                        <span class="project-tag">
                            {{ $project->technology }}
                        </span>

                        <span class="project-tag project-tag--year">
                            {{ $project->year }}
                        </span>
                    </div>

                    <h3 class="project-card__title">
                        {{ $project->title }}
                    </h3>

                    <p class="project-card__desc">
                        {{ $project->description }}
                    </p>

                </div>

            @endforeach

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
