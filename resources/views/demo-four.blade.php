<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Oceanfront Villa - Chhapaak Resort</title>
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

<body class="bg-background text-on-surface font-manrope selection:bg-primary-container selection:text-white">
    <!-- TopAppBar Navigation -->
    <nav
        class="fixed top-0 w-full z-50 bg-surface/60 backdrop-blur-xl flex justify-between items-center px-12 py-6 max-w-full">
        <div class="text-2xl font-notoSerif italic text-primary">Chhapaak</div>
        <div class="hidden md:flex items-center space-x-12">
            <a class="font-notoSerif tracking-wide uppercase text-sm text-primary font-semibold border-b border-primary/30 transition-colors duration-300"
                href="#">Rooms</a>
            <a class="font-notoSerif tracking-wide uppercase text-sm text-on-surface/70 hover:text-primary transition-colors duration-300"
                href="#">Dining</a>
            <a class="font-notoSerif tracking-wide uppercase text-sm text-on-surface/70 hover:text-primary transition-colors duration-300"
                href="#">Wellness</a>
        </div>
        <button
            class="bg-primary text-on-primary px-6 py-2 rounded-lg font-label text-sm tracking-wider uppercase hover:bg-primary-container active:scale-95 transition-all duration-300">
            Online Booking
        </button>
    </nav>
    <main class="pt-24 lg:pt-32">
        <!-- Hero Editorial Gallery -->
        <section class="px-6 md:px-12 mb-20">
            <div class="grid grid-cols-12 gap-4 h-[716px] md:h-[870px]">
                <div class="col-span-12 md:col-span-8 overflow-hidden rounded-xl relative group">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Luxurious oceanfront villa infinity pool overlooking the sea"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcpWXRf0HElJ96DLwwSteFwjvGOmHUtMb_PlG-kVWURUxzQ6SXFm-I5jDh_AgopGAhXbe8uh6L7-CqbD0AtU60VjJw4A9jjty03Yuc8Nt04ruOoNUbA4xXdn9jtKxaFteJHz_a3ITvj2IDTP0uOQaDYTxPH8Cq7ZinZa61o2ZS3uxcBM6Awh5AEbTN2aZqvMmLPRl-ZLuj0msxPw_hcxDs3FtEzYldngQKyCBQw324LlZJ5QFHLCfZKN23R4VcgujcUijS8u4w614" />
                    <div class="absolute bottom-10 left-10 z-10">
                        <h1 class="text-5xl md:text-7xl font-notoSerif text-white drop-shadow-lg leading-tight">
                            Oceanfront Villa</h1>
                        <p class="text-white/90 font-manrope tracking-[0.2em] uppercase text-sm mt-4">The Pinnacle of
                            Coastal Living</p>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent"></div>
                </div>
                <div class="hidden md:grid col-span-4 grid-rows-2 gap-4">
                    <div class="overflow-hidden rounded-xl">
                        <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                            data-alt="Interior of a luxury bedroom with ocean views"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBI3ti7v_J9VWuM0nZQFUdmMU-EoHlrorJi9SAJD9mtl6dkBt2P2EudKhp_tssEMi0jmHCV3tx6KY-VZ8ll55tcJQ0dux23xNaGuuPc08HONZ5W4erd_twnK4nlNoDZPMKPGc5inUXa3nJOM2Kf6DIuKupH0JWLSFJlv6KQa2bSXhzJCldnrEDnBUiLY2La8OzT43WjJ-WRRZsBJ6skXQxWXimdXf4zCrsOIhj3YHVjqFFQKFndf4L88jY0VAUfgw7cyGUt3LLHPzs" />
                    </div>
                    <div class="overflow-hidden rounded-xl">
                        <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                            data-alt="Private terrace with sun loungers and sea view"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBN0ugQhrtNwFiL72w2lrFrFyweTTg0KoELM7zF95JLzMm4Sg8GMUFRwJ8L5fwnc8U8XnBIuP6RDbJ1CXRALnvL_OQM5dJfBRxRLLts2ifOQ76vVdQo0sXn9OKXeaAFazBNb7a9IAUaCmC21rEfhs2GkrYSbyMRmSV4XN8M_h3k3l2iyHSZT9aOamrqEqrybU644QFxU4NPWbrOSyKsef_uXCifJU5og2Mj2pr5KcHlUcNFypzuRXTtjgNsQI3E8bfqMvk2fEjdmds" />
                    </div>
                </div>
            </div>
        </section>
        <section class="px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 items-start">
            <!-- Content Area -->
            <div class="lg:col-span-8 space-y-20">
                <!-- Overview -->
                <div class="max-w-3xl">
                    <h2 class="text-3xl font-notoSerif text-primary mb-8">A Sanctuary of Salt and Silk</h2>
                    <p class="text-lg text-on-surface-variant leading-relaxed font-manrope">
                        Perched where the turquoise waters meet the pristine ivory sands, the Oceanfront Villa at
                        Chhapaak is an architectural masterpiece designed for the discerning traveler. Spanning over 250
                        square meters of indoor-outdoor living space, this villa offers an immersive experience where
                        the boundary between architecture and nature dissolves.
                    </p>
                    <p class="text-lg text-on-surface-variant mt-6 leading-relaxed font-manrope">
                        Every detail, from the hand-carved teak furnishings to the floor-to-ceiling retractable glass
                        walls, has been curated to evoke a sense of "Quiet Luxury." Wake up to the rhythmic sound of the
                        tides and spend your afternoons in total seclusion within your private walled garden.
                    </p>
                </div>
                <!-- Bento Amenities -->
                <div class="space-y-10">
                    <div class="flex items-center space-x-4">
                        <div class="h-[1px] w-12 bg-primary/30"></div>
                        <h3 class="font-notoSerif uppercase tracking-widest text-sm text-primary">Villa Amenities</h3>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                        <div
                            class="bg-surface-container-low p-8 rounded-xl flex flex-col items-center text-center group hover:bg-surface-container-highest transition-colors">
                            <span class="material-symbols-outlined text-3xl text-primary mb-4"
                                data-icon="pool">pool</span>
                            <span class="font-manrope text-sm uppercase tracking-tight font-semibold">Private
                                Pool</span>
                        </div>
                        <div
                            class="bg-surface-container-low p-8 rounded-xl flex flex-col items-center text-center group hover:bg-surface-container-highest transition-colors">
                            <span class="material-symbols-outlined text-3xl text-primary mb-4"
                                data-icon="concierge">concierge</span>
                            <span class="font-manrope text-sm uppercase tracking-tight font-semibold">Butler
                                Service</span>
                        </div>
                        <div
                            class="bg-surface-container-low p-8 rounded-xl flex flex-col items-center text-center group hover:bg-surface-container-highest transition-colors">
                            <span class="material-symbols-outlined text-3xl text-primary mb-4"
                                data-icon="waves">waves</span>
                            <span class="font-manrope text-sm uppercase tracking-tight font-semibold">Ocean View</span>
                        </div>
                        <div
                            class="bg-surface-container-low p-8 rounded-xl flex flex-col items-center text-center group hover:bg-surface-container-highest transition-colors">
                            <span class="material-symbols-outlined text-3xl text-primary mb-4"
                                data-icon="hot_tub">hot_tub</span>
                            <span class="font-manrope text-sm uppercase tracking-tight font-semibold">Outdoor
                                Rainshower</span>
                        </div>
                        <div
                            class="bg-surface-container-low p-8 rounded-xl flex flex-col items-center text-center group hover:bg-surface-container-highest transition-colors">
                            <span class="material-symbols-outlined text-3xl text-primary mb-4"
                                data-icon="wine_bar">wine_bar</span>
                            <span class="font-manrope text-sm uppercase tracking-tight font-semibold">Gourmet
                                Minibar</span>
                        </div>
                        <div
                            class="bg-surface-container-low p-8 rounded-xl flex flex-col items-center text-center group hover:bg-surface-container-highest transition-colors">
                            <span class="material-symbols-outlined text-3xl text-primary mb-4"
                                data-icon="wifi">wifi</span>
                            <span class="font-manrope text-sm uppercase tracking-tight font-semibold">High-Speed
                                Wi-Fi</span>
                        </div>
                    </div>
                </div>
                <!-- Narrative Image Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="order-2 md:order-1">
                        <h4 class="text-2xl font-notoSerif text-primary mb-4">Total Privacy, Absolute Peace</h4>
                        <p class="text-on-surface-variant leading-relaxed">
                            Our villas are spaced to ensure that your only neighbors are the local birdlife and the
                            whispering palms. High stone walls covered in jasmine provide a natural screen, ensuring
                            your private terrace remains truly private.
                        </p>
                    </div>
                    <div class="order-1 md:order-2 rounded-xl overflow-hidden aspect-square">
                        <img class="w-full h-full object-cover" data-alt="Close up of luxury resort bathroom amenities"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJqZwylixH5flw6DTdV7ESCWUZlD_1Dtr0LXiYp2EttAPRixgU5W9XcUUGCamU78rdhscZ0c41joWtroE_El0o5t336abpxlUDMoq1JF4FzSI-O5J7DqUvtuO-dv_dHwayWTt8hg0BEpq4_uvDU1k5cjA1rX4f9IVIvc3zhA5-cCf0LxRcepoLSNbMVUjsQshnYsns4oQPQLE2rXv5HJHQPV-X9Yzs-yr1IOCzZNqargrAtNNuz8__312_LL1eEp_xvslceEMTCns" />
                    </div>
                </div>
            </div>
            <!-- Sticky Booking Widget -->
            <aside class="lg:col-span-4 lg:sticky lg:top-32">
                <div
                    class="bg-surface-container-lowest border border-outline-variant/20 rounded-xl p-8 shadow-[0px_32px_64px_-12px_rgba(0,52,52,0.06)]">
                    <div class="flex justify-between items-end mb-8">
                        <div>
                            <span
                                class="text-sm text-on-surface-variant uppercase tracking-widest font-manrope">Starting
                                at</span>
                            <div class="text-4xl font-notoSerif text-primary mt-1">$1,250 <span
                                    class="text-lg font-manrope text-on-surface-variant/60">/ night</span></div>
                        </div>
                        <div class="flex items-center space-x-1 text-secondary">
                            <span class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="text-sm font-semibold">4.9</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-2">
                            <div
                                class="bg-surface-container p-3 rounded-lg border border-transparent focus-within:border-primary/30 transition-all">
                                <label
                                    class="block text-[10px] uppercase tracking-widest text-on-surface-variant font-semibold mb-1">Check-In</label>
                                <input
                                    class="bg-transparent border-none p-0 w-full text-sm focus:ring-0 placeholder:text-on-surface/30"
                                    placeholder="Add date" type="text" />
                            </div>
                            <div
                                class="bg-surface-container p-3 rounded-lg border border-transparent focus-within:border-primary/30 transition-all">
                                <label
                                    class="block text-[10px] uppercase tracking-widest text-on-surface-variant font-semibold mb-1">Check-Out</label>
                                <input
                                    class="bg-transparent border-none p-0 w-full text-sm focus:ring-0 placeholder:text-on-surface/30"
                                    placeholder="Add date" type="text" />
                            </div>
                        </div>
                        <div
                            class="bg-surface-container p-3 rounded-lg border border-transparent focus-within:border-primary/30 transition-all">
                            <label
                                class="block text-[10px] uppercase tracking-widest text-on-surface-variant font-semibold mb-1">Guests</label>
                            <select class="bg-transparent border-none p-0 w-full text-sm focus:ring-0 appearance-none">
                                <option>2 Adults, 1 Child</option>
                                <option>2 Adults</option>
                                <option>1 Adult</option>
                            </select>
                        </div>
                    </div>
                    <button
                        class="w-full bg-primary text-on-primary py-4 rounded-lg mt-8 font-manrope font-semibold tracking-widest uppercase hover:bg-primary-container transition-all duration-300 shadow-lg shadow-primary/10">
                        Reserve Your Stay
                    </button>
                    <div class="mt-6 space-y-3">
                        <div class="flex items-center text-sm text-on-surface-variant/80">
                            <span class="material-symbols-outlined text-lg mr-3"
                                data-icon="check_circle">check_circle</span>
                            <span>Free Cancellation until 48h before</span>
                        </div>
                        <div class="flex items-center text-sm text-on-surface-variant/80">
                            <span class="material-symbols-outlined text-lg mr-3"
                                data-icon="shield_with_heart">shield_with_heart</span>
                            <span>Best Price Guarantee</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8 p-6 bg-primary/5 rounded-xl border border-primary/10">
                    <p class="text-sm font-manrope italic text-primary text-center">
                        "An experience that redefines coastal serenity. Every sunrise felt curated just for us."
                        <span class="block mt-2 font-semibold not-italic">— Elena V.</span>
                    </p>
                </div>
            </aside>
        </section>
        <!-- Room Features Grid -->
        <section class="mt-32 px-6 md:px-12 bg-surface-container-low py-24">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-notoSerif text-primary mb-4">Space and Craft</h2>
                    <p class="text-on-surface-variant max-w-xl mx-auto">The Oceanfront Villa is meticulously divided
                        into functional areas that celebrate open-plan living while maintaining intimacy.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 h-[600px]">
                    <div class="md:col-span-2 md:row-span-2 overflow-hidden rounded-xl relative group">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            data-alt="Living area of the villa with high ceilings and luxury furniture"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCgBPDfpviiEky6xjv2PFKDqXHhQGRpYMss4DJ0MzlDu8_Zb8Cjd0u76uyLKT1OXXcJyU-opt8TRjknYK7hMhiVvYZKEAKcp83x0akpwgxpzkClIpVqpw5UH8XnG3IyGFJe6hwRp4B5GosBtrlSviYz3f3ApkCxHOhqFbBBBCkkvxQ369o-bw-N-K1GWOHtNi8bjn-moyeVuxHxosi-gqmQIErgHOLwomr6Ng-VN3LO3Z1kzsXklYjI4SSUop6fqsMgXI7KwXUrYE" />
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <h5 class="text-xl font-notoSerif">Grand Living Salon</h5>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-xl relative group">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            data-alt="Private infinity pool view"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0s6i9jQ9qt5B-mWtlMjq9Q2Hk9HQQE6H6gWEq81KO6WBuMf5ztFCI85CbGePGtJ1_0v3_R1KL_1vMooGFnhJZpzQXCy0-1Lw5ZMM4Y4Yt0ToQlPI9zUn-d_o8AJB24nqkoKYPHneqxIRYQ5Bv3nLQVS4mY4k0kyugVht7Z3nPaV_EX4wxv7G2y0xyVw_bujdka62jFe048dBkTHto7stOctDRfqo6DZfcV4IhuQh53D5d3koMUDTYJSGfGLiXV__szrHYQ2F_Tps" />
                        <div class="absolute inset-0 bg-black/10"></div>
                    </div>
                    <div class="overflow-hidden rounded-xl relative group">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            data-alt="Luxury bathroom with marble finishes"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoLwbvSQJ89KuDTln7lrhdxD2giydAOdGfMk3xxyHONLrIIbeevhjAWK4Cla_EhHxmVYPXN8VD-UdktyRuvllO1cn_ZensfAUTm2S4FZDEcwdRnY--ZPWu7cDgaX8inK2eTWsr8owLwKrhez732EYlvI1WkwerrwU15JD6UVFglQQSvmDQJ_I4itRcgLV0_q1ZIFiHDC-u1kDfK3DMZhbrHe1OwhTCmILWYkF7WliLnMcKJG69riFZVoW3jEo8j2kgr7ElC8XRjNY" />
                    </div>
                    <div class="md:col-span-2 overflow-hidden rounded-xl relative group">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            data-alt="Aerial view of the resort and villas"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOBYf_aQVWiPSrH4hQIXSR2T60r-Zswqc2ir-BpyjR0ht5duwcc-us5yfo3Lv_SQgNoc3lYuJx97LoqnRu8DHhMxaNEZCAT0QvcFIERFyJR4EczVV7d-RP05obdCEcu1WX8yRY2lnQzxaYXx8SXVnUjTy8sz_eRda2y2e7-AgHqeqyOy2nQnSnsTC9pwUbvRbpodVxaKXwIrZvm14y-1hMhRDozWYCvGRHTAKXqB-_CkjC5O7du4INz4YULVBEXG_PnJtTXI-nSM8" />
                        <div class="absolute bottom-6 left-6 text-white">
                            <h5 class="text-xl font-notoSerif">Coastal Panorama</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="w-full mt-20 bg-primary dark:bg-black py-16 px-12">
        <div class="flex flex-col md:flex-row justify-between items-start max-w-7xl mx-auto">
            <div class="mb-10 md:mb-0">
                <div class="text-xl font-notoSerif text-surface mb-6">Chhapaak</div>
                <p class="font-manrope text-sm leading-relaxed text-surface/60 max-w-xs">
                    Curating immersive luxury experiences at the edge of the world. Experience the tidal flow of
                    serenity.
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-12">
                <div class="space-y-4">
                    <h6 class="text-surface font-semibold uppercase tracking-widest text-xs">Explore</h6>
                    <ul class="space-y-2">
                        <li><a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                                href="#">Contact</a></li>
                        <li><a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                                href="#">Socials</a></li>
                        <li><a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                                href="#">Newsletter</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h6 class="text-surface font-semibold uppercase tracking-widest text-xs">Policy</h6>
                    <ul class="space-y-2">
                        <li><a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                                href="#">Privacy</a></li>
                        <li><a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                                href="#">Terms</a></li>
                        <li><a class="font-manrope text-sm text-surface/60 hover:text-surface transition-opacity"
                                href="#">Sustainability</a></li>
                    </ul>
                </div>
                <div class="col-span-2 md:col-span-1 space-y-4">
                    <h6 class="text-surface font-semibold uppercase tracking-widest text-xs">Connect</h6>
                    <div class="flex space-x-4">
                        <span class="material-symbols-outlined text-surface/60 hover:text-surface cursor-pointer"
                            data-icon="facebook">social_leaderboard</span>
                        <span class="material-symbols-outlined text-surface/60 hover:text-surface cursor-pointer"
                            data-icon="instagram">retweet</span>
                        <span class="material-symbols-outlined text-surface/60 hover:text-surface cursor-pointer"
                            data-icon="potted_plant">potted_plant</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto mt-16 pt-8 border-t border-surface/10">
            <p class="font-manrope text-sm text-surface/40">© 2024 Chhapaak Resort. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
