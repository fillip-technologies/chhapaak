<!-- Events Showcase Section -->
<section class="py-24 bg-surface-container-low" id="events">
    <div class="max-w-screen-2xl mx-auto px-8">

        <!-- Heading -->
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <div class="max-w-2xl">
                <h2 class="font-headline text-4xl md:text-5xl text-primary mb-6">
                    Celebrate Every Occasion at Chhapaak
                </h2>
                <p class="text-on-surface-variant text-lg">
                    From grand weddings to intimate celebrations, create unforgettable moments in a premium event setting.
                </p>
            </div>

            <a class="text-primary font-label text-sm tracking-widest uppercase border-b-2 border-primary/20 pb-2 hover:border-primary transition-all"
                href="https://www.swiftbook.io/inst/#home?propertyId=941NRa3Daauniyc3zVcsIQMfKG3I8EcQx0dYcZiu35tMaRg1Bz1Tc0MTk=&JDRN=Y"
                target="_blank" rel="noopener noreferrer">
                Explore Rooms & Stay
            </a>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">

            <!-- 🔥 WEDDING -->
            <div class="md:col-span-8 rounded-xl overflow-hidden">

                <!-- MAIN IMAGE -->
                <img id="mainWeddingImage"
                    src="/assets/images/engagement.jpeg"
                    class="w-full h-[500px] object-cover object-center" />

                <div class="p-6 md:p-8 bg-white">
                    <h3 class="text-2xl md:text-3xl font-semibold mb-2">
                        Destination Weddings
                    </h3>

                    <p class="text-sm text-gray-600 mb-6">
                        From engagement to reception, celebrate every moment in a grand and elegant setting.
                    </p>

                    <!-- THUMBNAILS -->
                    <div class="flex gap-4 overflow-x-auto">

                        <div class="min-w-[160px]">
                            <img src="/assets/images/weddingimg.jpeg"
                                class="thumb h-24 w-full object-cover rounded-lg mb-2 cursor-pointer"
                                onclick="changeWeddingImage(this)" />
                            <p class="text-xs text-center">Wedding</p>
                        </div>

                        <div class="min-w-[160px]">
                            <img src="/assets/images/haldi.jpeg"
                                class="thumb h-24 w-full object-cover rounded-lg mb-2 cursor-pointer"
                                onclick="changeWeddingImage(this)" />
                            <p class="text-xs text-center">Haldi</p>
                        </div>

                        <div class="min-w-[160px]">
                            <img src="/assets/images/mehndi.jpg"
                                class="thumb h-24 w-full object-cover rounded-lg mb-2 cursor-pointer"
                                onclick="changeWeddingImage(this)" />
                            <p class="text-xs text-center">Mehendi</p>
                        </div>

                        <div class="min-w-[160px]">
                            <img src="/assets/images/engagement.jpeg"
                                class="thumb h-24 w-full object-cover rounded-lg mb-2 cursor-pointer"
                                onclick="changeWeddingImage(this)" />
                            <p class="text-xs text-center">Engagement</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- 🏢 CORPORATE -->
            <div class="md:col-span-4 rounded-xl overflow-hidden">
                <img src="/assets/images/corporate.jpg"
                    class="w-full h-[600px] object-cover object-center" />

                <div class="p-6 bg-white">
                    <h3 class="text-xl font-semibold mb-2">
                        Corporate Events
                    </h3>

                    <p class="text-sm text-gray-600 mb-4">
                        Ideal for meetings, conferences, and team gatherings.
                    </p>
                </div>
            </div>

            <!-- 🎂 BIRTHDAY -->
            <div class="md:col-span-4 rounded-xl overflow-hidden">
                <img src="/assets/images/birthday.jpeg"
                    class="w-full h-[300px] object-cover object-center" />

                <div class="p-6 bg-white">
                    <h3 class="text-xl font-semibold mb-2">
                        Birthday Parties
                    </h3>

                    <p class="text-sm text-gray-600 mb-4">
                        Fun, vibrant, and perfectly organized celebrations.
                    </p>
                </div>
            </div>

            <!-- 🎊 SOCIAL -->
            <div class="md:col-span-8 rounded-xl overflow-hidden">
                <img src="/assets/images/social.jpeg"
                    class="w-full h-[300px] object-cover object-center" />

                <div class="p-6 bg-white">
                    <h3 class="text-2xl font-semibold mb-2">
                        Social Gatherings
                    </h3>

                    <p class="text-sm text-gray-600 mb-4">
                        From family functions to festive celebrations, host every moment in style.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- JS -->
<script>
    function changeWeddingImage(el) {
        // Change main image
        document.getElementById("mainWeddingImage").src = el.src;

        // Remove active from all
        document.querySelectorAll(".thumb").forEach(img => {
            img.classList.remove("ring-2", "ring-black");
        });

        // Add active to clicked
        el.classList.add("ring-2", "ring-black");
    }
</script>