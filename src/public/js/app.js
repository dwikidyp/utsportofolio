document.addEventListener('DOMContentLoaded', () => {

    // ── Navbar scroll shadow ─────────────────────────────────
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 20);
        }, { passive: true });
    }

    // ── Mobile nav toggle ────────────────────────────────────
    const navToggle = document.getElementById('navToggle');
    const navLinks  = document.querySelector('.nav-links');
    if (navToggle && navLinks) {
        navToggle.addEventListener('click', () => {
            navLinks.classList.toggle('open');
        });
        // close on outside click
        document.addEventListener('click', e => {
            if (!navbar.contains(e.target)) navLinks.classList.remove('open');
        });
    }

    // ── Intersection Observer: fade-in on scroll ─────────────
    const observerOptions = { threshold: 0.12, rootMargin: '0px 0px -40px 0px' };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const animatedEls = document.querySelectorAll(
        '.about-card, .service-item, .project-card, .contact-info__card, .contact-social__card, .contact-form-wrap'
    );
    animatedEls.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity .5s ease, transform .5s ease';
        observer.observe(el);
    });

    // ── Contact form: prevent double-submit ──────────────────
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function () {
            const btn = this.querySelector('.btn-send');
            if (btn) {
                btn.disabled = true;
                btn.textContent = 'Mengirim...';
            }
        });
    }

});
