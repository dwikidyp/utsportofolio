<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Designer Multidisiplin - Membangun masa depan melalui presisi visual dan strategi desain yang berpusat pada manusia.">
    <meta name="keywords" content="portfolio, designer, UI UX, branding, web development, Jakarta">
    <meta name="author" content="Kinetic Precision">
    <title>@yield('title', 'Portfolio | Kinetic Precision')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('head')
</head>
<body>

    {{-- NAVBAR --}}
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-logo">PORTOFOLIO</a>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a></li>
                <li><a href="{{ route('progress') }}" class="{{ request()->routeIs('progress') ? 'active' : '' }}">Progress Projects</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
            <a href="{{ route('contact') }}" class="btn-hire">Hire Me</a>
            <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="footer">
        <div class="footer-container">
            <span class="footer-logo">@yield('footer-logo', 'PORTOFOLIO DWIKI')</span>
            <ul class="footer-links">
                <li><a href="https://linkedin.com" target="_blank" rel="noopener">Linkedin</a></li>
                <li><a href="https://github.com" target="_blank" rel="noopener">GitHub</a></li>
                <li><a href="https://dribbble.com" target="_blank" rel="noopener">Dribbble</a></li>
                @if(request()->routeIs('projects') || request()->routeIs('contact'))
                    <li><a href="mailto:hello@portfolio.com">hello@portfolio.com</a></li>
                @endif
            </ul>
            <p class="footer-copy">© By Dwiki Dzaki Yudi Putra. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
