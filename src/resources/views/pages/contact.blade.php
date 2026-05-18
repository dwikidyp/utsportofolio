@extends('layouts.app')

@section('title', 'Contact | Portfolio - Kinetic Precision')

@section('footer-logo', 'PORTFOLIO')

@section('content')

<section class="contact-hero">
    <div class="contact-hero__container">
        <h1 class="contact-hero__title">Mulai Percakapan.</h1>
        <p class="contact-hero__desc">
            Mari membangun sesuatu yang luar biasa bersama. Saya selalu terbuka untuk
            mendiskusikan proyek baru, ide-ide kreatif, atau peluang untuk menjadi
            bagian dari visi Anda.
        </p>
    </div>
</section>

<section class="contact-main">
    <div class="contact-main__container">

        {{-- LEFT COLUMN --}}
        <div class="contact-info">
            <div class="contact-info__card">
                <h2 class="contact-info__title">Mari Terhubung</h2>
                <p class="contact-info__desc">
                    Gunakan formulir atau hubungi langsung melalui kanal di bawah ini.
                    Saya biasanya merespons dalam waktu 24 jam kerja.
                </p>
                <div class="contact-detail">
                    <div class="contact-detail__item">
                        <span class="contact-detail__icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </span>
                        <div>
                            <span class="contact-detail__label">EMAIL</span>
                            <a href="mailto:hello@portfolio.com" class="contact-detail__value">hello@portfolio.com</a>
                        </div>
                    </div>
                    <div class="contact-detail__item">
                        <span class="contact-detail__icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </span>
                        <div>
                            <span class="contact-detail__label">LOKASI</span>
                            <span class="contact-detail__value">Jakarta, Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-social__card">
                <span class="contact-social__label">TEMUKAN SAYA DI</span>
                <div class="contact-social__grid">
                    <a href="https://linkedin.com" target="_blank" rel="noopener" class="social-link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                            <rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>
                        </svg>
                        LinkedIn
                    </a>
                    <a href="https://github.com" target="_blank" rel="noopener" class="social-link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
                        </svg>
                        GitHub
                    </a>
                    <a href="https://dribbble.com" target="_blank" rel="noopener" class="social-link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"/>
                        </svg>
                        Dribbble
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener" class="social-link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                        </svg>
                        Instagram
                    </a>
                </div>
            </div>

            <div class="contact-image">
                <div class="contact-image__overlay">
                    <span>Contact Me</span>
                    <small>Dwi Kinetic Bali</small>
                </div>
            </div>
        </div>

        {{-- RIGHT COLUMN - FORM --}}
        <div class="contact-form-wrap">
            <h2 class="contact-form__title">Kirim Pesan</h2>

            @if(session('success'))
                <div class="form-alert form-alert--success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="contact-form" id="contactForm">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="nama" class="form-label">NAMA LENGKAP</label>
                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            class="form-input @error('nama') form-input--error @enderror"
                            placeholder="Masukkan nama Anda"
                            value="{{ old('nama') }}"
                            required
                        >
                        @error('nama')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">ALAMAT EMAIL</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-input @error('email') form-input--error @enderror"
                            placeholder="email@contoh.com"
                            value="{{ old('email') }}"
                            required
                        >
                        @error('email')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="subjek" class="form-label">SUBJEK</label>
                    <input
                        type="text"
                        id="subjek"
                        name="subjek"
                        class="form-input @error('subjek') form-input--error @enderror"
                        placeholder="Apa yang ingin Anda diskusikan?"
                        value="{{ old('subjek') }}"
                        required
                    >
                    @error('subjek')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pesan" class="form-label">PESAN ANDA</label>
                    <textarea
                        id="pesan"
                        name="pesan"
                        class="form-textarea @error('pesan') form-input--error @enderror"
                        placeholder="Tuliskan pesan Anda di sini..."
                        rows="5"
                        required
                    >{{ old('pesan') }}</textarea>
                    @error('pesan')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn-send">
                    Kirim Sekarang
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="22" y1="2" x2="11" y2="13"/>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                    </svg>
                </button>
            </form>
        </div>

    </div>
</section>

@endsection
