<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Accommodations | Chhapaak Resort</title>
    <!-- Google Fonts: Noto Serif & Manrope -->
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@300;400;600;800&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                        "headline": ["Noto Serif"],
                        "body": ["Manrope"],
                        "label": ["Manrope"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .font-notoSerif {
            font-family: 'Noto Serif', serif;
        }

        .font-manrope {
            font-family: 'Manrope', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        .glass-effect {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
</head>

<body
    class="bg-background text-on-surface font-manrope selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopNavBar -->
    <nav
        class="fixed top-0 w-full z-50 bg-surface/60 backdrop-blur-xl flex justify-between items-center px-12 py-6 max-w-full">
        <div class="text-2xl font-notoSerif italic text-primary">Chhapaak</div>
        <div class="hidden md:flex space-x-12">
            <a class="font-notoSerif tracking-wide uppercase text-sm text-primary font-semibold border-b border-primary/30 transition-colors duration-300"
                href="#">Rooms</a>
            <a class="font-notoSerif tracking-wide uppercase text-sm text-on-surface/70 hover:text-primary transition-colors duration-300"
                href="#">Dining</a>
            <a class="font-notoSerif tracking-wide uppercase text-sm text-on-surface/70 hover:text-primary transition-colors duration-300"
                href="#">Wellness</a>
        </div>
        <button
            class="bg-primary text-on-primary px-6 py-2 rounded font-label text-sm uppercase tracking-widest hover:bg-primary-container transition-all active:scale-95">
            Online Booking
        </button>
    </nav>
    <main class="pt-32 pb-20 px-6 md:px-12 max-w-7xl mx-auto">
        <!-- Header Section -->
        <header class="mb-20 text-center md:text-left max-w-3xl">
            <h1 class="text-5xl md:text-7xl font-notoSerif text-primary leading-tight mb-6">The Sanctuary Suites</h1>
            <p class="text-lg md:text-xl text-on-surface-variant leading-relaxed font-light">
                Discover a dialogue between modernist architecture and the rhythmic pulse of the ocean. Each residence
                is a curated portal to tranquility, where every shadow and highlight has been choreographed for your
                restorative journey.
            </p>
        </header>
        <!-- Filters: Minimalist Top-bar -->
        <div class="flex flex-wrap items-center justify-between mb-16 gap-6 border-b border-outline-variant/20 pb-8">
            <div class="flex gap-8 overflow-x-auto no-scrollbar">
                <button
                    class="text-sm font-label uppercase tracking-widest text-primary font-bold border-b-2 border-primary pb-2">All
                    Residences</button>
                <button
                    class="text-sm font-label uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors pb-2">Villas</button>
                <button
                    class="text-sm font-label uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors pb-2">Suites</button>
                <button
                    class="text-sm font-label uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors pb-2">Penthouse</button>
            </div>
            <div class="flex items-center gap-4 text-on-surface-variant">
                <span class="text-xs font-label uppercase tracking-tighter">Sort By:</span>
                <select
                    class="bg-transparent border-none text-sm font-semibold text-primary focus:ring-0 cursor-pointer">
                    <option>Featured</option>
                    <option>Price: High to Low</option>
                    <option>Space: Largest First</option>
                </select>
            </div>
        </div>
        <!-- Listing Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-y-24 gap-x-12">
            <!-- Card 1: Oceanfront Villa (Featured Large Card) -->
            <div class="lg:col-span-12 group cursor-pointer">
                <div class="relative overflow-hidden rounded-lg aspect-[21/9] mb-8">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Luxurious modern oceanfront villa with infinity pool at dusk"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsnqHP0Ok1g3fPAJRbRz1KhBOnZeglZzdl01fzRHFynNSd1qWx67QpV_NOlrkv8hpDby7t9766ywVpyjM2H5csfSXBn2MOn6NB5ofY-CKJUHzI3CUJE8j64Binf6s7KL4N_lonRwiumOaTSe15dGwaiBujK0ES9qiQf0OnKfCiVz06GZ4oLt-ePtjaLebLC_ALylhYQQ9Feo6Sy3_C7_LWNeNIUkJWQdDBrqQoZr0rMjt0MYfOG4W6i0MMUltC_mgOrT9ee7vBvMY" />
                    <div
                        class="absolute top-6 left-6 bg-surface-container-lowest/90 backdrop-blur px-4 py-1 text-[10px] font-label uppercase tracking-[0.2em] text-primary">
                        Featured Selection
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-between items-start gap-8">
                    <div class="max-w-xl">
                        <h2 class="text-3xl md:text-4xl font-notoSerif text-primary mb-4">Oceanfront Villa</h2>
                        <p class="text-on-surface-variant leading-relaxed mb-6">
                            Perched on the edge of the Azure shelf, this villa offers uninterrupted horizons and a
                            private salt-water infinity pool that merges with the tide.
                        </p>
                        <div class="flex flex-wrap gap-6">
                            <div class="flex items-center gap-2 text-primary">
                                <span class="material-symbols-outlined text-xl">straighten</span>
                                <span class="text-sm font-label">2,450 sq ft</span>
                            </div>
                            <div class="flex items-center gap-2 text-primary">
                                <span class="material-symbols-outlined text-xl">pool</span>
                                <span class="text-sm font-label">Private Pool</span>
                            </div>
                            <div class="flex items-center gap-2 text-primary">
                                <span class="material-symbols-outlined text-xl">waves</span>
                                <span class="text-sm font-label">Direct Beach Access</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-end gap-4 min-w-[200px]">
                        <div class="text-right">
                            <span
                                class="text-xs font-label uppercase tracking-widest text-on-surface-variant block mb-1">Starting
                                from</span>
                            <span class="text-3xl font-notoSerif text-primary">$1,200 <small
                                    class="text-sm font-manrope font-light text-on-surface-variant">/
                                    NIGHT</small></span>
                        </div>
                        <button
                            class="w-full md:w-auto bg-primary text-on-primary px-10 py-4 rounded-lg font-label text-sm uppercase tracking-widest hover:bg-primary-container transition-all">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
            <!-- Card 2: Garden Suite -->
            <div class="lg:col-span-6 group cursor-pointer">
                <div class="relative overflow-hidden rounded-lg aspect-[4/5] mb-8">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Interior of a luxury garden suite with wooden accents and tropical plants"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFusLodZ24duDkE2SC3K1PBbg-3a7mGLVjrUJcwlHKvNV2LF6698vgwSpzvwK9dFeDWyjKey8i_eRPUMLPSaObaUhtWkkn2bPVOsX7mXdM_cKtOK4URnXDv2IyBz8fFT66lClT_V2WMbmMorehGPHYO55WQpuBQU3K27X3JrYBcvSC1eUtTqS60HxoYGk1g7clW9md4ykYr0QXZbcFWdXQ2Dsb49zAd3CBL95mwJMc1o-fivPRZYF0itJyo8BTqNIgsZNdL-k18fo" />
                </div>
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-notoSerif text-primary">Garden Suite</h3>
                    <span class="text-xl font-notoSerif text-primary">$650 <small
                            class="text-xs font-manrope text-on-surface-variant">/ NIGHT</small></span>
                </div>
                <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
                    A sanctuary of verdant tranquility. Experience the lush botanicals of the resort's private inner
                    sanctum with floor-to-ceiling glass walls.
                </p>
                <div
                    class="flex items-center gap-6 text-on-surface-variant text-xs font-label uppercase tracking-widest">
                    <span>850 SQ FT</span>
                    <span>•</span>
                    <span>Outdoor Rain Shower</span>
                </div>
            </div>
            <!-- Card 3: Royal Residence -->
            <div class="lg:col-span-6 group cursor-pointer">
                <div class="relative overflow-hidden rounded-lg aspect-[4/5] mb-8">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Exterior of a massive royal residence with multiple levels and golden lighting"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC72M4NSCglYufsCwfgreeze_q2T-RAtWc0vX9Sn1LUGve30j6TeoZOw83Q7i9Uc2QmIspoEswv4Vn4ydnMiAJ2NOmcDOufzPN5dD-B4rhQFfNcp8Y8U83hb2_vgQlu7DrPtVGY21ZUWZ_Gv_AsrduRkttSMM1zftOjfGRn6Mm3TqV9I0eQ4TDSPMOwxoIBImpgwXhxMqIgIUv3eg-P4Y2bX2j0Qn9jIUkZ-6kW1jG5RWCMpoyzLBCA6jx45ZHf6rOZPRri3ZHvMzo" />
                    <div
                        class="absolute bottom-6 right-6 glass-effect bg-white/10 px-4 py-2 text-white border border-white/20">
                        <span class="text-[10px] font-label uppercase tracking-widest">Limited Availability</span>
                    </div>
                </div>
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-notoSerif text-primary">Royal Residence</h3>
                    <span class="text-xl font-notoSerif text-primary">$3,400 <small
                            class="text-xs font-manrope text-on-surface-variant">/ NIGHT</small></span>
                </div>
                <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
                    The pinnacle of coastal living. A three-story architectural masterpiece featuring a private spa,
                    cinema, and dedicated butler service.
                </p>
                <div
                    class="flex items-center gap-6 text-on-surface-variant text-xs font-label uppercase tracking-widest">
                    <span>5,200 SQ FT</span>
                    <span>•</span>
                    <span>Private Spa</span>
                </div>
            </div>
        </div>
        <!-- Call to Action Section: Tonal Shift -->
        <section class="mt-32 p-12 md:p-24 bg-surface-container-low rounded-xl text-center">
            <h2 class="text-4xl md:text-5xl font-notoSerif text-primary mb-8 italic">Tailored Experiences</h2>
            <p class="max-w-2xl mx-auto text-on-surface-variant leading-relaxed mb-10">
                Are you looking for something bespoke? Our concierge can curate a multi-residence stay or a private
                island takeover tailored to your exact specifications.
            </p>
            <button
                class="border border-outline text-primary px-12 py-4 rounded-lg font-label text-sm uppercase tracking-widest hover:bg-primary hover:text-on-primary transition-all">
                Contact Concierge
            </button>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-primary dark:bg-black w-full mt-20">
        <div class="flex flex-col md:flex-row justify-between items-start px-12 py-16 max-w-7xl mx-auto">
            <div class="mb-12 md:mb-0">
                <div class="text-xl font-notoSerif text-surface mb-4">Chhapaak</div>
                <p class="font-manrope text-sm leading-relaxed text-surface/60 max-w-xs">
                    Curating moments of profound stillness at the intersection of luxury and the ocean's edge.
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-12 md:gap-24">
                <div class="flex flex-col gap-4">
                    <span class="text-surface font-semibold text-xs uppercase tracking-widest mb-2">Explore</span>
                    <a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity underline decoration-surface/20"
                        href="#">Contact</a>
                    <a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                        href="#">Dining</a>
                    <a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                        href="#">Wellness</a>
                </div>
                <div class="flex flex-col gap-4">
                    <span class="text-surface font-semibold text-xs uppercase tracking-widest mb-2">Socials</span>
                    <a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                        href="#">Instagram</a>
                    <a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                        href="#">Vimeo</a>
                    <a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                        href="#">Journal</a>
                </div>
                <div class="flex flex-col gap-4">
                    <span class="text-surface font-semibold text-xs uppercase tracking-widest mb-2">Legal</span>
                    <a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                        href="#">Privacy</a>
                    <a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                        href="#">Terms</a>
                    <a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                        href="#">Newsletter</a>
                </div>
            </div>
        </div>
        <div class="px-12 py-8 border-t border-surface/10 max-w-7xl mx-auto flex justify-between items-center">
            <p class="font-manrope text-xs text-surface/40">© 2024 Chhapaak Resort. All rights reserved.</p>
            <div class="flex gap-4">
                <span class="material-symbols-outlined text-surface/40 text-lg">water_drop</span>
                <span class="material-symbols-outlined text-surface/40 text-lg">bedtime</span>
            </div>
        </div>
    </footer>
</body>

</html>
