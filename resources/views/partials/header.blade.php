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
            <button aria-controls="mobile-menu" aria-expanded="false" aria-label="Open navigation menu"
                class="header-menu-button inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/40 text-white backdrop-blur-sm md:hidden"
                id="mobile-menu-toggle" type="button">
                <span class="material-symbols-outlined" id="mobile-menu-icon">menu</span>
            </button>

            <a href="https://www.swiftbook.io/inst/#home?propertyId=941NRa3Daauniyc3zVcsIQMfKG3I8EcQx0dYcZiu35tMaRg1Bz1Tc0MTk=&JDRN=Y"
                target="_blank" rel="noopener noreferrer"
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
                    <a class="mobile-menu-link" data-mobile-menu-link href="#home">
                        <span class="mobile-menu-link-index">01</span>
                        <span class="mobile-menu-link-label">Home</span>
                        <span class="material-symbols-outlined mobile-menu-link-icon">north_east</span>
                    </a>
                    <a class="mobile-menu-link font-semibold" data-mobile-menu-link href="#events">
                        <span class="mobile-menu-link-index">02</span>
                        <span class="mobile-menu-link-label">Events</span>
                        <span class="material-symbols-outlined mobile-menu-link-icon">north_east</span>
                    </a>
                    <a class="mobile-menu-link" data-mobile-menu-link href="#rooms">
                        <span class="mobile-menu-link-index">03</span>
                        <span class="mobile-menu-link-label">Rooms & Stay</span>
                        <span class="material-symbols-outlined mobile-menu-link-icon">north_east</span>
                    </a>
                    <a class="mobile-menu-link" data-mobile-menu-link href="#experience">
                        <span class="mobile-menu-link-index">04</span>
                        <span class="mobile-menu-link-label">Resort Experience</span>
                        <span class="material-symbols-outlined mobile-menu-link-icon">north_east</span>
                    </a>
                    <a class="mobile-menu-link" data-mobile-menu-link href="#gallery">
                        <span class="mobile-menu-link-index">05</span>
                        <span class="mobile-menu-link-label">Gallery</span>
                        <span class="material-symbols-outlined mobile-menu-link-icon">north_east</span>
                    </a>
                    <a class="mobile-menu-link" data-mobile-menu-link href="#contact">
                        <span class="mobile-menu-link-index">06</span>
                        <span class="mobile-menu-link-label">Contact</span>
                        <span class="material-symbols-outlined mobile-menu-link-icon">north_east</span>
                    </a>
                </div>

                <!-- CTA -->
                <div class="mt-6 bg-primary px-5 py-5 text-white rounded-xl">
                    <p class="text-lg italic">Plan Your Event at Chhapaak</p>
                    <a href="#contact" data-mobile-menu-link
                        class="mt-3 inline-block bg-white text-primary px-5 py-2 rounded-full text-xs uppercase">
                        Enquire Now
                    </a>
                </div>

            </div>
        </div>
    </div>
</nav>
