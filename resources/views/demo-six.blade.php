<!DOCTYPE html>

<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Chhapaak Resort | Ethereal Luxury</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
                        "secondary-fixed-dim": "#adcebc",
                        "tertiary-fixed": "#ffdcbc",
                        "secondary-container": "#c8ead8",
                        "surface": "#fdf9f6",
                        "on-tertiary-fixed-variant": "#59422a",
                        "on-tertiary-fixed": "#291804",
                        "surface-container-high": "#ebe7e4",
                        "surface-tint": "#1b6869",
                        "outline": "#6f7979",
                        "error": "#ba1a1a",
                        "on-secondary-fixed": "#022015",
                        "background": "#fdf9f6",
                        "surface-container-highest": "#e5e2df",
                        "on-tertiary": "#ffffff",
                        "on-surface-variant": "#3f4948",
                        "primary": "#004242",
                        "on-primary-fixed-variant": "#004f50",
                        "inverse-on-surface": "#f4f0ed",
                        "surface-variant": "#e5e2df",
                        "on-tertiary-container": "#e0bfa0",
                        "error-container": "#ffdad6",
                        "outline-variant": "#bec8c8",
                        "inverse-primary": "#8dd3d3",
                        "tertiary-container": "#654d34",
                        "surface-container": "#f1edea",
                        "surface-dim": "#ddd9d6",
                        "on-primary-container": "#8bd0d1",
                        "tertiary": "#4c361f",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f7f3f0",
                        "on-error-container": "#93000a",
                        "on-background": "#1c1b1a",
                        "tertiary-fixed-dim": "#e2c1a1",
                        "on-secondary-container": "#4c6b5c",
                        "on-error": "#ffffff",
                        "on-primary": "#ffffff",
                        "inverse-surface": "#31302f",
                        "on-secondary": "#ffffff",
                        "secondary-fixed": "#c8ead8",
                        "on-primary-fixed": "#002020",
                        "primary-fixed": "#a8efef",
                        "primary-fixed-dim": "#8dd3d3",
                        "surface-bright": "#fdf9f6",
                        "secondary": "#466556",
                        "on-secondary-fixed-variant": "#2f4d3f",
                        "on-surface": "#1c1b1a"
                    },
                    fontFamily: {
                        "headline": ["Newsreader"],
                        "body": ["Manrope"],
                        "label": ["Manrope"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-nav {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .text-shimmer {
            background: linear-gradient(135deg, #004242 0%, #005b5c 50%, #004242 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .pebble-shadow {
            box-shadow: 0 12px 40px rgba(28, 27, 26, 0.04);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface antialiased overflow-x-hidden">
    <!-- TopNavBar Implementation -->
    <nav
        class="fixed top-0 w-full z-50 bg-white/10 dark:bg-stone-900/10 backdrop-blur-xl shadow-sm dark:shadow-none transition-all duration-300">
        <div class="flex justify-between items-center px-8 py-4 max-w-screen-2xl mx-auto">
            <div class="font-serif text-2xl font-semibold italic text-teal-900 dark:text-teal-50">
                Chhapaak Resort
            </div>
            <div class="hidden md:flex items-center gap-12">
                <a class="font-serif text-lg tracking-wide Newsreader text-teal-700 dark:text-teal-300 border-b-2 border-teal-700 dark:border-teal-300 pb-1"
                    href="#">Rooms</a>
                <a class="font-serif text-lg tracking-wide Newsreader text-stone-600 dark:text-stone-400 hover:text-teal-800 dark:hover:text-stone-200 transition-colors"
                    href="#">Experiences</a>
                <a class="font-serif text-lg tracking-wide Newsreader text-stone-600 dark:text-stone-400 hover:text-teal-800 dark:hover:text-stone-200 transition-colors"
                    href="#">Gallery</a>
            </div>
            <div class="flex items-center gap-6">
                <button
                    class="bg-primary text-on-primary px-8 py-2.5 rounded-full font-label text-sm tracking-widest uppercase hover:scale-95 duration-200 ease-in-out">
                    Book Now
                </button>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <header class="relative h-screen w-full flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-75"
                data-alt="Cinematic wide shot of luxury resort pool overlooking ocean"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCSEzEk4QOMiArrNz3WTwtpYuvkCpq_sCVLOvUdnjs70jsb6YNXSw43ChWW0uaG3Zc9O0-Q5HHokkb0VyH7-9ee4FBLcuZSAQWEuZeEN-7mZI1qXwWmyqZSUCKX3CX19v0VF21EOCX0nopx6xa9aOC-WHA_ijDakxXMp2fhhqGx2zrTvDtKsGoWkgeA-HaKYUYhWbx9ecBLiBSexyMH32toSxT8w8DfOCTW1YXEhUnw4fznViJJPhbDNaF53uuiAXUA7--i_y2riA" />
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-surface"></div>
        </div>
        <div class="relative z-10 text-center px-6 max-w-5xl">
            <h1 class="font-headline text-6xl md:text-9xl text-white italic leading-tight tracking-tight mb-8">
                Ethereal <br />
                <span class="font-bold not-italic">Sanctuary</span>
            </h1>
            <p class="font-body text-xl md:text-2xl text-white/90 mb-12 max-w-2xl mx-auto font-light leading-relaxed">
                Where the whisper of the tides meets the soul of contemporary luxury.
            </p>
            <div class="flex flex-col md:flex-row gap-6 justify-center items-center">
                <button
                    class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-10 py-4 rounded-full font-label tracking-[0.2em] uppercase hover:bg-white hover:text-primary transition-all duration-500">
                    Explore Suites
                </button>
                <button class="text-white font-label tracking-widest flex items-center gap-3 group">
                    View Experiences
                    <span
                        class="material-symbols-outlined transition-transform group-hover:translate-x-2">arrow_forward</span>
                </button>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 text-white/50 animate-bounce">
            <span class="material-symbols-outlined text-4xl">keyboard_double_arrow_down</span>
        </div>
    </header>
    <!-- Sanctuaries Section (Editorial Grid) -->
    <section class="py-32 px-8 max-w-screen-2xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
            <div class="max-w-2xl">
                <span class="font-label text-primary tracking-[0.3em] uppercase text-sm mb-4 block">Personal
                    Havens</span>
                <h2 class="font-headline text-5xl md:text-7xl leading-tight">Our Sanctuaries</h2>
            </div>
            <p class="font-body text-on-surface-variant max-w-sm text-lg">
                Each space is a deliberate dialogue between natural textures and refined comfort.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
            <!-- Large Featured Room -->
            <div class="md:col-span-7 group cursor-pointer">
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl mb-6">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        data-alt="Ultra luxury suite with private infinity pool access"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLJ_ajY6RHmGhnloaJggbiDJFdyPkY7iPUfNGRMBEn_qMYReVqZX0KoYFd158gUz02Iyj8bc24oRqMg22O_Cm-SVbfs2ZkFlmq5G0vF7RBJelzvvuywX1oyF1sP8MQa0sHuj5Q6TLWPpKgO9t9Bv2SMOgSD6pETsIHTGIIK89kgJtTvAm4xX88yD91wUM3YQwD1TxY-gY9WQiDEORJLdcRlWjEhnKcPpAHl4Omh_Ny-seZjoQrcH18DCdh3BA81MpVT3hKbiA_Icw" />
                    <div
                        class="absolute top-6 left-6 bg-white/80 backdrop-blur px-4 py-1 rounded-full text-xs font-label uppercase tracking-widest">
                        Most Immersive
                    </div>
                </div>
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-headline text-3xl mb-2">Azure Horizon Suite</h3>
                        <p class="font-label text-on-surface-variant tracking-widest uppercase text-xs">Private Pool
                            &amp; Ocean Vista</p>
                    </div>
                    <div class="text-right">
                        <span class="font-headline text-4xl block text-primary">$1,250</span>
                        <span class="text-xs font-label text-on-surface-variant">PER NIGHT</span>
                    </div>
                </div>
            </div>
            <!-- Smaller Stacked Rooms -->
            <div class="md:col-span-5 flex flex-col gap-16 md:mt-24">
                <div class="group cursor-pointer">
                    <div class="relative aspect-square overflow-hidden rounded-xl mb-6">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            data-alt="Elegant bedroom with high wooden ceilings and natural light"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgRHPeERsLhJHn33A9MRA9hAjl2F3s_lNdCFQMEfIl6Va-rNa20jvcN-XrTHTXZriMZiOkZzmlF5m03Wg028sW6_Sg6q_wHztLGlMPSqxSXMpUZZica3egDzsV03vmK3q8onDthAP5Mr4HIyY_hMRAvpvXFmgz3QbJSQac_n5QZi4f_lR55mONt-wmJk-gtlefMsQD952BiaMKn2R1L2N3ilnlUiBuEOIzrKs3HfYtOM17Rl2VNF1zDcBL-7zwGVa-6Qkx9Po1WrU" />
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="font-headline text-2xl mb-1">Whispering Palms Villa</h3>
                            <p class="font-label text-on-surface-variant tracking-widest uppercase text-xs">Garden
                                Sanctuary</p>
                        </div>
                        <div class="text-right">
                            <span class="font-headline text-3xl block text-primary">$890</span>
                        </div>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl mb-6">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            data-alt="Minimalist luxury bathroom with outdoor shower concept"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDltKujAgvsYyFHplAzncP7JaxClmwwXwdeFHclIx0cRzIbvmJZWVlXzCs7rTb7DaCexkcr3fv3Yiw4VMjfeV9z2GwSz9M47FvbRuLgzsau2uYFC3IRl88Y6wEqLEO1JmmsMIiP2VxGVzEQENbKhmxtjQKduFTMu9UGJa7Ma24RBrSYa43KoPrHUNEJ0_6GM-o0g_cxAqIF9eQZV-EhH5ph0HrAyDVc90jGbOEdIu4OAtTT-XX65Ck_XY-6s3rRNNtbr6zxk8IvK4I" />
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="font-headline text-2xl mb-1">Tidal Loft</h3>
                            <p class="font-label text-on-surface-variant tracking-widest uppercase text-xs">Elevated
                                Seclusion</p>
                        </div>
                        <div class="text-right">
                            <span class="font-headline text-3xl block text-primary">$1,100</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experiences Section (Overlapping Asymmetry) -->
    <section class="bg-surface-container-low py-32 overflow-hidden">
        <div class="max-w-screen-2xl mx-auto px-8 relative">
            <div class="relative z-10 max-w-xl mb-20">
                <span class="font-label text-primary tracking-[0.3em] uppercase text-sm mb-4 block">Curation</span>
                <h2 class="font-headline text-5xl md:text-7xl mb-8 leading-none">Experiences <br />Beyond Tides</h2>
            </div>
            <div class="relative h-[600px] md:h-[800px]">
                <!-- Experience Card 1 -->
                <div class="absolute left-0 top-0 w-full md:w-3/5 z-20">
                    <div class="relative aspect-video rounded-xl overflow-hidden shadow-2xl">
                        <img class="w-full h-full object-cover"
                            data-alt="Private dinner setup on the beach under the stars"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuANjO24MmvTo5QCodLg-GUFjf6wf6aSLFuuQLTyiMBVrVp3-1pZYf6vkrWJZTyKCXbm1wX6o-u03px47DmoBB5uK9cz7hAAqAm-YMw-jIExdLTAgxFXPYu1ZLaz6lOjivqtYHzxm1GXjOxkRnRVZ3NUa_c2JoNillMIflnuPdGVklT2qOmErWRcic3uUM36xk5C_p2VHbRyR6uZKZ6BFnMyfFNGz-jKFOGXwacQ0S2yi2YU9m9bJRprvbXfmDJFAQFs1kwTXE6g6uQ" />
                        <div class="absolute inset-0 bg-black/20"></div>
                    </div>
                    <div
                        class="absolute -bottom-12 right-0 md:-right-12 bg-surface p-10 max-w-md pebble-shadow rounded-xl">
                        <h4 class="font-headline text-3xl mb-4 italic text-primary">Celestial Dining</h4>
                        <p class="font-body text-on-surface-variant text-base leading-relaxed mb-6">
                            An intimate four-course odyssey curated by our executive chef, served under the canopy of
                            the midnight sky.
                        </p>
                        <button
                            class="text-primary font-label text-sm tracking-widest uppercase flex items-center gap-2 group">
                            Learn More <span
                                class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
                        </button>
                    </div>
                </div>
                <!-- Experience Card 2 -->
                <div class="absolute right-0 bottom-0 w-3/4 md:w-2/5 hidden md:block">
                    <div
                        class="relative aspect-[3/4] rounded-xl overflow-hidden shadow-xl border-8 border-surface-container-low">
                        <img class="w-full h-full object-cover" data-alt="Zen yoga session at sunrise on a wooden deck"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBR-wGHmOUHS2ag7DG--RD6EFixcTIIQONCSK-x9NXgzJYJuYePInZtZgxEU2t-fPG9nqtKa_k3ZWMxu_bIT1rwwwRM7_Zp6_nWRPB4dpxZJpXkH7phRb1-79bYeSW0h_VuWCkrwshfZ9rPkjypUTbvRv2SammncXFs5MtIYmrERedg2B29SVTt1rGxe5eTgTu1FdmeVFb6Y7OSJhizchLRojD385nMxsPLQZ89-hI0rXLjHOsm6h1YT8ClDsPmjYq0S1MSUPac2DU" />
                    </div>
                    <div class="mt-6 text-right">
                        <h4 class="font-headline text-2xl">Dawn Vitality</h4>
                        <p class="font-label text-on-surface-variant text-xs tracking-widest uppercase">Guided Yoga
                            &amp; Sound Healing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Epicurean Journeys -->
    <section class="py-32 px-8 max-w-screen-xl mx-auto text-center">
        <span class="font-label text-primary tracking-[0.3em] uppercase text-sm mb-6 block">The Palette</span>
        <h2 class="font-headline text-5xl md:text-7xl mb-16 italic">Epicurean Journeys</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center">
            <div class="space-y-6">
                <div class="aspect-[4/5] overflow-hidden rounded-full">
                    <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                        data-alt="Artisanal seafood dish with modern plating"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxN9TkXkOSd86ae8IpwqyuxlYEojdbRlU3fXCcYHY73IE_g77YG9ZtArDVNxkB6R99P3A-ql1nVDgAoIo3Op4UGIRfwPIzAPfm7BhVwK1DfS0pBDcO0948XquTUgONXqTNyQjwM94K8nXcm8Mb5DbKJ4koGf6D_NaHaWo4Tj1mh2mYV0fcJHULeDYE7I1XBLqxe1dqlRPN090J12RiYdVhaOIg4UjN2UJnHfB_kG5p4Mw-kSk3Kymh5-hB_YVehnahaeQ4nzpjc74" />
                </div>
                <h5 class="font-headline text-2xl">The Raw Bar</h5>
                <p class="font-body text-on-surface-variant text-sm px-4">Ocean-to-table delicacies served with a
                    contemporary twist of local spices.</p>
            </div>
            <div class="space-y-6 transform md:-translate-y-12">
                <div class="aspect-[4/5] overflow-hidden rounded-full border-2 border-primary/10 p-4">
                    <img class="w-full h-full object-cover rounded-full"
                        data-alt="Sophisticated cocktail in a crystal glass with garnish"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCckGbcU68k_DX7UMvxuph2cHXpIp55bInq7cnisEUy3lbGJWCYVUL4Q8TitSmrCVVQlPobwQIKXptssJqybdw8_upffSyC9fhQO-ACS1R2yBjsETb1bWhyrJ_uRHo0eLfokWaP_qPDARVYQc50nW3EhUngt4fb4zNrV_9hS0D99qC6BRD5ea128_5lLGIoQdu8wHQ41GSQ9kp3W0CT5cO_4UNS5WeZ0BxBPJDCrE6xumWPSiW2lw-zkZU5pUcivcpPlniXTsVvRzg" />
                </div>
                <h5 class="font-headline text-2xl">Luna Lounge</h5>
                <p class="font-body text-on-surface-variant text-sm px-4">Molecular mixology inspired by the lunar
                    cycles and tropical botanicals.</p>
            </div>
            <div class="space-y-6">
                <div class="aspect-[4/5] overflow-hidden rounded-full">
                    <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                        data-alt="Exotic fruit and pastry breakfast spread"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcgFhCMCkicSEbRLMIqDian85LuOVKQWljaRIVWbiBZxsQqmXSzaXJokwdaXv4CLGaFxeAHJw9e5va_zdSCkJtP9Os9inQCdX_DGVySJAln0M8BIn1UFYc0OmAmOmunzRVVtiIcWlZGkw3ejGuxdsqpu27GpnCrbFXNj9Y6mLSLaj7bhL-Z9aqxh-Cn05Z7ps0lcJEVGTew4kJlcxrloAWI-rRLRa_pJWac4d4QZo1_c3AGHaP_7TVS174y1k3vslAnpD60QobITQ" />
                </div>
                <h5 class="font-headline text-2xl">Veranda Morning</h5>
                <p class="font-body text-on-surface-variant text-sm px-4">Slow breakfasts featuring rare local fruits
                    and hand-roasted coffees.</p>
            </div>
        </div>
    </section>
    <!-- Gallery (Bento / Asymmetrical) -->
    <section class="py-20 bg-surface-container-highest">
        <div class="max-w-screen-2xl mx-auto px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 grid-rows-2 gap-4 h-[600px] md:h-[800px]">
                <div class="col-span-2 row-span-2 relative group overflow-hidden rounded-xl">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Aerial view of the resort villas and coastline"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVeJ5tKMNfAO1PSJLWkpAyz5Mwqsj5MjY7uPZ2FaaHcaw8IPxIOLI4nqMOiYu9Nc2aHzkVSBjs7i-jH1VRjVqJDtlWBuHSk1JtKjAqWgxOHFlcxK6mXFdZww6gDOt6OXNYDZTzfyNiF1uK_HWVr4-Znynf_TaC8Cum9HFJTEQdLipNdqNAVIXAomIUCwn1AUVbcS02olJAy3GYNb4XQNgvx9JzSHazUAWl2lBJCjTikPRh4oV660cX-URcyOkAOI0V1h5cdzwX88E" />
                </div>
                <div class="col-span-1 row-span-1 relative group overflow-hidden rounded-xl">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Lush tropical garden pathway at twilight"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoaTh01T2tNBPezNZWYLLHbOqB2r-x2NsHKSd274myn6l1e75Z8qJHB6l_3GeKo--Sh7rRtzdV91tCEByommHF9u4RbNJJqZdDJv_o77P9xYyaCakouWMUVm0Vp4uuPnVav-ZfxjMJvv4wxdCtyEpubfOQIjqWbrwBuCoWC2vpO-P_50t-FaFc5krl46zQUCwgIlJHc8DC-WLnLH_Xat4fq7FG7HpBdwss2RdYrmgHXnCKJiO5iyOrEC4GWp8eIHI-weJuEI8aaIM" />
                </div>
                <div class="col-span-1 row-span-1 relative group overflow-hidden rounded-xl">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Pool deck lounge chairs with sunset view"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtIfrCpkL77uNjHHsS8OoCqaWO_U7ru4mClvmFNml3pQN6vV-zRzzxqnGosWwJoErxAdhqIMNSAmwOm2SNXFqpZPvjAObBcC-OLxZf85UQkC7IT8WDPndKCtTmypPeRUlb3MafTgdVmIbxb7vPxgH-kCTqe0YFBj4uQopjR8W0b5ffczSwF-Dc0D09-C2LB05zCNpjxVbj0KlRXyNHAmmaFZxj-TrhnrdjwvAbMoeWfmw5PDjRMaArCcHRQi2sqGTdDMcmJzWEQno" />
                </div>
                <div class="col-span-2 row-span-1 relative group overflow-hidden rounded-xl">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Interior of a luxury villa with ocean view"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlThXVtNEJCHF1m6kvB51_eIjJxJa_wizNgCNLdt4HDtY9L_yEwkNkVVYmJog9MYpbykTZD5jzOgkykDZ4XxNiilMC7xwedF13kbpJii9Edrp3KOn3_h4ATiD1tfvUii83hR8fKFjp0-dpMXwu6YLJeSD6SXZ3VSxOu7z32Pb8SIPJ8Ji6OoLqfuW31Z0jbUtk6rNzpwpLQNl-46XJhYF_yGFTB_YtCenSzneJoRJy65Vx1LrN53hytJzjGYETxOcr7aULEw94y3g" />
                </div>
            </div>
        </div>
    </section>
    <!-- Final CTA Section -->
    <section class="relative bg-primary py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <div class="absolute top-0 right-0 w-96 h-96 bg-secondary-fixed-dim rounded-full blur-[100px]"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-tertiary-fixed rounded-full blur-[100px]"></div>
        </div>
        <div class="max-w-4xl mx-auto px-8 text-center relative z-10">
            <h2 class="font-headline text-5xl md:text-8xl text-white mb-12 italic leading-tight">Begin your
                <br />unwritten story.</h2>
            <p class="font-body text-white/70 text-lg md:text-xl mb-16 max-w-xl mx-auto">
                Exclusive offers available for early-season bookings. Experience Chhapaak at its most tranquil.
            </p>
            <div class="flex flex-col md:flex-row gap-6 justify-center">
                <button
                    class="bg-surface text-primary px-12 py-5 rounded-full font-label tracking-widest uppercase text-sm font-bold hover:scale-105 transition-transform">
                    Reserve Now
                </button>
                <button
                    class="border border-white/30 text-white px-12 py-5 rounded-full font-label tracking-widest uppercase text-sm hover:bg-white/5 transition-colors">
                    Contact Concierge
                </button>
            </div>
        </div>
    </section>
    <!-- Footer Implementation -->
    <footer class="bg-stone-950 dark:bg-black w-full py-16 border-t border-stone-800">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 px-8 max-w-7xl mx-auto text-center md:text-left">
            <div>
                <div class="font-serif text-xl font-bold text-teal-50 dark:text-teal-100 mb-6">Chhapaak Resort</div>
                <p class="font-body text-stone-500 text-sm leading-relaxed max-w-xs mx-auto md:mx-0">
                    A secluded paradise where minimalist architecture meets the raw beauty of the tropics.
                </p>
            </div>
            <div class="flex flex-col gap-4">
                <span
                    class="font-sans text-sm tracking-widest uppercase Manrope text-teal-50 dark:text-teal-100 mb-2">Explore</span>
                <a class="text-stone-500 hover:text-teal-400 underline-offset-8 decoration-2 transition-opacity font-sans text-sm tracking-widest uppercase Manrope"
                    href="#">Contact</a>
                <a class="text-stone-500 hover:text-teal-400 underline-offset-8 decoration-2 transition-opacity font-sans text-sm tracking-widest uppercase Manrope"
                    href="#">Privacy Policy</a>
                <a class="text-stone-500 hover:text-teal-400 underline-offset-8 decoration-2 transition-opacity font-sans text-sm tracking-widest uppercase Manrope"
                    href="#">Sustainability</a>
                <a class="text-stone-500 hover:text-teal-400 underline-offset-8 decoration-2 transition-opacity font-sans text-sm tracking-widest uppercase Manrope"
                    href="#">Careers</a>
            </div>
            <div>
                <span
                    class="font-sans text-sm tracking-widest uppercase Manrope text-teal-50 dark:text-teal-100 mb-6 block">Newsletter</span>
                <p class="text-stone-500 text-sm mb-6">Join our circle for seasonal inspirations.</p>
                <div class="flex border-b border-stone-700 pb-2">
                    <input
                        class="bg-transparent border-none text-white focus:ring-0 w-full font-label text-xs tracking-widest"
                        placeholder="YOUR EMAIL" type="email" />
                    <button class="text-teal-100 material-symbols-outlined">north_east</button>
                </div>
            </div>
        </div>
        <div class="mt-16 text-center text-stone-600 font-sans text-xs tracking-widest uppercase Manrope">
            © 2024 Chhapaak Resort. All rights reserved.
        </div>
    </footer>
</body>

</html>
