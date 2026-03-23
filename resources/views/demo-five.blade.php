<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Experiences &amp; Wellness | Chhapaak Resort</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@300;400;600&amp;display=swap"
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
                        "lg": "0.75rem",
                        "xl": "1rem",
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

        .font-notoSerif {
            font-family: 'Noto Serif', serif;
        }

        .font-manrope {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body
    class="bg-background text-on-surface font-manrope selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopNavBar -->
    <header class="fixed top-0 w-full z-50 bg-surface/60 backdrop-blur-xl">
        <nav class="flex justify-between items-center px-12 py-6 max-w-full">
            <div class="text-2xl font-notoSerif italic text-primary">Chhapaak</div>
            <div class="hidden md:flex items-center space-x-12">
                <a class="font-notoSerif tracking-wide uppercase text-sm text-on-surface/70 hover:text-primary transition-colors duration-300"
                    href="#">Rooms</a>
                <a class="font-notoSerif tracking-wide uppercase text-sm text-on-surface/70 hover:text-primary transition-colors duration-300"
                    href="#">Dining</a>
                <!-- Active Nav: Wellness -->
                <a class="font-notoSerif tracking-wide uppercase text-sm text-primary font-semibold border-b border-primary/30 transition-colors duration-300"
                    href="#">Wellness</a>
            </div>
            <button
                class="bg-primary text-on-primary px-6 py-2 rounded-full font-manrope text-sm tracking-widest uppercase hover:bg-primary-container transition-all active:scale-95 shadow-sm">
                Online Booking
            </button>
        </nav>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="relative h-[921px] flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img alt="Wellness at Chhapaak" class="w-full h-full object-cover scale-105"
                    data-alt="Serene luxury spa overlooking turquoise ocean waters"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdbFiWht_h2OhhUG_pdZOwrBA__xXdqdouQ-m31Mwzc1UZZdD3syFGw7eRjZ2IGpIQ5_KDImA88KzoROrDrFva3GFjxm_LBgO3VKafuI_6uUkojIj0lctK3wQM8ysPs5_gAVlGbOoQN8BtPo4wzLtodmX5l2FOfUkMqZ0DFvhIcuetfLcev02evoUbFPLidALbS8_K2rcVERHna_q0ctKUKVUHx9kxEzGKi-gzqI0PbMqijPAknSxOpCFWwWFQfVJriqJscj-dx7o" />
                <div class="absolute inset-0 bg-primary/20 mix-blend-multiply"></div>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-background/80"></div>
            </div>
            <div class="relative z-10 text-center px-4 max-w-4xl">
                <span class="text-on-primary font-manrope tracking-[0.4em] uppercase text-xs mb-6 block">Sanctuary for
                    the Soul</span>
                <h1 class="text-5xl md:text-8xl font-notoSerif text-on-primary mb-8 leading-tight">Rituals of
                    <br /><span class="italic">Rejuvenation</span></h1>
                <div class="flex justify-center">
                    <div class="w-px h-24 bg-on-primary/40"></div>
                </div>
            </div>
        </section>
        <!-- Wellness & Spa Section (Asymmetric Editorial Layout) -->
        <section class="py-32 px-12 bg-surface">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-20 items-center">
                <div class="w-full md:w-3/5 relative">
                    <div class="aspect-[4/5] rounded-lg overflow-hidden">
                        <img alt="Wellness Rituals" class="w-full h-full object-cover"
                            data-alt="Person receiving hot stone therapy in outdoor spa"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfqqMzZueuJg1I_iEdFROz79ODjW_Rf_k2M3AuTBG2P5rQ5V_-7Qs08HcFOUvpGoro9l4N1E6qs8AYwr1IvWgRCb2QrNybHlhWzUrMms3Nkii0dGt1PB0ZI_zF95hSJLdrOD0Y9plHIL8HfdVM2hT7T4wBgc5sNRuffefes09-AphbTl9dLJVDJPuDHaj05IgTcrmnPakjdGRcsnT2UZkQyXh5EbaDfHyL9Ju6cNzYv1xLiWAkV97sA_TT8dCbM9fML0LIYo-4l_I" />
                    </div>
                    <!-- Overlap Card -->
                    <div
                        class="hidden md:block absolute -bottom-12 -right-12 bg-surface-container-lowest p-10 max-w-sm shadow-sm rounded-lg">
                        <h3 class="font-notoSerif text-2xl text-primary mb-4">Holistic Healing</h3>
                        <p class="text-on-surface-variant leading-relaxed text-sm">Our therapies combine ancient Eastern
                            wisdom with modern hydrotherapy, using organic marine extracts harvested from our own
                            shores.</p>
                    </div>
                </div>
                <div class="w-full md:w-2/5 space-y-8">
                    <div class="space-y-4">
                        <label
                            class="font-manrope text-xs tracking-[0.2em] uppercase text-primary/60 font-semibold">Sanctuary</label>
                        <h2 class="text-4xl md:text-5xl font-notoSerif leading-tight">The Ocean Spa</h2>
                        <p class="text-on-surface-variant text-lg leading-relaxed pt-4">A symphony of scent and sound
                            awaits. Our spa pavilions are designed to capture the rhythmic ebb and flow of the tides,
                            grounding your senses in nature's purest form.</p>
                    </div>
                    <button
                        class="group flex items-center space-x-4 py-4 px-8 bg-primary text-on-primary rounded-lg transition-all hover:bg-primary-container">
                        <span class="font-manrope font-semibold tracking-wider">Book an Experience</span>
                        <span
                            class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Culinary Journey (Tonal Shift - Dark Section) -->
        <section class="py-32 bg-primary text-on-primary">
            <div class="max-w-7xl mx-auto px-12">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-end mb-20">
                    <div class="md:col-span-7">
                        <label
                            class="font-manrope text-xs tracking-[0.2em] uppercase text-on-primary-container mb-4 block">Gastronomy</label>
                        <h2 class="text-5xl md:text-7xl font-notoSerif leading-tight italic">Tidal Flavors</h2>
                    </div>
                    <div class="md:col-span-5 pb-4">
                        <p class="text-on-primary-container text-lg max-w-md leading-relaxed">From sunrise
                            catch-of-the-day to midnight beach banquets, our culinary philosophy is a celebration of the
                            azure horizons.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Culinary Card 1 -->
                    <div class="space-y-6">
                        <div class="aspect-square rounded-lg overflow-hidden group">
                            <img alt="Azure Dining"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                data-alt="Exotic tropical fruit platter and fresh seafood"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRfUp6-OxT5CYRjP_bD1DJwvu-T27bN5DdlfQite3QZD7ymaPvaJQHh0Tive7ez-_4rAhsLD0hd3WX8Fuv6CzuKm1jy1xik6HkYVpGo6z6Sziyhk01_vE5Tsg2On0MdUC6lM-WEnBkr552bC9zhe0SHKtFGH1sKKrVqPXsNsuK2k5PQvAC8W5YEJ8emnPTxoRo6rReKErFY0cb5j48BYWLvu1Odm0N08QMNIh5RU1vqYpbZTRpSYMIfCgrBCfHanhW5Sdso5RyCd8" />
                        </div>
                        <h4 class="text-xl font-notoSerif italic">The Sand Bar</h4>
                        <p class="text-on-primary-container/80 text-sm leading-relaxed">Artisanal cocktails infused with
                            local botanicals, served on the water's edge under the starlit canopy.</p>
                    </div>
                    <!-- Culinary Card 2 -->
                    <div class="space-y-6 md:mt-12">
                        <div class="aspect-square rounded-lg overflow-hidden group">
                            <img alt="Fine Dining"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                data-alt="Elegant fine dining setup with candlelight"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLCB_ENCuA8U-2HOMHEHbxcq3rdb3d4Q_Ty2csWynRvck2ixsJ0JoBwrVCXf_lCY-ZMh4r-vR7AiNSWD6RLDzEJhbTasPhbJHyvASr_iagxNFgCYQJXi6IGqa0bhXdiz-9mwElglLhXTJEPfidm45MIbTgqp7NS_-7l3VWytdSK4f7JI-Edr0X1IIVubLxE2PpEDMvScvzwyu1bMbAqwGY9xzGVk61ohji1203E0OqjRw_iaQflvsAlvp7xrbQGSU_8FVXM4QbDwo" />
                        </div>
                        <h4 class="text-xl font-notoSerif italic">Azure Kitchen</h4>
                        <p class="text-on-primary-container/80 text-sm leading-relaxed">A fusion of traditional recipes
                            and avant-garde technique, emphasizing the purity of local ingredients.</p>
                    </div>
                    <!-- Culinary Card 3 -->
                    <div class="space-y-6 md:mt-24">
                        <div class="aspect-square rounded-lg overflow-hidden group">
                            <img alt="Private Dining"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                data-alt="Private dinner set up on a secluded beach"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxbaJja3ORYIhvEcVVsGNNwNIw9WqKkzIxJjhlFckDST3vUm_THAiBwE6zYG1ioBQ1mDRB3CbB2gUbE_WYMnhhJkpdSujW2vbcyOI43Q52n8zTKkystRjKTF4OcqAyjrnMVIHffNr2FnUIHtPFeS4paIy3RrqeYbrWc-NfnoX2YfcRqCcpRxOL7Um3p5QgoEkwOWs0mc3znrDXXbfWIive3c8LoVDkPPRiVinEQ6umEwnETqPR0PRqlozU8tq0AFSe4SbH0S6UbnI" />
                        </div>
                        <h4 class="text-xl font-notoSerif italic">Cove Dining</h4>
                        <p class="text-on-primary-container/80 text-sm leading-relaxed">Exclusive, candle-lit
                            experiences in a hidden limestone cave for moments that transcend the ordinary.</p>
                    </div>
                </div>
                <div class="mt-20 flex justify-center">
                    <button
                        class="px-10 py-4 rounded-full border border-outline-variant/30 text-on-primary hover:bg-on-primary hover:text-primary transition-all duration-300">
                        Explore Our Menus
                    </button>
                </div>
            </div>
        </section>
        <!-- Curated Adventures (Bento Grid Style) -->
        <section class="py-32 px-12 bg-surface-container-low">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-24">
                    <label
                        class="font-manrope text-xs tracking-[0.3em] uppercase text-primary font-semibold mb-4 block">Uncharted</label>
                    <h2 class="text-4xl md:text-6xl font-notoSerif text-on-surface">Curated Adventures</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-6 h-auto md:h-[800px]">
                    <!-- Large Feature -->
                    <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-lg">
                        <img alt="Sunset Sailing"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                            data-alt="Crystal clear water and luxury yacht at sunset"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1komppelKGKyzsXUTTzp98jgpI39iQMu8C2I9fz2FD8VwTxIoZPfd8rOUmTmhU3JifR5rT3Hwf1vE0bmwala-7XmOKxVXg92dSbPB061dqFy5100PbRUVUXphKyTmjS_0mWsHnVnqWWxo3R3_0-N6EpkDDyHZzPa63ng8FKDXihQYnIkvdo0eRsGi8HqKHw0Gsw6MnhAQ8GGGhlT46WvRq5pFzAenzPQJ61f_hdfOrbMa83DzqQkxwJ1U5pmp1PB1dPMxVqpOvEY" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex flex-col justify-end p-10">
                            <h3 class="text-3xl font-notoSerif text-on-primary mb-2">Sunset Sailing</h3>
                            <p class="text-on-primary-container text-sm max-w-xs mb-6">Navigate the archipelago aboard
                                our custom-built dhow.</p>
                            <a class="text-on-primary text-sm font-semibold tracking-widest uppercase hover:underline"
                                href="#">View Details</a>
                        </div>
                    </div>
                    <!-- Small Feature 1 -->
                    <div class="md:col-span-2 relative group overflow-hidden rounded-lg">
                        <img alt="Dawn Yoga"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                            data-alt="Person practicing yoga on a wooden deck by the sea"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAgZhCOLktl-1QxG4Ii8lxX7Qqp4VaMisxl0ri4E9Z8w3Pxp93VG0kQo5jO11qU7GXNaF-4rurzqygvjLJ3MmwazGKyzikaMyb7WU5j_pC4A17IelCD5r9QeOOIhQM-3JtiNYt8ewTHSKKn0Neus1ilT4PyQWcdQxyFtAlEDe32aFcfDOJ6pWsJNYPTFKkoU-cqpZgPitUPVnKJZgqwlzgE630wz8uXFfjm_kLGubqdO3gkPIJEMV4oKGp-78aF5LepJQ7VlgjUo8" />
                        <div
                            class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex flex-col justify-end p-8">
                            <h3 class="text-2xl font-notoSerif text-white mb-2">Dawn Meditation</h3>
                        </div>
                    </div>
                    <!-- Small Feature 2 -->
                    <div class="relative group overflow-hidden rounded-lg">
                        <img alt="Diving Experience"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                            data-alt="Scuba diving in coral reef with colorful fish"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpcWvuil-QhocDxPxYszXuLs5e-7fSeKjKjReGU1XJyJ7yJ-mISH77bT1u4LWvxegWq2qmshRO2SXrMKJ5hBtrkITNYHpK7maR4NXVBrRwNOVpGWVOdDnFbo-G_y5bBsOE0JBDTjFxgGS_u1jWqlsVeR3fFPjTQv_H1c1i8tk927BejxI-sv9PBx1QtZTZfKVf7_SRRMIkKELzQlxgn9YgjQYC9YcFgtJ72Oj1atbeoNj4P0ttBvWnB-bhKaga6hmUKfkzmDIK0Pc" />
                        <div
                            class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex flex-col justify-end p-8">
                            <h3 class="text-xl font-notoSerif text-white mb-2">Coral Diving</h3>
                        </div>
                    </div>
                    <!-- Small Feature 3 -->
                    <div class="relative group overflow-hidden rounded-lg">
                        <img alt="Cooking Masterclass"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                            data-alt="Cooking class with fresh local spices and vegetables"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAyDBvkaa8oI4rT42gn27zn8Pq-_qKyWdC9Cgl9aHs9-ZgZjJ1ZPjEogkMqalRzysH78Z5r0J5f4kjZi4cbsknBE03IRUO1gpoCIU2JGXkB-myQBPl0D0LIRJdGVHoR8si5kraMu2S-alxeLnIdy-6CBjc0bRZaBV9y07SQXBnl1o1CtggF7pxZNT6c9oWG8txUUwDyZ9j_fXZYiSVGwVGYdRjeDwBXdhAPE0oo4Gt68SFknxG3ArQZy8KhExnzSZ8X2Raj6oGmEp8" />
                        <div
                            class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex flex-col justify-end p-8">
                            <h3 class="text-xl font-notoSerif text-white mb-2">Cuisine Art</h3>
                        </div>
                    </div>
                </div>
                <div class="mt-20 flex justify-center">
                    <button
                        class="bg-primary text-on-primary px-12 py-5 rounded-lg font-manrope font-semibold tracking-widest uppercase shadow-lg hover:shadow-xl transition-all">
                        Inquire for More
                    </button>
                </div>
            </div>
        </section>
        <!-- Newsletter Overlay (Glassmorphism) -->
        <section class="py-24 px-12 relative overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img alt="Background Ripples" class="w-full h-full object-cover blur-sm opacity-30"
                    data-alt="Abstract water ripples in soft morning light"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqqSq0YRMNgo3f5U0cjEhJASINaYwY0H_068IR0dpasi4XuDmbpY-Oo8PMod5i51i5ksTF10bhinQQ9csWHAQj_UEb073XAih4c49bqzAraea6zZbBfPXiODeN_hBTWEKDjvNCejnGq-N-TCbIJ_TV4TYgBScPsW4itzjL_ZB0-SFXkEroyDLNhRZkPf8ODiFpcyFQYRDNIOfbpkr33khcOVa56dK373Zi-i-IN6mA7BNyq7ABIZvo1ZEnavFQe8c1k9GXLxnAZyE" />
            </div>
            <div
                class="max-w-4xl mx-auto relative z-10 bg-surface/60 backdrop-blur-2xl p-16 rounded-xl border border-white/20 text-center">
                <h3 class="text-3xl font-notoSerif text-primary mb-6">Stay Within the Ebb &amp; Flow</h3>
                <p class="text-on-surface-variant mb-10 text-lg">Receive curated stories from the shore, seasonal
                    rituals, and exclusive invitation-only retreats.</p>
                <form class="flex flex-col md:flex-row gap-4 max-w-xl mx-auto">
                    <input
                        class="flex-1 bg-surface-container-lowest border-none rounded-lg px-6 py-4 text-sm font-manrope focus:ring-1 focus:ring-primary"
                        placeholder="YOUR EMAIL ADDRESS" type="email" />
                    <button
                        class="bg-primary text-on-primary px-8 py-4 rounded-lg font-manrope font-semibold uppercase tracking-widest text-sm hover:bg-primary-container transition-colors">Subscribe</button>
                </form>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-primary dark:bg-black w-full mt-20">
        <div class="flex flex-col md:flex-row justify-between items-start px-12 py-16 max-w-7xl mx-auto">
            <div class="mb-10 md:mb-0">
                <div class="text-xl font-notoSerif text-surface mb-6">Chhapaak</div>
                <p class="text-surface/60 font-manrope text-sm leading-relaxed max-w-xs">
                    Where the forest whispers to the sea and time dissolves in azure light.
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-16">
                <div class="space-y-4">
                    <span class="text-surface font-semibold uppercase text-xs tracking-widest">Connect</span>
                    <ul class="space-y-2">
                        <li><a class="text-surface/60 hover:text-surface transition-opacity text-sm"
                                href="#">Contact</a></li>
                        <li><a class="text-surface/60 hover:text-surface transition-opacity text-sm"
                                href="#">Press</a></li>
                        <li><a class="text-surface/60 hover:text-surface transition-opacity text-sm"
                                href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <span class="text-surface font-semibold uppercase text-xs tracking-widest">Socials</span>
                    <ul class="space-y-2">
                        <li><a class="text-surface/60 hover:text-surface transition-opacity text-sm"
                                href="#">Instagram</a></li>
                        <li><a class="text-surface/60 hover:text-surface transition-opacity text-sm"
                                href="#">LinkedIn</a></li>
                        <li><a class="text-surface/60 hover:text-surface transition-opacity text-sm"
                                href="#">Twitter</a></li>
                    </ul>
                </div>
                <div class="space-y-4 col-span-2 md:col-span-1">
                    <span class="text-surface font-semibold uppercase text-xs tracking-widest">Newsletter</span>
                    <p class="text-surface/60 text-xs leading-relaxed">Join our inner circle for the latest shoreline
                        updates.</p>
                </div>
            </div>
        </div>
        <div
            class="px-12 py-8 border-t border-surface/10 max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-surface/60 font-manrope text-sm">© 2024 Chhapaak Resort. All rights reserved.</p>
            <div class="flex gap-8">
                <a class="text-surface/60 text-xs uppercase tracking-tighter hover:text-surface transition-colors"
                    href="#">Privacy Policy</a>
                <a class="text-surface/60 text-xs uppercase tracking-tighter hover:text-surface transition-colors"
                    href="#">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>

</html>
