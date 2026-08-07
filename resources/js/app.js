import './bootstrap';

/**
 * NTFC — Advanced UI Animations & Micro-Interactions
 * Features: Spotlight Cursor, Magnetic Buttons, Staggered Reveals, Parallax, Counter UP
 */

document.addEventListener('DOMContentLoaded', () => {

    // ── Spotlight Ambient Cursor Glow ──────────────────────────────────
    if (window.innerWidth > 768) {
        const spotlight = document.createElement('div');
        spotlight.className = 'spotlight-glow';
        document.body.appendChild(spotlight);

        let mouseX = window.innerWidth / 2;
        let mouseY = window.innerHeight / 2;
        let spotlightX = mouseX;
        let spotlightY = mouseY;

        window.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        }, { passive: true });

        function animateSpotlight() {
            spotlightX += (mouseX - spotlightX) * 0.15;
            spotlightY += (mouseY - spotlightY) * 0.15;
            spotlight.style.left = `${spotlightX}px`;
            spotlight.style.top = `${spotlightY}px`;
            requestAnimationFrame(animateSpotlight);
        }
        requestAnimationFrame(animateSpotlight);
    }

    // ── Scroll Reveal Observer ─────────────────────────────────────────
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible', 'active');
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -40px 0px'
    });

    document.querySelectorAll('.animate-on-scroll, .reveal, .reveal-up').forEach(el => {
        revealObserver.observe(el);
    });

    // ── Sticky Navigation Scroll Behavior ──────────────────────────────
    const nav = document.getElementById('main-nav');
    let ticking = false;

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(() => {
                if (nav) {
                    if (window.scrollY > 60) {
                        nav.classList.add('nav-scrolled');
                        nav.style.borderBottomColor = 'rgba(255,255,255,0.12)';
                    } else {
                        nav.classList.remove('nav-scrolled');
                        nav.style.borderBottomColor = 'transparent';
                    }
                }

                // Parallax for hero ghost text
                const heroGhost = document.getElementById('hero-ghost');
                if (heroGhost) {
                    const scrolled = window.scrollY;
                    heroGhost.style.transform = `translateX(-50%) translateY(${scrolled * 0.18}px)`;
                }

                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });

    // ── Mobile Menu Toggle ─────────────────────────────────────────────
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    let menuOpen = false;

    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            menuOpen = !menuOpen;
            if (menuOpen) {
                mobileMenu.classList.add('open');
                if (menuIcon) menuIcon.textContent = 'close';
            } else {
                mobileMenu.classList.remove('open');
                if (menuIcon) menuIcon.textContent = 'menu';
            }
        });

        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menuOpen = false;
                mobileMenu.classList.remove('open');
                if (menuIcon) menuIcon.textContent = 'menu';
            });
        });
    }

    // ── Counter Animation ──────────────────────────────────────────────
    const counters = document.querySelectorAll('[data-counter]');
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(el => counterObserver.observe(el));

    function animateCounter(el) {
        const raw = el.getAttribute('data-counter');
        const suffix = raw.replace(/[\d]/g, '');
        const num = parseInt(raw);
        if (isNaN(num)) return;

        let current = 0;
        const duration = 1400;
        const startTime = performance.now();

        const update = (now) => {
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            // Cubic Ease Out
            const eased = 1 - Math.pow(1 - progress, 3);
            current = Math.round(eased * num);
            el.textContent = current + suffix;

            if (progress < 1) {
                requestAnimationFrame(update);
            }
        };

        requestAnimationFrame(update);
    }

    // ── Button & Card Magnetic Hover Micro-Interactions ────────────────
    document.querySelectorAll('.btn-primary').forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            btn.style.transform = `translate3d(${x * 0.15}px, ${y * 0.15}px, 0) translateY(-2px)`;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate3d(0, 0, 0) translateY(0)';
        });
    });

    document.querySelectorAll('.service-card, .article-card, .portfolio-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.borderColor = 'rgba(4, 140, 214, 0.4)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.borderColor = 'rgba(76, 69, 70, 0.3)';
        });
    });

});
