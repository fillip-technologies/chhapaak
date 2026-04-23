<!DOCTYPE html>

<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Chhapaak Resort | Where Nature Meets Luxury</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Manrope:wght@200..800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary-container": "#005b5c",
                        "surface-container-high": "#ebe7e4",
                        "outline-variant": "#bec8c8",
                        "on-background": "#1c1b1a",
                        "surface-container": "#f1edea",
                        "on-tertiary-container": "#e0bfa0",
                        "inverse-primary": "#8dd3d3",
                        "primary": "#004242",
                        "outline": "#6f7979",
                        "tertiary": "#4c361f",
                        "on-tertiary": "#ffffff",
                        "inverse-surface": "#31302f",
                        "surface-dim": "#ddd9d6",
                        "surface-container-highest": "#e5e2df",
                        "on-secondary-container": "#4c6b5c",
                        "secondary-fixed-dim": "#adcebc",
                        "secondary": "#466556",
                        "on-secondary": "#ffffff",
                        "background": "#fdf9f6",
                        "tertiary-fixed": "#ffdcbc",
                        "on-surface": "#1c1b1a",
                        "surface-container-lowest": "#ffffff",
                        "surface-tint": "#1b6869",
                        "on-error-container": "#93000a",
                        "primary-fixed": "#a8efef",
                        "on-tertiary-fixed": "#291804",
                        "primary-fixed-dim": "#8dd3d3",
                        "on-primary": "#ffffff",
                        "on-surface-variant": "#3f4948",
                        "inverse-on-surface": "#f4f0ed",
                        "tertiary-fixed-dim": "#e2c1a1",
                        "surface": "#fdf9f6",
                        "secondary-fixed": "#c8ead8",
                        "surface-bright": "#fdf9f6",
                        "tertiary-container": "#654d34",
                        "on-primary-fixed": "#002020",
                        "on-primary-container": "#8bd0d1",
                        "surface-container-low": "#f7f3f0",
                        "error": "#ba1a1a",
                        "surface-variant": "#e5e2df",
                        "secondary-container": "#c8ead8",
                        "on-primary-fixed-variant": "#004f50",
                        "on-tertiary-fixed-variant": "#59422a",
                        "on-secondary-fixed-variant": "#2f4d3f",
                        "on-secondary-fixed": "#022015",
                        "error-container": "#ffdad6",
                        "on-error": "#ffffff"
                    },
                    fontFamily: {
                        "headline": ["Newsreader", "serif"],
                        "body": ["Manrope", "sans-serif"],
                        "label": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }

        .glass-nav {
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
        }

        .tonal-shift-bg {
            background-color: #f7f3f0;
        }

        .hero-gradient {
            background: linear-gradient(135deg, rgba(0, 66, 66, 0.9) 0%, rgba(0, 91, 92, 0.7) 100%);
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.01);
            backdrop-filter: blur(0px);
            transition: all 0.4s ease;
        }

        .glass-header.scrolled {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        }

        .glass-header.menu-open {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        }

        .header-logo {
            height: 4rem;
            transition: height 0.4s ease;
        }

        .glass-header.scrolled .header-logo,
        .glass-header.menu-open .header-logo {
            height: 2.5rem;
        }

        .header-contact-button {
            transition: color 0.4s ease, border-color 0.4s ease, background-color 0.4s ease;
        }

        .glass-header.scrolled .header-contact-button {
            background-color: #004242;
            border-color: #004242;
            color: #ffffff;
        }

        .header-menu-button {
            transition: color 0.4s ease, border-color 0.4s ease, background-color 0.4s ease, transform 0.4s ease;
        }

        .glass-header.scrolled .header-menu-button,
        .glass-header.menu-open .header-menu-button {
            background-color: rgba(255, 255, 255, 0.78);
            border-color: rgba(0, 66, 66, 0.18);
            color: #004242;
        }

        .glass-header.menu-open .header-menu-button {
            transform: rotate(90deg);
        }

        .mobile-menu-shell {
            position: absolute;
            inset-inline: 0;
            top: 100%;
            padding-top: 0.85rem;
            padding-bottom: 1.25rem;
            opacity: 0;
            pointer-events: none;
            transform: translateY(-16px) scale(0.98);
            transition: opacity 0.28s ease, transform 0.35s ease;
        }

        .glass-header.menu-open .mobile-menu-shell {
            opacity: 1;
            pointer-events: auto;
            transform: translateY(0) scale(1);
        }

        .mobile-menu-panel {
            opacity: 0;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.72);
            background:
                linear-gradient(155deg, rgba(255, 255, 255, 0.96) 0%, rgba(241, 237, 234, 0.9) 52%, rgba(225, 243, 243, 0.9) 100%);
            box-shadow: 0 30px 90px rgba(8, 21, 21, 0.18);
            border-radius: 1.9rem;
            padding: 1.35rem;
            backdrop-filter: blur(24px);
            transform: translateY(12px);
            transition: opacity 0.28s ease, transform 0.35s ease;
        }

        .glass-header.menu-open .mobile-menu-panel {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-menu-link {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            gap: 0.875rem;
            border-radius: 1.25rem;
            border: 1px solid rgba(0, 66, 66, 0.08);
            background: rgba(255, 255, 255, 0.68);
            padding: 1rem 1rem 1rem 0.95rem;
            color: #004242;
            transition: transform 0.28s ease, border-color 0.28s ease, background-color 0.28s ease, box-shadow 0.28s ease;
        }

        .mobile-menu-link:active {
            transform: scale(0.985);
        }

        .mobile-menu-link:hover {
            border-color: rgba(0, 66, 66, 0.14);
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 18px 40px rgba(0, 66, 66, 0.08);
        }

        .mobile-menu-link-index {
            display: inline-flex;
            min-width: 2.4rem;
            justify-content: center;
            border-radius: 9999px;
            background: rgba(0, 66, 66, 0.08);
            padding: 0.55rem 0.7rem;
            font-family: "Manrope", sans-serif;
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: rgba(0, 66, 66, 0.6);
        }

        .mobile-menu-link-label {
            font-family: "Newsreader", serif;
            font-size: 1.5rem;
            font-style: italic;
            line-height: 1;
        }

        .mobile-menu-link-icon {
            font-size: 1.15rem;
            color: rgba(0, 66, 66, 0.6);
            transition: transform 0.28s ease, color 0.28s ease;
        }

        .mobile-menu-link:hover .mobile-menu-link-icon {
            transform: translate(2px, -2px);
            color: #004242;
        }

        .mobile-nav-open {
            overflow: hidden;
        }


        .text-reveal {
            animation: textReveal 1.2s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        }

        @keyframes textReveal {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .play-button-pulse {
            animation: pulse-ring 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
            }

            100% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
            }
        }
    </style>
</head>

<body class="m-0 p-0 overflow-x-hidden">

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')


    <script>
        const nav = document.getElementById('main-nav');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenuIcon = document.getElementById('mobile-menu-icon');
        const mobileMenuLinks = document.querySelectorAll('[data-mobile-menu-link]');
        let isMobileMenuOpen = false;

        const setMobileMenuState = (isOpen) => {
            if (!nav || !mobileMenuToggle) {
                return;
            }

            isMobileMenuOpen = isOpen;
            nav.classList.toggle('menu-open', isOpen);
            mobileMenuToggle.setAttribute('aria-expanded', String(isOpen));
            mobileMenuToggle.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
            if (mobileMenu) {
                mobileMenu.setAttribute('aria-hidden', String(!isOpen));
            }
            if (mobileMenuIcon) {
                mobileMenuIcon.textContent = isOpen ? 'close' : 'menu';
            }
            document.body.classList.toggle('mobile-nav-open', isOpen);
        };

        const syncHeaderOnScroll = () => {
            if (!nav) {
                return;
            }

            nav.classList.toggle('scrolled', window.scrollY > 50);
        };

        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', () => {
                setMobileMenuState(!isMobileMenuOpen);
            });
        }

        mobileMenuLinks.forEach((link) => {
            link.addEventListener('click', () => {
                setMobileMenuState(false);
            });
        });

        document.addEventListener('click', (event) => {
            if (isMobileMenuOpen && nav && !nav.contains(event.target)) {
                setMobileMenuState(false);
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && isMobileMenuOpen) {
                setMobileMenuState(false);
            }
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768 && isMobileMenuOpen) {
                setMobileMenuState(false);
            }
        });

        window.addEventListener('scroll', syncHeaderOnScroll);
        window.addEventListener('load', () => {
            syncHeaderOnScroll();
            setMobileMenuState(false);
        });
    </script>

</body>

</html>
