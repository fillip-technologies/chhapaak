<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Chhapaak Resort | Unveil the Sanctuary</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@300;400;600;800&amp;display=swap"
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
                        "surface-dim": "#d9dadd",
                        "on-error": "#ffffff",
                        "primary-container": "#004d4d",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#46453d",
                        "surface-tint": "#296767",
                        "secondary-fixed": "#ffe088",
                        "on-secondary-fixed-variant": "#574500",
                        "background": "#f9f9fd",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed": "#1c1c15",
                        "on-surface": "#1a1c1f",
                        "inverse-primary": "#94d1d1",
                        "primary-fixed": "#b0eeed",
                        "on-secondary-container": "#745c00",
                        "inverse-on-surface": "#f0f0f4",
                        "on-secondary": "#ffffff",
                        "surface-container-highest": "#e2e2e6",
                        "secondary": "#735c00",
                        "tertiary-fixed": "#e6e2d7",
                        "surface": "#f9f9fd",
                        "outline-variant": "#bfc8c8",
                        "on-primary-fixed-variant": "#044f4f",
                        "inverse-surface": "#2f3034",
                        "surface-bright": "#f9f9fd",
                        "primary-fixed-dim": "#94d1d1",
                        "on-tertiary-container": "#b5b2a8",
                        "secondary-container": "#fed65b",
                        "surface-container-high": "#e8e8ec",
                        "primary": "#003434",
                        "on-surface-variant": "#3f4848",
                        "on-secondary-fixed": "#241a00",
                        "on-primary": "#ffffff",
                        "surface-container": "#ededf1",
                        "on-primary-container": "#80bdbc",
                        "surface-variant": "#e2e2e6",
                        "surface-container-low": "#f3f3f7",
                        "secondary-fixed-dim": "#e9c349",
                        "tertiary-fixed-dim": "#cac6bc",
                        "on-tertiary-fixed-variant": "#48473f",
                        "on-error-container": "#93000a",
                        "on-tertiary": "#ffffff",
                        "outline": "#6f7978",
                        "error": "#ba1a1a",
                        "on-background": "#1a1c1f",
                        "tertiary": "#302f28",
                        "on-primary-fixed": "#002020"
                    },
                    fontFamily: {
                        "notoSerif": ["Noto Serif", "serif"],
                        "manrope": ["Manrope", "sans-serif"],
                        "headline": ["Noto Serif", "serif"],
                        "body": ["Manrope", "sans-serif"],
                        "label": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        .glass-nav {
            backdrop-filter: blur(20px);
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body
    class="bg-background text-on-surface font-manrope selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopNavBar from Shared Components -->
    <nav
        class="fixed top-0 w-full z-50 bg-surface/60 backdrop-blur-xl flex justify-between items-center px-12 py-6 max-w-full">
        <div class="text-2xl font-notoSerif italic text-primary">Chhapaak</div>
        <div class="hidden md:flex items-center gap-12 font-notoSerif tracking-wide uppercase text-sm">
            <a class="text-on-surface/70 hover:text-primary transition-colors duration-300" href="#">Rooms</a>
            <a class="text-on-surface/70 hover:text-primary transition-colors duration-300" href="#">Dining</a>
            <a class="text-on-surface/70 hover:text-primary transition-colors duration-300" href="#">Wellness</a>
        </div>
        <button
            class="bg-primary text-on-primary px-8 py-3 rounded uppercase tracking-widest text-xs font-bold hover:bg-primary-container transition-all active:scale-95 duration-300">
            Online Booking
        </button>
    </nav>
    <!-- Hero Slider Section -->
    <header class="relative h-screen w-full overflow-hidden flex items-center justify-center">
        <div class="absolute inset-0 z-0">
            <img alt="Luxury Infinity Pool at Sunset" class="w-full h-full object-cover scale-105"
                data-alt="Luxurious infinity pool at sunset reflecting orange sky"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDw6V23nlaEzxbbsbkF1VmyjeiEuwhhSix2XQ5xQdo86W0y8y5xBaJ8HygvVEmy7sXahibGAJSkOw4gCWR3nqRZ882xW_DKDt5sWaqN_QdM460qRPEPPGn94zJ3dav2OcBsl0elxPuyik22Bu8YrYL_-iAKmzjDzCOpQOlfdd-URLsF9X0E-V9maokc-rTyihL00h56yBXKzgU7HBnx8xbSdt3cl14eISwHNiP74tenJ4xCI-uKyMU-KJWI4J3CBVmMKor-we9_q4" />
            <div class="absolute inset-0 bg-primary/20 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-primary/40"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <h1 class="font-notoSerif text-6xl md:text-9xl text-surface font-light tracking-tighter leading-tight mb-8">
                Unveil the <br />
                <span class="italic font-normal">Sanctuary</span>
            </h1>
            <div class="flex items-center justify-center gap-4">
                <div class="h-px w-12 bg-surface/50"></div>
                <p class="font-manrope text-surface tracking-[0.3em] uppercase text-sm font-light">The Apex of Coastal
                    Living</p>
                <div class="h-px w-12 bg-surface/50"></div>
            </div>
        </div>
    </header>
    <!-- Floating Booking Bar -->
    <section class="relative z-20 -mt-16 px-6 max-w-6xl mx-auto">
        <div
            class="bg-surface-container-lowest/80 backdrop-blur-2xl p-4 md:p-8 rounded-xl shadow-[0_32px_64px_-16px_rgba(0,52,52,0.1)] flex flex-col md:flex-row items-end gap-6 border border-outline-variant/20">
            <div class="flex-1 w-full space-y-2">
                <label class="block text-[10px] uppercase tracking-widest font-bold text-outline">Check In</label>
                <div class="flex items-center gap-3 border-b border-outline/30 pb-2">
                    <span class="material-symbols-outlined text-primary"
                        data-icon="calendar_today">calendar_today</span>
                    <input
                        class="bg-transparent border-none focus:ring-0 p-0 text-primary font-manrope font-semibold w-full"
                        type="text" value="12 Oct 2024" />
                </div>
            </div>
            <div class="flex-1 w-full space-y-2">
                <label class="block text-[10px] uppercase tracking-widest font-bold text-outline">Check Out</label>
                <div class="flex items-center gap-3 border-b border-outline/30 pb-2">
                    <span class="material-symbols-outlined text-primary"
                        data-icon="calendar_month">calendar_month</span>
                    <input
                        class="bg-transparent border-none focus:ring-0 p-0 text-primary font-manrope font-semibold w-full"
                        type="text" value="18 Oct 2024" />
                </div>
            </div>
            <div class="flex-1 w-full space-y-2">
                <label class="block text-[10px] uppercase tracking-widest font-bold text-outline">Guests</label>
                <div class="flex items-center gap-3 border-b border-outline/30 pb-2">
                    <span class="material-symbols-outlined text-primary" data-icon="group">group</span>
                    <select
                        class="bg-transparent border-none focus:ring-0 p-0 text-primary font-manrope font-semibold w-full appearance-none">
                        <option>2 Adults, 1 Child</option>
                        <option>2 Adults</option>
                        <option>1 Adult</option>
                    </select>
                </div>
            </div>
            <button
                class="w-full md:w-auto bg-primary text-on-primary px-12 py-4 rounded-lg font-bold tracking-wider hover:bg-primary-container transition-all flex items-center justify-center gap-2">
                SEARCH
                <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
            </button>
        </div>
    </section>
    <!-- Introduction Section: Our Essence -->
    <section class="py-32 px-12 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-20 items-center">
            <div class="md:col-span-7 relative">
                <div class="aspect-[4/5] rounded-xl overflow-hidden relative z-10">
                    <img alt="Luxury Spa Treatment" class="w-full h-full object-cover"
                        data-alt="Zen spa room with natural wood and soft lighting"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnJaFCNF-PrKnCiIbYz24-1DkU3rkMPAw0L0APDaNObf5jOAmclC8H4cN5IdDwUYwN9R3GiXflmpqY0ZipKjHklTHNntq1HraXRcMBR12lNNiyTfqezWXTtMLUifKhEQ131E4x-aPSZGetyRtCAv39e7xg5eycmlATfdcIpqX6jtqUcOaz4kY18Y2oFh6SxHyczRVRSBERGxCUDzHyiYN_ZDbmY4aRkOyURgPzml39plE5YAwKRgzsG-YbBZE1j2Yfh-VCdufPjRk" />
                </div>
                <!-- Artistic Overlap -->
                <div
                    class="absolute -bottom-12 -right-12 w-64 h-64 bg-surface-container-high rounded-xl -z-10 hidden md:block">
                </div>
                <div
                    class="absolute -top-12 -left-12 font-notoSerif text-primary/5 text-[12rem] select-none leading-none -z-10">
                    01</div>
            </div>
            <div class="md:col-span-5 space-y-8">
                <div class="space-y-4">
                    <p class="text-secondary font-manrope font-bold uppercase tracking-[0.4em] text-xs">Genesis</p>
                    <h2 class="font-notoSerif text-5xl text-primary leading-tight">Our Essence</h2>
                </div>
                <p class="text-on-surface-variant leading-relaxed text-lg font-light">
                    Chhapaak isn't just a destination; it's a curated echo of the tides. Born from the Sanskrit word for
                    the gentle sound of water hitting a shore, our resort is designed to dissolve the boundaries between
                    architecture and nature.
                </p>
                <p class="text-on-surface-variant leading-relaxed font-light">
                    Every stone is placed with intention, every window framed to capture the celestial dance of light on
                    the Arabian Sea. Here, luxury is quiet, tactile, and profoundly personal.
                </p>
                <div class="pt-6">
                    <a class="inline-flex items-center gap-4 text-primary font-bold group" href="#">
                        <span
                            class="border-b border-primary/20 group-hover:border-primary transition-all pb-1 uppercase tracking-widest text-sm">Discover
                            the Narrative</span>
                        <span class="material-symbols-outlined transition-transform group-hover:translate-x-2"
                            data-icon="trending_flat">trending_flat</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Divider (Tonal Shift) -->
    <div class="h-px w-full bg-gradient-to-r from-transparent via-outline-variant/30 to-transparent"></div>
    <!-- Curated Experiences Section -->
    <section class="py-32 bg-surface-container-low">
        <div class="max-w-7xl mx-auto px-12">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div class="max-w-xl space-y-4">
                    <p class="text-secondary font-manrope font-bold uppercase tracking-[0.4em] text-xs">Collection</p>
                    <h2 class="font-notoSerif text-5xl text-primary">Curated Experiences</h2>
                </div>
                <p class="text-on-surface-variant max-w-xs font-light text-sm italic">
                    Designed for those who seek the extraordinary in every fleeting moment of existence.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Card 1 -->
                <div class="group cursor-pointer">
                    <div class="relative aspect-[3/4] overflow-hidden rounded-xl mb-6">
                        <img alt="Private Dining"
                            class="w-full h-full object-cover grayscale-[30%] group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700"
                            data-alt="Elegant candlelight dinner on a private beach dock"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7_3eVD4d8HAG7ltDaieRBr9lzhlPhmn1c088wWM2oYCuCwPjCPWUkMi77AI6uq5ZCKzeiySZ9d_5m4NdyTNNtNg7aeQmp2qM6N0hAiCcDLXHN2EM2WUZFW68eRAHDRReTQVzQypJDjsQLF_MvjkzEhvHtPT1eKrlSoFiQoZpTw-ftxCa2tbkgLmanSC_C5elM7DrX81hz-hUoEmamFKle51SPws2y6a5FJbvrbTQea_erfR16KlUhM4BqHLFqGMLWZcrQ5JMrdto" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-60">
                        </div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-center text-surface">
                            <span class="font-notoSerif italic text-xl">01</span>
                            <span
                                class="material-symbols-outlined opacity-0 group-hover:opacity-100 transition-opacity translate-x-4 group-hover:translate-x-0 duration-500"
                                data-icon="north_east">north_east</span>
                        </div>
                    </div>
                    <h3 class="font-notoSerif text-2xl text-primary mb-2">Private Dining</h3>
                    <p class="text-on-surface-variant text-sm font-light line-clamp-2">Ephemeral tables set under the
                        stars, featuring a menu dictated by the day's fresh catch.</p>
                </div>
                <!-- Card 2 -->
                <div class="group cursor-pointer translate-y-12">
                    <div class="relative aspect-[3/4] overflow-hidden rounded-xl mb-6">
                        <img alt="Spa &amp; Wellness"
                            class="w-full h-full object-cover grayscale-[30%] group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700"
                            data-alt="Woman receiving traditional oil treatment in luxury spa"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPwzNqg6g_vdBtby8XDCocaxXqPM2p2tMBJPQZHZM2mAdxTZODLRgLhPuwLDbWqigsgxSiUpJgz9fIRA0GCa5whkdwgkFv8OLQizRYewj5dZuueTYVoXkrhuTq-9_3Xlqeg59xt-jzcJAbZ0O6pXaYdMG-rNVHij5ekyuY1cdxH8c4R-vZf1M1J6v8HDIpAxPLKERMxPfGTL8rTWY52QQlslqP4cnW87DVPERUozAdNhXGYfNJHpZ9jCvRNAgVfVrProwvV0SL2ak" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-60">
                        </div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-center text-surface">
                            <span class="font-notoSerif italic text-xl">02</span>
                            <span
                                class="material-symbols-outlined opacity-0 group-hover:opacity-100 transition-opacity translate-x-4 group-hover:translate-x-0 duration-500"
                                data-icon="north_east">north_east</span>
                        </div>
                    </div>
                    <h3 class="font-notoSerif text-2xl text-primary mb-2">Spa &amp; Wellness</h3>
                    <p class="text-on-surface-variant text-sm font-light line-clamp-2">Holistic rituals that align your
                        internal rhythm with the pulse of the ocean tides.</p>
                </div>
                <!-- Card 3 -->
                <div class="group cursor-pointer">
                    <div class="relative aspect-[3/4] overflow-hidden rounded-xl mb-6">
                        <img alt="Adventure"
                            class="w-full h-full object-cover grayscale-[30%] group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700"
                            data-alt="Luxury yacht sailing across deep blue water"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3dMhaZQz94GwNPK_feNWmJJaP1n0aMfFyOYITmh9eeuiyjZm0szVHKUscnUMMFeuCx74A-nB7NzRDt0oZwwecP8bui_mGf2bb53LfcCyrQjIJXXOuQ_Wsopx8_oFC5znnaPgsSbDlH46PQBQaq37PTjQQ0kzZaTSzXi_0kcVM2yQRu1D2yL_NqOJXp-xoi82r3TxGJXeym2LiDv7tXMuRu0Q4ksG8AxRJfwkb5Voxh1ESCUd87klsJACZXDnBY5iZ3gOzYZc87kM" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-60">
                        </div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-center text-surface">
                            <span class="font-notoSerif italic text-xl">03</span>
                            <span
                                class="material-symbols-outlined opacity-0 group-hover:opacity-100 transition-opacity translate-x-4 group-hover:translate-x-0 duration-500"
                                data-icon="north_east">north_east</span>
                        </div>
                    </div>
                    <h3 class="font-notoSerif text-2xl text-primary mb-2">Adventure</h3>
                    <p class="text-on-surface-variant text-sm font-light line-clamp-2">Bespoke marine expeditions to
                        uncharted islets and hidden coastal grottos.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Full Width Callout -->
    <section class="relative h-[614px] flex items-center justify-center overflow-hidden mt-20">
        <div class="absolute inset-0 bg-primary parallax-bg"
            data-alt="Breathtaking ocean view through modern architecture"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBftHxR5_E_RlUNTHYIOMXRVm1LKBxq_EwEHqw3d_LLESP4GEKIM6ylFhTV72T-6_k396ZXgaCjjuTA4Z6kvHpcHyDsAAwSzky5kiTEg3jX7ZE3RVS3k631JOy-ip5kFAm86xR_wi4iYLVwn0pStgfCQyqJp8f1vUSqonc6wVIlmzQ_Vf8RIeTsy_lKbjpfhTpGf7d6eHPxki7vqw4LYJIgR87-rJ1bZLyiJVujzuE6xT_346BaxrFf7f6mAlQx1DPJC5vfXyEy19g')">
        </div>
        <div class="absolute inset-0 bg-primary/40 backdrop-blur-[2px]"></div>
        <div class="relative z-10 text-center max-w-2xl px-6">
            <h2 class="font-notoSerif text-4xl md:text-5xl text-surface mb-8 leading-tight">Escape the Ordinary.
                <br />Inhabit the Dream.</h2>
            <button
                class="bg-surface text-primary px-10 py-4 rounded font-bold uppercase tracking-widest text-xs hover:bg-surface-dim transition-colors">
                Reserve Your Stay
            </button>
        </div>
    </section>
    <!-- Footer from Shared Components -->
    <footer class="bg-primary dark:bg-black w-full mt-20">
        <div
            class="flex flex-col md:flex-row justify-between items-start px-12 py-16 max-w-7xl mx-auto font-manrope text-sm leading-relaxed text-surface dark:text-surface-variant">
            <div class="space-y-6 mb-12 md:mb-0">
                <div class="text-xl font-notoSerif text-surface">Chhapaak</div>
                <p class="max-w-xs text-surface/60">
                    A boutique resort experience where high-end design meets the untamed beauty of the coastline.
                </p>
                <div class="flex gap-4">
                    <span class="material-symbols-outlined text-surface/60 hover:text-surface cursor-pointer"
                        data-icon="share">share</span>
                    <span class="material-symbols-outlined text-surface/60 hover:text-surface cursor-pointer"
                        data-icon="language">language</span>
                    <span class="material-symbols-outlined text-surface/60 hover:text-surface cursor-pointer"
                        data-icon="alternate_email">alternate_email</span>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-12">
                <div class="space-y-4">
                    <h4 class="font-bold uppercase tracking-widest text-xs text-surface">Contact</h4>
                    <ul class="space-y-2 text-surface/60">
                        <li><a class="hover:text-surface transition-opacity" href="#">Reservations</a></li>
                        <li><a class="hover:text-surface transition-opacity" href="#">Events</a></li>
                        <li><a class="hover:text-surface transition-opacity" href="#">Press</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4 class="font-bold uppercase tracking-widest text-xs text-surface">Socials</h4>
                    <ul class="space-y-2 text-surface/60">
                        <li><a class="hover:text-surface transition-opacity" href="#">Instagram</a></li>
                        <li><a class="hover:text-surface transition-opacity" href="#">LinkedIn</a></li>
                        <li><a class="hover:text-surface transition-opacity" href="#">Vimeo</a></li>
                    </ul>
                </div>
                <div class="space-y-4 col-span-2 md:col-span-1">
                    <h4 class="font-bold uppercase tracking-widest text-xs text-surface">Newsletter</h4>
                    <div class="flex items-center border-b border-surface/20 pb-2">
                        <input
                            class="bg-transparent border-none focus:ring-0 p-0 text-xs w-full placeholder:text-surface/30"
                            placeholder="Email Address" type="email" />
                        <span class="material-symbols-outlined text-sm text-surface/60" data-icon="send">send</span>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="px-12 py-8 border-t border-surface/10 max-w-7xl mx-auto flex justify-between items-center text-[10px] uppercase tracking-[0.2em] text-surface/30">
            <span>© 2024 Chhapaak Resort. All rights reserved.</span>
            <div class="flex gap-8">
                <a class="hover:text-surface" href="#">Privacy</a>
                <a class="hover:text-surface" href="#">Terms</a>
            </div>
        </div>
    </footer>
</body>

</html>
