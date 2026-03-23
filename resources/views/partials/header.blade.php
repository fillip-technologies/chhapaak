<nav class="fixed top-0 w-full z-50 glass-header" id="main-nav">
    <div class="flex justify-between items-center px-4 sm:px-6 md:px-8 py-4 md:py-6 max-w-screen-2xl mx-auto">
        <a class="font-serif text-2xl font-semibold italic text-white mix-blend-difference" href="/"><img
                alt="Chhapaak Resort" class="header-logo h-16" src="/assets/images/Chhapaak.png" /></a>
        <div class="hidden md:flex items-center space-x-16">
            <a class="font-label text-[11px] tracking-[0.3em] uppercase text-white mix-blend-difference hover:opacity-60 transition-opacity"
                href="#rooms">Sanctuaries</a>
            <a class="font-label text-[11px] tracking-[0.3em] uppercase text-white mix-blend-difference hover:opacity-60 transition-opacity"
                href="#experiences">Dining</a>
            <a class="font-label text-[11px] tracking-[0.3em] uppercase text-white mix-blend-difference hover:opacity-60 transition-opacity"
                href="#gallery">Wellness</a>
        </div>
        <div class="flex items-center gap-3">
            <button aria-controls="mobile-menu" aria-expanded="false"
                class="header-menu-button inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/40 text-white backdrop-blur-sm transition-all duration-500 md:hidden"
                id="mobile-menu-toggle" type="button">
                <span class="sr-only">Open navigation menu</span>
                <span class="material-symbols-outlined" id="mobile-menu-icon">menu</span>
            </button>
            <button type="button"
                class="header-contact-button hidden md:inline-flex items-center justify-center border border-white text-white px-8 py-2 rounded-full font-label text-[10px] tracking-[0.2em] uppercase hover:bg-white hover:text-primary transition-all duration-500 backdrop-blur-sm">
                Contact
            </button>
        </div>
    </div>
    <div class="mobile-menu-shell md:hidden" id="mobile-menu">
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6">
            <div class="mobile-menu-panel">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <span class="block font-label text-[10px] tracking-[0.38em] uppercase text-primary/60">Navigate</span>
                        <h3 class="mt-3 font-headline text-[2rem] leading-none italic text-primary">Discover
                            Chhapaak</h3>
                    </div>
                    <span
                        class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-white/60 text-primary/60">
                        <span class="material-symbols-outlined text-[20px]">south_east</span>
                    </span>
                </div>
                <div class="mt-6 flex flex-col gap-3">
                    <a class="mobile-menu-link group" data-mobile-menu-link href="#">
                        <span class="mobile-menu-link-index">01</span>
                        <span class="mobile-menu-link-label">Sanctuaries</span>
                        <span class="material-symbols-outlined mobile-menu-link-icon">arrow_outward</span>
                    </a>
                    <a class="mobile-menu-link group" data-mobile-menu-link href="#">
                        <span class="mobile-menu-link-index">02</span>
                        <span class="mobile-menu-link-label">Dining</span>
                        <span class="material-symbols-outlined mobile-menu-link-icon">arrow_outward</span>
                    </a>
                    <a class="mobile-menu-link group" data-mobile-menu-link href="#">
                        <span class="mobile-menu-link-index">03</span>
                        <span class="mobile-menu-link-label">Wellness</span>
                        <span class="material-symbols-outlined mobile-menu-link-icon">arrow_outward</span>
                    </a>
                </div>
                <div class="mt-6 rounded-[1.5rem] bg-primary px-5 py-5 text-white shadow-[0_24px_60px_rgba(0,66,66,0.28)]">
                    <span class="block font-label text-[10px] tracking-[0.28em] uppercase text-white/70">Plan Your Stay</span>
                    <div class="mt-3 flex items-center justify-between gap-4">
                        <p class="font-headline text-2xl italic leading-tight">Connect with our concierge</p>
                        <button type="button"
                            class="inline-flex shrink-0 items-center justify-center rounded-full bg-white px-5 py-3 font-label text-[10px] tracking-[0.24em] uppercase text-primary transition-all duration-500 hover:bg-surface">
                            Contact
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
