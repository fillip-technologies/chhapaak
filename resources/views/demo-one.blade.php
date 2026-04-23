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
    </style>
</head>

<body class="bg-background text-on-surface font-body selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- TopNavBar -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-stone-900/80 backdrop-blur-xl shadow-sm dark:shadow-none">
        <div class="flex justify-between items-center px-8 py-4 max-w-screen-2xl mx-auto">
            <a class="font-serif text-2xl font-semibold italic text-teal-900 dark:text-teal-50" href="#">Chhapaak
                Resort</a>
            <div class="hidden md:flex items-center space-x-12">
                <a class="font-serif text-lg tracking-wide text-stone-600 dark:text-stone-400 hover:text-teal-800 dark:hover:text-stone-200 transition-colors"
                    href="#rooms">Rooms</a>
                <a class="font-serif text-lg tracking-wide text-stone-600 dark:text-stone-400 hover:text-teal-800 dark:hover:text-stone-200 transition-colors"
                    href="#experiences">Experiences</a>
                <a class="font-serif text-lg tracking-wide text-stone-600 dark:text-stone-400 hover:text-teal-800 dark:hover:text-stone-200 transition-colors"
                    href="#gallery">Gallery</a>
            </div>
            <button
                class="bg-primary text-on-primary px-8 py-2.5 rounded-full font-label text-sm tracking-widest uppercase hover:opacity-90 transition-all scale-95 duration-200 ease-in-out">
                Book Now
            </button>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img alt="Luxury resort exterior" class="w-full h-full object-cover"
                data-alt="Cinematic wide shot of luxury infinity pool overlooking ocean"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiZNG_1brDtu3GMIj625b16yik7hyH_O2BJGcM3L0CFPRZhi-cVR_rLBkZnfYLRYVAI4v_OuhWk4F8FYzwqjmGeRcpRuf1txnFU3D2cWEIwMpssEKx30kGc9E8Jmk2PKkC7o7KHIzmT2gHLfr8wuyFefpyrQw3Cgz3_ePcIrJu3tsm5tYl5M84dI-wOURUJG17RaAOGXnf9ZIfeYZY5ON19K7q7wKzXlDDpwVM6dEnw67639SGpqTMIzdbGQNvDKO_hD8tVCcON-M" />
            <div class="absolute inset-0 hero-gradient"></div>
        </div>
        <div class="relative z-10 text-center px-6 max-w-4xl">
            <span
                class="inline-block text-primary-fixed-dim font-label tracking-[0.3em] uppercase mb-6 text-sm">Escapism
                Redefined</span>
            <h1 class="font-headline text-5xl md:text-8xl text-white mb-8 leading-[1.1]">Where Nature Meets Luxury</h1>
            <p class="font-body text-lg md:text-xl text-white/80 max-w-2xl mx-auto mb-10 leading-relaxed">
                Discover a sanctuary carved into the emerald landscape, where every breeze carries the scent of salt and
                sandalwood.
            </p>
            <div class="flex flex-col md:flex-row gap-6 justify-center">
                <button
                    class="bg-white text-primary px-10 py-4 rounded-full font-label text-sm tracking-widest uppercase font-bold hover:bg-surface-container-low transition-all">
                    Explore Suites
                </button>
                <button
                    class="border border-white/30 text-white backdrop-blur-md px-10 py-4 rounded-full font-label text-sm tracking-widest uppercase hover:bg-white/10 transition-all">
                    Watch Film
                </button>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 text-white/50 animate-bounce">
            <span class="material-symbols-outlined text-3xl">expand_more</span>
        </div>
    </section>
    <!-- Rooms Preview Section -->
    <section class="py-24 bg-surface-container-low" id="rooms">
        <div class="max-w-screen-2xl mx-auto px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div class="max-w-2xl">
                    <h2 class="font-headline text-4xl md:text-5xl text-primary mb-6">Unrivaled Sanctuaries</h2>
                    <p class="text-on-surface-variant text-lg">Designed with organic textures and expansive views, our
                        living spaces blur the line between indoor comfort and outdoor majesty.</p>
                </div>
                <a class="text-primary font-label text-sm tracking-widest uppercase border-b-2 border-primary/20 pb-2 hover:border-primary transition-all"
                    href="#">View All Accommodations</a>
            </div>
            <!-- Bento Grid Rooms -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                <!-- Large Feature Card -->
                <div class="md:col-span-8 group relative overflow-hidden rounded-xl bg-surface-container-lowest">
                    <div class="aspect-[16/9] overflow-hidden">
                        <img alt="The Royal Ocean Villa"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            data-alt="Luxury bedroom with panoramic ocean view floor-to-ceiling windows"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYMZvHbI-eYoBgCrfk7Q4hpgjvHI4xnbOzBTIh4NpQPvBro6zISp8htmcm2YeVRqejLoPK7jboHskyjfAqP3fS0l5z6kUeiVb-kz1j6-EHX2wJQk_qPriGG9zPTd6Ww5HY4MDKWV9b-kuFEKS6RsRIybSB_TZl6YDMF0m0GwIViJPU691bUUSMcrEuJ9yPFKACivM7JzAqL3CCFD1JyWz1Z57ylYw-c41qQtb9xvTshcsnwdD5vmAFrrRhOE2aBnZZYUhNwddNkqs" />
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-headline text-3xl text-primary mb-2">The Royal Ocean Villa</h3>
                                <div class="flex gap-4 text-on-surface-variant text-sm">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-lg">square_foot</span> 1,200
                                        sqft</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-lg">pool</span> Private Infinity
                                        Pool</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <span
                                    class="block font-label text-xs tracking-widest uppercase text-outline">From</span>
                                <span class="font-headline text-2xl text-primary">$1,200/night</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side Card 1 -->
                <div class="md:col-span-4 group relative overflow-hidden rounded-xl bg-surface-container-lowest">
                    <div class="aspect-square overflow-hidden">
                        <img alt="Tropical Canopy Suite"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            data-alt="Rustic modern treehouse suite interior with white linens"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDg55S-Ri6QBT7gR3c_4fBZyYyKLKjJgtwLm-10luQKw7wXvTpFdEntPvuqFvJbzCnLNrGQuLVrxNM7OdRyghMGAsb8bZ3kY8pjJKXC-iQSQj63cIQlQE9g2i2Fs8YxB-Iep5y39jlCbwXRDG58grOyS7JRQTmFzZe7DOL0YdZd05-cbYm8LKIRzcyyMuZVKC3nP9XzWJM8BT-j4x_r_rKArYEuVSlMbyI4-mZ-jEK2TvwFR-NyhRL8rL3VFZBLNq3aiOXyPd-baoQ" />
                    </div>
                    <div class="p-8">
                        <h3 class="font-headline text-2xl text-primary mb-2">Tropical Canopy Suite</h3>
                        <span class="font-headline text-xl text-primary-container">$750/night</span>
                    </div>
                </div>
                <!-- Bottom Card 1 -->
                <div class="md:col-span-4 group relative overflow-hidden rounded-xl bg-surface-container-lowest">
                    <div class="aspect-square overflow-hidden">
                        <img alt="Garden Oasis Room"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            data-alt="Boutique hotel room with lush garden access"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2ZS_4H-HNhWrWn22dbmPPaC8WaBTp0wGFFTg4_EO-w_W27PbEvjVFZfjEWQite29OpDz5LsH5nXF4squGBP_Rlo-QcV4O8IQxfZ_oIuUNaFzCdZ59Q-kKa0wBi9JnJALus6GJZk5GpkY4xLDqkMvyWzLTrvZ19EQpWoJKbHdlM-u7FTB6MdHWLhH-cnG987jvAbZlztXH977LmMw5u8wRCKkPypPvzEYhl3PMNu5uhfiGfoxZ46Ss5eRX0te10Fu0aqg1R5wmCb0" />
                    </div>
                    <div class="p-8">
                        <h3 class="font-headline text-2xl text-primary mb-2">Garden Oasis Room</h3>
                        <span class="font-headline text-xl text-primary-container">$550/night</span>
                    </div>
                </div>
                <!-- Bottom Card 2 (Wide) -->
                <div class="md:col-span-8 group relative overflow-hidden rounded-xl bg-surface-container-lowest">
                    <div class="aspect-[21/9] overflow-hidden">
                        <img alt="The Penthouse Residence"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            data-alt="Ultra-luxury penthouse living room with modern art"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVxr1JSCCshxnLcDgY16UxN0AqiCHa3e9CUZEDeMqMJp4lrVqrGp5rP7hbGg6-c6jXd7EowRPMp_rvTZe_C0kHxfwqccpuCrLKkxl-jovpScme_BQghxfzH-XPqB7Ref-4Mpm4YaYzAWhscFFM51nuJd4cEOR2bcSJs3Rn6-2BEGND1tNtv4eV5Zp96w8RuOtqkVch6BWBvl3db1bjhUP_tg-G_r76tfAhnfM4Bz4V62l3Q1Y0WOlvOubUHN3UP-40YXTEPwwxwHM" />
                    </div>
                    <div class="p-8">
                        <h3 class="font-headline text-3xl text-primary mb-2">The Penthouse Residence</h3>
                        <span class="font-headline text-xl text-primary-container">$2,400/night</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experiences Section -->

    <!-- Gallery Grid -->
    <section class="py-24 bg-surface-container-low" id="gallery">
        <div class="max-w-screen-2xl mx-auto px-8">
            <h2 class="font-headline text-4xl md:text-5xl text-primary mb-16 text-center">Visual Poetry</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 auto-rows-[200px] md:auto-rows-[300px]">
                <div class="col-span-2 row-span-2 relative overflow-hidden rounded-xl">
                    <img alt="Resort View"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                        data-alt="Breathtaking aerial view of resort islands and blue water"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFnA6Cx7Up9DEuX596HBcuLRk2xqmAwQq1MnmwokJtPczCLWNcd9qAJ9jx5W3vB2eIQcVPaRY6ol1sjHlp-Gl33gWh6tJdsSiYmICEgTTrfL-HaqCJla458EnytcsICjxGkfTw7T2dGr94btkaZvUyEoafdK9-ZvycfpR9fVwwwAaLHxSCglH8RkEkBUPP80STp4Z7XY3efSxlBwGmxVJYdvdDhRL-8M7kwNzENf7mwjBF5T1Ai1e59z_l_UBrHdJaS8tUxo3iGlQ" />
                </div>
                <div class="relative overflow-hidden rounded-xl">
                    <img alt="Cocktails"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                        data-alt="Vibrant tropical cocktail with hibiscus garnish"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAC4OzMzsAAYRCNydnaWbWRxoZFGgHVYJBgD6jrp2-xQnb57UQlJVDOWlmlyBjT3W_fC19KTJ3hlNog_9Q9aH-CkVK_hW24dQ_jCCcgKIaimCTdfiCFPwWNBFpaXFCLTf_KUlKnE5ZuzuExSHBuYUcSU_QYWqYLG9FXXLPRa8DmL7u_jvW4bKGC56nnFbzLJQA7e-uU5QieWWRMFJDQgSZQniQkauH7oxEaoYxMco4nH0xD3u0M-kvUy30Zkb7M0RJYg3cK9LEJftE" />
                </div>
                <div class="relative overflow-hidden rounded-xl">
                    <img alt="Beach"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                        data-alt="Pristine white sand beach at sunset"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ_C8ngwNhJ_NoupLfqbjgJX8d3aN8TXX67rjxqqNvxJdYakO5ebsPnQu5w_K7I_kkU6jheeNZQ-NVCmUQn7CmA-koa78AOv65W2qnblqhm9O3mzeNgWOiS3tNhwUepVd6aYavKkaAZTSJlnX-If6APOFDGoTz66qS4UrrVO6g5rFiJL_V2J58LkeyFaDU5HjtYEkk3BvSoFHhhigZyQKbWTy503Wd0gVtpQWsKveT6wboyyn9RGrKkzcRAeVlquk6w-ts7tsZo40" />
                </div>
                <div class="row-span-2 relative overflow-hidden rounded-xl">
                    <img alt="Wellness"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                        data-alt="Person doing yoga on a wooden deck facing the sea"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8DtiDwZRkEacai7XKYdf3nMqT_dh0tzaH1cKhQ0vV_fmUEtM0hqRE4P_eRKGEXZqB0F2cazIhIydh7Ij8z3WdwIq1ct4z67m_Goq24J_58R9XN0fLQ3apCYrxl0MmziWED6ISI3qk7CA78wWKWJIy0qoo7kIvI7mfTC3PUouZvKU_Lpw5j3aWrp0xkg6b7NLczET3DE15e0__DeV4I92xZvg0knRis9-6s0LbReXzGeUkrzdV0O4HvW0Rtxprgrpm-3VBaQXp3fs" />
                </div>
                <div class="relative overflow-hidden rounded-xl">
                    <img alt="Resort Detail"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                        data-alt="Architectural detail of wooden resort structure"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJ8zjrn1J_GgPMQENNH_f5ipHQAHlI3RPpz2Bfwntm67AEIkR6OLXAXzpC02-hf1oBf1f6iaFoniE9d7S8zc5sQC7yMsCSLEKgRxp9_f2OE25jUs6gOZptjt1V-x_7EAeaGV4hAYNeCUfQSAF_Q69heqlIcNDByJt_LylpJdXIIv8H0hz_MuCOPB7XIvvTothWa0-eWN2y2BGj840IAsKWDwWk3EYQjqI8RFLkqiYkFci361XVeNPpuTjdVa12Y_S3jcQ6a6lT7a4" />
                </div>
                <div class="col-span-2 relative overflow-hidden rounded-xl">
                    <img alt="Poolside"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                        data-alt="Rows of luxury loungers beside a crystal clear pool"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1xT1VHzjhiKlL2UZUalSRpYvgKMqhs3akI7OYvP0WBZDaL3f1ShO8EYtOxQZwjKxmeOBrWclYUFegJ93bjLT5wAw9WwQ2KYKmsShqES6kEGpSZDN2ULzWRbwb-YQrkz5V62kQ1NvqsNZrXR0VSnA_tWWUPU-SGomVgm6G2mSZkJMhtHaa3-96Oz8KDwgho-9uunhizFBdPJirno2H4UT2X_H93bTdDzyolES5Isttw7Uq_gEqvtoOUFE0mbxJaOB2j0wfCVoGN6k" />
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action -->
    <section class="py-32 bg-primary relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-[800px] h-[800px] bg-primary-container rounded-full blur-[160px] opacity-40 -translate-y-1/2 translate-x-1/2">
        </div>
        <div class="relative z-10 max-w-4xl mx-auto text-center px-8">
            <h2 class="font-headline text-4xl md:text-7xl text-white mb-10 leading-tight">Ready to begin your journey?
            </h2>
            <p class="text-white/70 text-lg md:text-xl mb-12 max-w-2xl mx-auto">Book your stay now and receive
                complimentary airport transfers and a sunset sailing excursion.</p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <button
                    class="bg-white text-primary px-12 py-5 rounded-full font-label text-sm tracking-widest uppercase font-bold hover:bg-surface-container-low transition-all shadow-xl">
                    Check Availability
                </button>
                <button
                    class="border-2 border-white text-white px-12 py-5 rounded-full font-label text-sm tracking-widest uppercase font-bold hover:bg-white/10 transition-all">
                    Contact Concierge
                </button>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="w-full py-16 border-t border-stone-200/20 dark:border-stone-800/20 bg-stone-100 dark:bg-stone-950">
        <div
            class="grid grid-cols-1 md:grid-cols-3 gap-12 px-8 max-w-7xl mx-auto text-center md:text-left items-start">
            <div class="space-y-6">
                <span class="font-serif text-xl font-bold text-teal-900 dark:text-teal-50">Chhapaak Resort</span>
                <p class="text-stone-500 font-body text-sm max-w-xs mx-auto md:mx-0">An organic escape designed for the
                    modern explorer. Sustainably crafted, luxury defined.</p>
                <div class="flex justify-center md:justify-start gap-4">
                    <span
                        class="material-symbols-outlined text-teal-900/60 cursor-pointer hover:text-teal-900 transition-colors">public</span>
                    <span
                        class="material-symbols-outlined text-teal-900/60 cursor-pointer hover:text-teal-900 transition-colors">photo_camera</span>
                    <span
                        class="material-symbols-outlined text-teal-900/60 cursor-pointer hover:text-teal-900 transition-colors">mail</span>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <div class="space-y-4">
                    <h4
                        class="font-sans text-sm tracking-widest uppercase text-teal-900 dark:text-teal-50 font-bold mb-6">
                        Explore</h4>
                    <ul class="space-y-3">
                        <li><a class="text-stone-500 hover:text-teal-600 dark:hover:text-teal-400 text-sm transition-opacity"
                                href="#">Contact</a></li>
                        <li><a class="text-stone-500 hover:text-teal-600 dark:hover:text-teal-400 text-sm transition-opacity"
                                href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4
                        class="font-sans text-sm tracking-widest uppercase text-teal-900 dark:text-teal-50 font-bold mb-6">
                        Company</h4>
                    <ul class="space-y-3">
                        <li><a class="text-stone-500 hover:text-teal-600 dark:hover:text-teal-400 text-sm transition-opacity"
                                href="#">Sustainability</a></li>
                        <li><a class="text-stone-500 hover:text-teal-600 dark:hover:text-teal-400 text-sm transition-opacity"
                                href="#">Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class="space-y-6">
                <h4 class="font-sans text-sm tracking-widest uppercase text-teal-900 dark:text-teal-50 font-bold mb-6">
                    Newsletter</h4>
                <p class="text-stone-500 text-sm mb-4">Join our inner circle for exclusive offers and updates.</p>
                <div class="flex gap-2">
                    <input
                        class="bg-white border-0 rounded-full px-6 py-2.5 text-sm w-full focus:ring-2 focus:ring-primary/20"
                        placeholder="Email address" type="email" />
                    <button class="bg-primary text-white p-2.5 rounded-full flex items-center justify-center">
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-16 text-center border-t border-stone-200/40 dark:border-stone-800/40 pt-8">
            <p class="font-sans text-xs tracking-widest uppercase text-stone-500">© 2024 Chhapaak Resort. All rights
                reserved.</p>
        </div>
    </footer>
</body>

</html>