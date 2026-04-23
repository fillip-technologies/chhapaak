@php
$galleryCategories = [
[
'title' => 'Weddings',
'description' => 'Ceremonies, decor details, and celebration moments.',
'images' => [
[
'src' => '/assets/images/weddingimg.jpeg',
'alt' => 'Wedding setup at Chhapaak',
'caption' => 'Wedding Setup',
],
[
'src' => '/assets/images/engagement.jpeg',
'alt' => 'Engagement celebration at Chhapaak',
'caption' => 'Engagement Moment',
],
[
'src' => '/assets/images/mehndi.jpg',
'alt' => 'Mehndi celebration at Chhapaak',
'caption' => 'Mehndi Celebration',
],
[
'src' => '/assets/images/haldi.jpeg',
'alt' => 'Haldi setup at Chhapaak',
'caption' => 'Haldi Setup',
],
],
],
[
'title' => 'Corporate Events',
'description' => 'Professional gatherings with polished presentation spaces.',
'images' => [
[
'src' => '/assets/images/corporate.jpg',
'alt' => 'Corporate event space at Chhapaak',
'caption' => 'Corporate Event',
],
[
'src' => '/assets/images/ambience.JPG',
'alt' => 'Event ambience for hosted corporate gatherings at Chhapaak',
'caption' => 'Event Ambience',
],
[
'src' => '/assets/images/social.jpeg',
'alt' => 'Guest gathering moment at Chhapaak',
'caption' => 'Hosted Gathering',
],
],
],
[
'title' => 'Social Gatherings',
'description' => 'Private functions, evening celebrations, and guest moments.',
'images' => [
[
'src' => '/assets/images/birthday.jpeg',
'alt' => 'Birthday celebration at Chhapaak',
'caption' => 'Birthday Celebration',
],
[
'src' => '/assets/images/social.jpeg',
'alt' => 'Social gathering at Chhapaak',
'caption' => 'Evening Celebration',
],
[
'src' => '/assets/images/wedding.jpeg',
'alt' => 'Celebration highlight at Chhapaak',
'caption' => 'Celebration Highlight',
],
],
],
];
@endphp

<section class="bg-white py-24" id="gallery">
    <div class="mx-auto max-w-screen-2xl px-6 md:px-8">
        <div class="mx-auto mb-16 max-w-3xl text-center">
            <span class="mb-4 inline-block font-label text-xs uppercase tracking-[0.34em] text-primary/70">
                Event Gallery
            </span>
            <h2 class="mb-6 font-headline text-4xl text-primary md:text-5xl">
                Moments at Chhapaak
            </h2>
            <p class="text-base leading-8 text-on-surface-variant md:text-lg">
                Real celebrations, thoughtfully hosted. Explore wedding functions, corporate gatherings, and social
                occasions that bring Chhapaak to life as an event destination.
            </p>
        </div>

        <div class="space-y-16">
            @foreach ($galleryCategories as $category)
            <div class="rounded-[1.25rem] border border-outline-variant/40 bg-surface-container-low px-5 py-6 md:px-8 md:py-8">
                <div class="mb-6 flex flex-col gap-3 md:flex-row md:items-end md:justify-between">
                    <div>
                        <h3 class="font-headline text-3xl text-primary">
                            {{ $category['title'] }}
                        </h3>
                        <p class="mt-2 text-sm leading-7 text-on-surface-variant">
                            {{ $category['description'] }}
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">
                    @foreach ($category['images'] as $image)
                    <button
                        type="button"
                        class="gallery-item group overflow-hidden rounded-xl bg-surface-container-lowest text-left"
                        data-image="{{ $image['src'] }}"
                        data-alt="{{ $image['alt'] }}"
                        data-caption="{{ $image['caption'] }}">
                        <div class="overflow-hidden">
                            <img
                                src="{{ $image['src'] }}"
                                alt="{{ $image['alt'] }}"
                                class="h-72 w-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                        <div class="px-4 py-4">
                            <span class="font-label text-[11px] uppercase tracking-[0.28em] text-primary/70">
                                {{ $category['title'] }}
                            </span>
                            <p class="mt-2 text-sm text-on-surface-variant">
                                {{ $image['caption'] }}
                            </p>
                        </div>
                    </button>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <!-- <div class="mt-16 rounded-[1.25rem] bg-primary px-8 py-10 text-center text-white md:px-12">
            <h3 class="mb-4 font-headline text-3xl md:text-4xl">
                Plan Your Event at Chhapaak
            </h3>
            <p class="mx-auto mb-8 max-w-2xl text-sm leading-7 text-white/80 md:text-base">
                From first impressions to final celebrations, let your guests experience an event venue designed for
                memorable occasions.
            </p>
            <div class="flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a
                    href="#contact"
                    class="inline-flex items-center justify-center rounded-full bg-white px-8 py-3 font-label text-xs uppercase tracking-[0.25em] text-primary transition-all duration-300 hover:bg-surface-container-low"
                >
                    Enquire Now
                </a>
                <a
                    href="https://wa.me/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center justify-center rounded-full border border-white/40 px-8 py-3 font-label text-xs uppercase tracking-[0.25em] text-white transition-all duration-300 hover:bg-white/10"
                >
                    Contact Us
                </a>
            </div>
        </div> -->
    </div>

    <div
        id="gallery-lightbox"
        class="pointer-events-none fixed inset-0 z-[60] flex items-center justify-center bg-black/70 px-6 opacity-0 transition-all duration-300"
        aria-hidden="true">
        <div class="relative w-full max-w-5xl scale-95 transition-transform duration-300" id="gallery-lightbox-panel">
            <button
                type="button"
                id="gallery-lightbox-close"
                class="absolute right-4 top-4 z-10 inline-flex h-10 w-10 items-center justify-center rounded-full bg-black/50 text-white backdrop-blur-sm"
                aria-label="Close preview">
                <span class="material-symbols-outlined">close</span>
            </button>

            <div class="overflow-hidden rounded-[1.25rem] bg-white">
                <img
                    id="gallery-lightbox-image"
                    src=""
                    alt=""
                    class="max-h-[75vh] w-full object-cover">
                <div class="px-6 py-5">
                    <p id="gallery-lightbox-caption" class="text-sm text-on-surface-variant"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (() => {
        const lightbox = document.getElementById('gallery-lightbox');
        const lightboxPanel = document.getElementById('gallery-lightbox-panel');
        const lightboxImage = document.getElementById('gallery-lightbox-image');
        const lightboxCaption = document.getElementById('gallery-lightbox-caption');
        const closeButton = document.getElementById('gallery-lightbox-close');
        const items = document.querySelectorAll('.gallery-item');

        if (!lightbox || !lightboxPanel || !lightboxImage || !lightboxCaption || !closeButton || !items.length) return;

        const openLightbox = (item) => {
            lightboxImage.src = item.dataset.image || '';
            lightboxImage.alt = item.dataset.alt || '';
            lightboxCaption.textContent = item.dataset.caption || '';
            lightbox.classList.remove('pointer-events-none', 'opacity-0');
            lightbox.classList.add('opacity-100');
            lightboxPanel.classList.remove('scale-95');
            lightboxPanel.classList.add('scale-100');
            document.body.classList.add('overflow-hidden');
            lightbox.setAttribute('aria-hidden', 'false');
        };

        const closeLightbox = () => {
            lightbox.classList.add('pointer-events-none', 'opacity-0');
            lightbox.classList.remove('opacity-100');
            lightboxPanel.classList.add('scale-95');
            lightboxPanel.classList.remove('scale-100');
            document.body.classList.remove('overflow-hidden');
            lightbox.setAttribute('aria-hidden', 'true');
        };

        items.forEach((item) => {
            item.addEventListener('click', () => openLightbox(item));
        });

        closeButton.addEventListener('click', closeLightbox);

        lightbox.addEventListener('click', (event) => {
            if (event.target === lightbox) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && lightbox.getAttribute('aria-hidden') === 'false') {
                closeLightbox();
            }
        });
    })();
</script>