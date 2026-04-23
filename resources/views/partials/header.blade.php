<nav class="fixed top-0 w-full z-50 glass-header" id="main-nav">
    <div class="flex justify-between items-center px-4 sm:px-6 md:px-8 py-4 md:py-6 max-w-screen-2xl mx-auto">

        <!-- Logo -->
        <a class="font-serif text-2xl font-semibold italic text-white mix-blend-difference" href="/">
            <img alt="Chhapaak Resort" class="header-logo h-16" src="/assets/images/Chhapaak.png" />
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-12">
            <a class="nav-link" href="#home">Home</a>
            <a class="nav-link font-semibold text-white" href="#events">Events</a>
            <a class="nav-link" href="#rooms">Rooms & Stay</a>
            <a class="nav-link" href="#experience">Resort Experience</a>
            <a class="nav-link" href="#gallery">Gallery</a>
        </div>

        <!-- CTA Button -->
        <div class="flex items-center gap-3">
            <button aria-controls="mobile-menu" aria-expanded="false"
                class="header-menu-button inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/40 text-white backdrop-blur-sm md:hidden"
                id="mobile-menu-toggle" type="button">
                <span class="material-symbols-outlined">menu</span>
            </button>

            <a href="https://www.swiftbook.io/inst/#home?propertyId=941NRa3Daauniyc3zVcsIQMfKG3I8EcQx0dYcZiu35tMaRg1Bz1Tc0MTk=&JDRN=Y"
                target="_blank"
                class="hidden md:inline-flex items-center justify-center bg-green-600 text-white px-6 py-2 rounded-full font-label text-[10px] tracking-[0.2em] uppercase hover:bg-green-700 transition">
                Book Event
            </a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu-shell md:hidden" id="mobile-menu">
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6">
            <div class="mobile-menu-panel">

                <div>
                    <span class="block text-xs uppercase text-primary/60">Explore</span>
                    <h3 class="mt-3 text-2xl italic text-primary">Chhapaak Events</h3>
                </div>

                <div class="mt-6 flex flex-col gap-3">
                    <a class="mobile-menu-link" href="#home">Home</a>
                    <a class="mobile-menu-link font-semibold" href="#events">Events</a>
                    <a class="mobile-menu-link" href="#rooms">Rooms & Stay</a>
                    <a class="mobile-menu-link" href="#experience">Resort Experience</a>
                    <a class="mobile-menu-link" href="#gallery">Gallery</a>
                    <a class="mobile-menu-link" href="#contact">Contact</a>
                </div>

                <!-- CTA -->
                <div class="mt-6 bg-primary px-5 py-5 text-white rounded-xl">
                    <p class="text-lg italic">Plan Your Event at Chhapaak</p>
                    <a href="#contact"
                        class="mt-3 inline-block bg-white text-primary px-5 py-2 rounded-full text-xs uppercase">
                        Enquire Now
                    </a>
                </div>

            </div>
        </div>
    </div>
</nav>
