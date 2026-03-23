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

        .hero-vignette {
            background: radial-gradient(circle, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.4) 100%);
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

<body class="bg-background text-on-surface font-body selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- Minimal Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-header" id="main-nav">
        <div class="flex justify-between items-center px-8 py-6 max-w-screen-2xl mx-auto">
            <a class="font-serif text-2xl font-semibold italic text-white mix-blend-difference"
                href="#">Chhapaak</a>
            <div class="hidden md:flex items-center space-x-16">
                <a class="font-label text-[11px] tracking-[0.3em] uppercase text-white mix-blend-difference hover:opacity-60 transition-opacity"
                    href="#rooms">Sanctuaries</a>
                <a class="font-label text-[11px] tracking-[0.3em] uppercase text-white mix-blend-difference hover:opacity-60 transition-opacity"
                    href="#experiences">Moments</a>
                <a class="font-label text-[11px] tracking-[0.3em] uppercase text-white mix-blend-difference hover:opacity-60 transition-opacity"
                    href="#gallery">Visuals</a>
            </div>
            <button
                class="border border-white/30 text-white px-8 py-2 rounded-full font-label text-[10px] tracking-[0.2em] uppercase hover:bg-white hover:text-primary transition-all duration-500 backdrop-blur-sm">
                Reserve
            </button>
        </div>
    </nav>
    <!-- Cinematic Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden bg-black">
        <div class="absolute inset-0 z-0">
            <img alt="Luxury resort cinematic view"
                class="w-full h-full object-cover scale-105 animate-[subtle-zoom_20s_infinite_alternate]"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiZNG_1brDtu3GMIj625b16yik7hyH_O2BJGcM3L0CFPRZhi-cVR_rLBkZnfYLRYVAI4v_OuhWk4F8FYzwqjmGeRcpRuf1txnFU3D2cWEIwMpssEKx30kGc9E8Jmk2PKkC7o7KHIzmT2gHLfr8wuyFefpyrQw3Cgz3_ePcIrJu3tsm5tYl5M84dI-wOURUJG17RaAOGXnf9ZIfeYZY5ON19K7q7wKzXlDDpwVM6dEnw67639SGpqTMIzdbGQNvDKO_hD8tVCcON-M" />
            <div class="absolute inset-0 bg-black/30 hero-vignette"></div>
        </div>
        <style>
            @keyframes subtle-zoom {
                from {
                    transform: scale(1);
                }

                to {
                    transform: scale(1.1);
                }
            }
        </style>
        <div class="relative z-10 text-center px-6 max-w-5xl">
            <div class="overflow-hidden mb-4">
                <span class="inline-block text-white/70 font-label tracking-[0.5em] uppercase text-xs text-reveal"
                    style="animation-delay: 0.2s;">Private Luxury Reimagined</span>
            </div>
            <div class="overflow-hidden mb-12">
                <h1 class="font-headline text-6xl md:text-[120px] text-white leading-[0.9] text-reveal italic"
                    style="animation-delay: 0.4s;">The Art of Being</h1>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-center gap-12 text-reveal"
                style="animation-delay: 0.6s;">
                <button class="group flex items-center gap-4 text-white font-label text-xs tracking-[0.3em] uppercase">
                    <span class="w-12 h-[1px] bg-white/40 group-hover:w-20 transition-all duration-500"></span>
                    Explore Suites
                </button>
                <a class="group flex flex-col items-center gap-4" href="#video-section">
                    <div
                        class="w-16 h-16 rounded-full border border-white/40 flex items-center justify-center play-button-pulse group-hover:bg-white group-hover:border-white transition-all duration-500">
                        <span
                            class="material-symbols-outlined text-white group-hover:text-primary transition-colors">play_arrow</span>
                    </div>
                    <span
                        class="text-white/60 font-label text-[10px] tracking-[0.2em] uppercase group-hover:text-white transition-colors">Watch
                        Film</span>
                </a>
            </div>
        </div>
        <div class="absolute bottom-12 left-1/2 -translate-x-1/2 flex flex-col items-center gap-4 opacity-40">
            <div class="w-[1px] h-16 bg-gradient-to-b from-white to-transparent"></div>
        </div>
    </section>
    <!-- Rooms Preview Section -->
    <section class="py-32 bg-surface-container-low" id="rooms">
        <div class="max-w-screen-2xl mx-auto px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div class="max-w-2xl">
                    <span
                        class="text-primary/60 font-label tracking-[0.3em] uppercase text-[10px] mb-4 block">Accommodations</span>
                    <h2 class="font-headline text-5xl md:text-6xl text-primary mb-6">Unrivaled Sanctuaries</h2>
                    <p class="text-on-surface-variant text-lg font-light leading-relaxed">Designed with organic textures
                        and expansive views, our living spaces blur the line between indoor comfort and outdoor majesty.
                    </p>
                </div>
                <a class="text-primary font-label text-xs tracking-widest uppercase border-b border-primary/20 pb-2 hover:border-primary transition-all duration-500"
                    href="#">View Collection</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10">
                <!-- Large Feature Card -->
                <div class="md:col-span-8 group relative overflow-hidden bg-white">
                    <div class="aspect-[16/9] overflow-hidden">
                        <img alt="The Royal Ocean Villa"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYMZvHbI-eYoBgCrfk7Q4hpgjvHI4xnbOzBTIh4NpQPvBro6zISp8htmcm2YeVRqejLoPK7jboHskyjfAqP3fS0l5z6kUeiVb-kz1j6-EHX2wJQk_qPriGG9zPTd6Ww5HY4MDKWV9b-kuFEKS6RsRIybSB_TZl6YDMF0m0GwIViJPU691bUUSMcrEuJ9yPFKACivM7JzAqL3CCFD1JyWz1Z57ylYw-c41qQtb9xvTshcsnwdD5vmAFrrRhOE2aBnZZYUhNwddNkqs" />
                    </div>
                    <div class="p-10">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-headline text-3xl text-primary mb-3">The Royal Ocean Villa</h3>
                                <div
                                    class="flex gap-6 text-on-surface-variant text-xs tracking-wider uppercase font-light">
                                    <span class="flex items-center gap-2"><span
                                            class="material-symbols-outlined text-sm">square_foot</span> 1,200
                                        sqft</span>
                                    <span class="flex items-center gap-2"><span
                                            class="material-symbols-outlined text-sm">pool</span> Infinity Pool</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <span
                                    class="block font-label text-[10px] tracking-[0.2em] uppercase text-outline mb-1">Nightly
                                    From</span>
                                <span class="font-headline text-2xl text-primary">$1,200</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side Card 1 -->
                <div class="md:col-span-4 group relative overflow-hidden bg-white">
                    <div class="aspect-square overflow-hidden">
                        <img alt="Tropical Canopy Suite"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDg55S-Ri6QBT7gR3c_4fBZyYyKLKjJgtwLm-10luQKw7wXvTpFdEntPvuqFvJbzCnLNrGQuLVrxNM7OdRyghMGAsb8bZ3kY8pjJKXC-iQSQj63cIQlQE9g2i2Fs8YxB-Iep5y39jlCbwXRDG58grOyS7JRQTmFzZe7DOL0YdZd05-cbYm8LKIRzcyyMuZVKC3nP9XzWJM8BT-j4x_r_rKArYEuVSlMbyI4-mZ-jEK2TvwFR-NyhRL8rL3VFZBLNq3aiOXyPd-baoQ" />
                    </div>
                    <div class="p-10">
                        <h3 class="font-headline text-2xl text-primary mb-2">Tropical Canopy Suite</h3>
                        <span class="font-headline text-lg text-primary-container">$750</span>
                    </div>
                </div>
                <!-- Bottom Card 1 -->
                <div class="md:col-span-4 group relative overflow-hidden bg-white">
                    <div class="aspect-square overflow-hidden">
                        <img alt="Garden Oasis Room"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2ZS_4H-HNhWrWn22dbmPPaC8WaBTp0wGFFTg4_EO-w_W27PbEvjVFZfjEWQite29OpDz5LsH5nXF4squGBP_Rlo-QcV4O8IQxfZ_oIuUNaFzCdZ59Q-kKa0wBi9JnJALus6GJZk5GpkY4xLDqkMvyWzLTrvZ19EQpWoJKbHdlM-u7FTB6MdHWLhH-cnG987jvAbZlztXH977LmMw5u8wRCKkPypPvzEYhl3PMNu5uhfiGfoxZ46Ss5eRX0te10Fu0aqg1R5wmCb0" />
                    </div>
                    <div class="p-10">
                        <h3 class="font-headline text-2xl text-primary mb-2">Garden Oasis Room</h3>
                        <span class="font-headline text-lg text-primary-container">$550</span>
                    </div>
                </div>
                <!-- Bottom Card 2 (Wide) -->
                <div class="md:col-span-8 group relative overflow-hidden bg-white">
                    <div class="aspect-[21/9] overflow-hidden">
                        <img alt="The Penthouse Residence"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVxr1JSCCshxnLcDgY16UxN0AqiCHa3e9CUZEDeMqMJp4lrVqrGp5rP7hbGg6-c6jXd7EowRPMp_rvTZe_C0kHxfwqccpuCrLKkxl-jovpScme_BQghxfzH-XPqB7Ref-4Mpm4YaYzAWhscFFM51nuJd4cEOR2bcSJs3Rn6-2BEGND1tNtv4eV5Zp96w8RuOtqkVch6BWBvl3db1bjhUP_tg-G_r76tfAhnfM4Bz4V62l3Q1Y0WOlvOubUHN3UP-40YXTEPwwxwHM" />
                    </div>
                    <div class="p-10">
                        <h3 class="font-headline text-3xl text-primary mb-2">The Penthouse Residence</h3>
                        <span class="font-headline text-lg text-primary-container">$2,400</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experiences Section -->
    <section class="py-32 bg-surface overflow-hidden" id="experiences">
        <div class="max-w-7xl mx-auto px-8">
            <div class="text-center mb-24">
                <span
                    class="inline-block text-primary/50 font-label tracking-[0.4em] uppercase mb-4 text-[10px]">Curated
                    Moments</span>
                <h2 class="font-headline text-5xl md:text-7xl text-primary">Soulful Experiences</h2>
            </div>
            <div class="space-y-40">
                <!-- Experience 1: Spa -->
                <div class="flex flex-col md:flex-row items-center gap-24">
                    <div class="w-full md:w-1/2 relative group">
                        <div
                            class="absolute -top-12 -left-12 w-80 h-80 bg-secondary-fixed/20 rounded-full blur-[100px] -z-10 group-hover:bg-secondary-fixed/30 transition-all duration-700">
                        </div>
                        <img alt="Spa treatment"
                            class="rounded-sm shadow-sm relative z-10 transition-transform duration-700 group-hover:-translate-y-2"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_6TNckW1IbFafGvZsdtiJ8-Snvftg8WJZHvYZYgujMCPTh9xrwFcCG13UTjZEyJC0uN897PqTWRe5oZUBzERIxnmGqiWmv5VYpvKH3Rf4NcfLm90sF5VdOCQIT3o4jzDZN44MwieAen14E0r2NGtVmXlofjjua_UZJLvIR1JzbCBZq26MlFlKKaBJ7yC7y8i9epW2n3N7XCILo3lRoqiTys44uNhp33XWJN7dPrC8hNNm6y0ho5UV5BYMTHPd9mk1w_4a29Y9MY8" />
                    </div>
                    <div class="w-full md:w-1/2">
                        <h3 class="font-headline text-4xl md:text-5xl text-primary mb-8 italic">The Waterside Spa</h3>
                        <p class="text-on-surface-variant text-lg leading-relaxed mb-10 font-light">
                            Harnessing the healing power of the ocean and local botanicals, our spa treatments are
                            designed to recalibrate your senses and restore inner balance.
                        </p>
                        <ul class="grid grid-cols-2 gap-6 mb-12">
                            <li class="flex items-center gap-4 text-primary font-light text-sm tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Deep Tissue Therapy
                            </li>
                            <li class="flex items-center gap-4 text-primary font-light text-sm tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Seaweed Wraps
                            </li>
                            <li class="flex items-center gap-4 text-primary font-light text-sm tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Sunset Meditation
                            </li>
                            <li class="flex items-center gap-4 text-primary font-light text-sm tracking-wide">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Hydrotherapy
                            </li>
                        </ul>
                        <button
                            class="bg-primary text-white px-10 py-4 rounded-full font-label text-[10px] tracking-[0.2em] uppercase hover:opacity-90 transition-all">Explore
                            Treatments</button>
                    </div>
                </div>
                <!-- Experience 2: Dining -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-24" id="video-section">
                    <div class="w-full md:w-1/2 relative group">
                        <div
                            class="absolute -bottom-12 -right-12 w-80 h-80 bg-tertiary-fixed/20 rounded-full blur-[100px] -z-10 group-hover:bg-tertiary-fixed/30 transition-all duration-700">
                        </div>
                        <div class="relative z-10 overflow-hidden">
                            <img alt="Gourmet Dining"
                                class="rounded-sm shadow-sm transition-transform duration-700 group-hover:scale-105"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbeRxQRqWWP5tsWqWzM4ZnC7G6d9QPBD9QygU22k1Qz-gaMSdeEQuSAmoE6uPdlqkWnKtgr7A8Pse_iNMW2bPwkFPKpo9-tn0XzroGvVkGGoWbPNJHG8XmuMLKZE9crLnT-KHoXpJxabRO3EXiE5YLj3k9GxWUCP6p75rOwdp_YtPCgaAPCk0BMoQS_eY0fkokFc06F_3ncLyr9ce3fMxQqL1gkXcAeRlgzWd4LXSTcmmIyjsdMFPB3kjvtIPYEYV2DuwWmJMDtzM" />
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <h3 class="font-headline text-4xl md:text-5xl text-primary mb-8 italic">Epicurean Journeys</h3>
                        <p class="text-on-surface-variant text-lg leading-relaxed mb-10 font-light">
                            From farm-to-table organic harvest to daily fresh-caught seafood, our culinary team
                            celebrates the vibrant flavors of the tropics under a canopy of stars.
                        </p>
                        <div class="flex flex-col gap-6 mb-12">
                            <div class="pb-6 border-b border-stone-200">
                                <h4 class="font-headline text-2xl text-primary mb-2">The Reef Kitchen</h4>
                                <p class="text-on-surface-variant text-sm font-light">Signature seafood and sunset
                                    cocktails</p>
                            </div>
                            <div class="pb-6 border-b border-stone-200">
                                <h4 class="font-headline text-2xl text-primary mb-2">Sandbar Grill</h4>
                                <p class="text-on-surface-variant text-sm font-light">Casual barefoot dining and
                                    wood-fired pizzas</p>
                            </div>
                        </div>
                        <button
                            class="bg-primary text-white px-10 py-4 rounded-full font-label text-[10px] tracking-[0.2em] uppercase hover:opacity-90 transition-all">Reserve
                            a Table</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Grid -->
    <section class="py-32 bg-surface-container-low" id="gallery">
        <div class="max-w-screen-2xl mx-auto px-8">
            <div class="text-center mb-20">
                <h2 class="font-headline text-5xl md:text-7xl text-primary italic">Visual Poetry</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 auto-rows-[250px] md:auto-rows-[350px]">
                <div class="col-span-2 row-span-2 relative overflow-hidden group">
                    <img alt="Resort View"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFnA6Cx7Up9DEuX596HBcuLRk2xqmAwQq1MnmwokJtPczCLWNcd9qAJ9jx5W3vB2eIQcVPaRY6ol1sjHlp-Gl33gWh6tJdsSiYmICEgTTrfL-HaqCJla458EnytcsICjxGkfTw7T2dGr94btkaZvUyEoafdK9-ZvycfpR9fVwwwAaLHxSCglH8RkEkBUPP80STp4Z7XY3efSxlBwGmxVJYdvdDhRL-8M7kwNzENf7mwjBF5T1Ai1e59z_l_UBrHdJaS8tUxo3iGlQ" />
                </div>
                <div class="relative overflow-hidden group">
                    <img alt="Cocktails"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAC4OzMzsAAYRCNydnaWbWRxoZFGgHVYJBgD6jrp2-xQnb57UQlJVDOWlmlyBjT3W_fC19KTJ3hlNog_9Q9aH-CkVK_hW24dQ_jCCcgKIaimCTdfiCFPwWNBFpaXFCLTf_KUlKnE5ZuzuExSHBuYUcSU_QYWqYLG9FXXLPRa8DmL7u_jvW4bKGC56nnFbzLJQA7e-uU5QieWWRMFJDQgSZQniQkauH7oxEaoYxMco4nH0xD3u0M-kvUy30Zkb7M0RJYg3cK9LEJftE" />
                </div>
                <div class="relative overflow-hidden group">
                    <img alt="Beach"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ_C8ngwNhJ_NoupLfqbjgJX8d3aN8TXX67rjxqqNvxJdYakO5ebsPnQu5w_K7I_kkU6jheeNZQ-NVCmUQn7CmA-koa78AOv65W2qnblqhm9O3mzeNgWOiS3tNhwUepVd6aYavKkaAZTSJlnX-If6APOFDGoTz66qS4UrrVO6g5rFiJL_V2J58LkeyFaDU5HjtYEkk3BvSoFHhhigZyQKbWTy503Wd0gVtpQWsKveT6wboyyn9RGrKkzcRAeVlquk6w-ts7tsZo40" />
                </div>
                <div class="row-span-2 relative overflow-hidden group">
                    <img alt="Wellness"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8DtiDwZRkEacai7XKYdf3nMqT_dh0tzaH1cKhQ0vV_fmUEtM0hqRE4P_eRKGEXZqB0F2cazIhIydh7Ij8z3WdwIq1ct4z67m_Goq24J_58R9XN0fLQ3apCYrxl0MmziWED6ISI3qk7CA78wWKWJIy0qoo7kIvI7mfTC3PUouZvKU_Lpw5j3aWrp0xkg6b7NLczET3DE15e0__DeV4I92xZvg0knRis9-6s0LbReXzGeUkrzdV0O4HvW0Rtxprgrpm-3VBaQXp3fs" />
                </div>
                <div class="relative overflow-hidden group">
                    <img alt="Resort Detail"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJ8zjrn1J_GgPMQENNH_f5ipHQAHlI3RPpz2Bfwntm67AEIkR6OLXAXzpC02-hf1oBf1f6iaFoniE9d7S8zc5sQC7yMsCSLEKgRxp9_f2OE25jUs6gOZptjt1V-x_7EAeaGV4hAYNeCUfQSAF_Q69heqlIcNDByJt_LylpJdXIIv8H0hz_MuCOPB7XIvvTothWa0-eWN2y2BGj840IAsKWDwWk3EYQjqI8RFLkqiYkFci361XVeNPpuTjdVa12Y_S3jcQ6a6lT7a4" />
                </div>
                <div class="col-span-2 relative overflow-hidden group">
                    <img alt="Poolside"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1xT1VHzjhiKlL2UZUalSRpYvgKMqhs3akI7OYvP0WBZDaL3f1ShO8EYtOxQZwjKxmeOBrWclYUFegJ93bjLT5wAw9WwQ2KYKmsShqES6kEGpSZDN2ULzWRbwb-YQrkz5V62kQ1NvqsNZrXR0VSnA_tWWUPU-SGomVgm6G2mSZkJMhtHaa3-96Oz8KDwgho-9uunhizFBdPJirno2H4UT2X_H93bTdDzyolES5Isttw7Uq_gEqvtoOUFE0mbxJaOB2j0wfCVoGN6k" />
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action -->
    <section class="py-40 bg-primary relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div
                class="absolute top-0 right-0 w-[1000px] h-[1000px] bg-white rounded-full blur-[180px] -translate-y-1/2 translate-x-1/2">
            </div>
        </div>
        <div class="relative z-10 max-w-5xl mx-auto text-center px-8">
            <span class="inline-block text-white/50 font-label tracking-[0.4em] uppercase mb-8 text-[10px]">Begin the
                Journey</span>
            <h2 class="font-headline text-5xl md:text-8xl text-white mb-12 leading-[0.85] italic">Ready to disappear?
            </h2>
            <p class="text-white/70 text-lg md:text-xl mb-16 max-w-2xl mx-auto font-light leading-relaxed">Book your
                stay now and receive complimentary private transfers and a moonlit sailing excursion.</p>
            <div class="flex flex-col sm:flex-row gap-8 justify-center">
                <button
                    class="bg-white text-primary px-14 py-5 rounded-full font-label text-[11px] tracking-[0.2em] uppercase font-bold hover:shadow-2xl transition-all duration-500">
                    Check Availability
                </button>
                <button
                    class="border border-white/40 text-white px-14 py-5 rounded-full font-label text-[11px] tracking-[0.2em] uppercase font-bold hover:bg-white/10 transition-all duration-500">
                    Contact Concierge
                </button>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="w-full py-20 bg-stone-100 border-t border-stone-200">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-16 px-8 max-w-screen-2xl mx-auto">
            <div class="md:col-span-1 space-y-8">
                <span class="font-serif text-2xl font-bold italic text-primary">Chhapaak</span>
                <p class="text-stone-500 font-body text-sm leading-relaxed font-light">An organic escape designed for
                    the modern explorer. Sustainably crafted, luxury defined with a commitment to local heritage.</p>
                <div class="flex gap-6">
                    <span
                        class="material-symbols-outlined text-primary/40 cursor-pointer hover:text-primary transition-colors">public</span>
                    <span
                        class="material-symbols-outlined text-primary/40 cursor-pointer hover:text-primary transition-colors">photo_camera</span>
                    <span
                        class="material-symbols-outlined text-primary/40 cursor-pointer hover:text-primary transition-colors">mail</span>
                </div>
            </div>
            <div class="md:col-span-2 grid grid-cols-2 gap-8">
                <div class="space-y-6">
                    <h4 class="font-label text-[10px] tracking-[0.3em] uppercase text-primary font-bold">Resort</h4>
                    <ul class="space-y-4">
                        <li><a class="text-stone-400 hover:text-primary text-xs transition-colors tracking-wide"
                                href="#">Sanctuaries</a></li>
                        <li><a class="text-stone-400 hover:text-primary text-xs transition-colors tracking-wide"
                                href="#">Dining</a></li>
                        <li><a class="text-stone-400 hover:text-primary text-xs transition-colors tracking-wide"
                                href="#">Wellness</a></li>
                        <li><a class="text-stone-400 hover:text-primary text-xs transition-colors tracking-wide"
                                href="#">Experiences</a></li>
                    </ul>
                </div>
                <div class="space-y-6">
                    <h4 class="font-label text-[10px] tracking-[0.3em] uppercase text-primary font-bold">Company</h4>
                    <ul class="space-y-4">
                        <li><a class="text-stone-400 hover:text-primary text-xs transition-colors tracking-wide"
                                href="#">Our Story</a></li>
                        <li><a class="text-stone-400 hover:text-primary text-xs transition-colors tracking-wide"
                                href="#">Sustainability</a></li>
                        <li><a class="text-stone-400 hover:text-primary text-xs transition-colors tracking-wide"
                                href="#">Careers</a></li>
                        <li><a class="text-stone-400 hover:text-primary text-xs transition-colors tracking-wide"
                                href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="md:col-span-1 space-y-8">
                <h4 class="font-label text-[10px] tracking-[0.3em] uppercase text-primary font-bold">Newsletter</h4>
                <p class="text-stone-500 text-xs font-light leading-relaxed">Join our inner circle for exclusive
                    updates from the edge of the world.</p>
                <div class="relative">
                    <input
                        class="bg-transparent border-b border-stone-300 w-full py-3 text-xs focus:outline-none focus:border-primary transition-colors placeholder:text-stone-300"
                        placeholder="Email Address" type="email" />
                    <button class="absolute right-0 bottom-3 text-primary">
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-24 text-center">
            <p class="font-label text-[9px] tracking-[0.4em] uppercase text-stone-300">© 2024 Chhapaak Resort. All
                rights reserved.</p>
        </div>
    </footer>
    <script>
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('main-nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
