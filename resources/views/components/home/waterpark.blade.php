@php
$experienceSlides = [
[
'image' => '/assets/images/waterpark/waterpark-1.JPG',
'alt' => 'Guests enjoying a premium celebration ambience at Chhapaak',
],
[
'image' => '/assets/images/waterpark/waterpark-2.JPG',
'alt' => 'Guests gathering in an elegant social event setting at Chhapaak',
],
[
'image' => '/assets/images/waterpark/waterpark-3.JPG',
'alt' => 'Private celebration experience for guests at Chhapaak',
],
[
'image' => '/assets/images/waterpark/waterpark-4.JPG',
'alt' => 'Private celebration experience for guests at Chhapaak',
],
[
'image' => '/assets/images/waterpark/waterpark-5.JPG',
'alt' => 'Private celebration experience for guests at Chhapaak',
],
[
'image' => '/assets/images/waterpark/waterpark-6.JPG',
'alt' => 'Private celebration experience for guests at Chhapaak',
],
[
'image' => '/assets/images/waterpark/waterpark-7.JPG',
'alt' => 'Private celebration experience for guests at Chhapaak',
],
[
'image' => '/assets/images/waterpark/waterpark-8.JPG',
'alt' => 'Private celebration experience for guests at Chhapaak',
],
[
'image' => '/assets/images/waterpark/waterpark-9.JPG',
'alt' => 'Private celebration experience for guests at Chhapaak',
],
[
'image' => '/assets/images/waterpark/waterpark-10.JPG',
'alt' => 'Private celebration experience for guests at Chhapaak',
],
];
@endphp

<!-- Experiences Section (Light & Premium) -->
<section class="bg-surface-container-low py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="font-label text-primary tracking-[0.3em] uppercase text-xs mb-4 block">
                Experience
            </span>

            <h2 class="font-headline text-4xl md:text-6xl mb-6 leading-tight">
                More Than Just a Venue
            </h2>

            <p class="text-on-surface-variant text-base md:text-lg">
                While you celebrate your special moments, your guests can enjoy
                relaxing and fun-filled experiences across the property.
            </p>
        </div>

        <!-- Content -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- Auto Slider -->
            <div class="relative rounded-xl overflow-hidden" id="experience-slider">
                <div class="relative h-[400px]">
                    @foreach ($experienceSlides as $index => $slide)
                    <img
                        src="{{ $slide['image'] }}"
                        alt="{{ $slide['alt'] }}"
                        class="experience-slide absolute inset-0 h-full w-full object-cover transition-opacity duration-700 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}"
                        data-slide="{{ $index }}" />
                    @endforeach
                </div>

                <div class="absolute bottom-5 left-1/2 flex -translate-x-1/2 gap-2 rounded-full bg-white/75 px-3 py-2 backdrop-blur-sm">
                    @foreach ($experienceSlides as $index => $slide)
                    <button
                        type="button"
                        class="experience-dot h-2.5 w-2.5 rounded-full transition-all duration-300 {{ $index === 0 ? 'bg-primary' : 'bg-primary/30' }}"
                        data-dot="{{ $index }}"
                        aria-label="Show slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
            </div>

            <!-- Content -->
            <div>
                <h3 class="font-headline text-2xl md:text-3xl mb-4 text-primary">
                    Relax & Enjoy During Your Celebration
                </h3>

                <p class="text-on-surface-variant mb-6 leading-relaxed">
                    From refreshing poolside moments to open leisure spaces,
                    Chhapaak offers a complete experience where your guests
                    can unwind while you celebrate your event.
                </p>

                <!-- Points -->
                <ul class="grid grid-cols-2 gap-4 text-sm text-on-surface-variant mb-8">
                    <li>✔ Leisure Spaces</li>
                    <li>✔ Poolside Relaxation</li>
                    <li>✔ Family-Friendly Environment</li>
                    <li>✔ Comfortable Atmosphere</li>
                </ul>

                <!-- CTA -->
                <a href="https://chhapaakwaterpark.com/"
                    class="inline-block bg-primary text-white px-6 py-3 rounded-full text-sm uppercase tracking-widest"
                    target="_blank" rel="noopener noreferrer">
                    Explore Now
                </a>
            </div>

        </div>

    </div>
</section>

<script>
    (() => {
        const slider = document.getElementById('experience-slider');

        if (!slider) return;

        const slides = slider.querySelectorAll('.experience-slide');
        const dots = slider.querySelectorAll('.experience-dot');
        let activeIndex = 0;

        const showSlide = (index) => {
            slides.forEach((slide, slideIndex) => {
                slide.classList.toggle('opacity-100', slideIndex === index);
                slide.classList.toggle('opacity-0', slideIndex !== index);
            });

            dots.forEach((dot, dotIndex) => {
                dot.classList.toggle('bg-primary', dotIndex === index);
                dot.classList.toggle('bg-primary/30', dotIndex !== index);
            });

            activeIndex = index;
        };

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => showSlide(index));
        });

        setInterval(() => {
            const nextIndex = (activeIndex + 1) % slides.length;
            showSlide(nextIndex);
        }, 3500);
    })();
</script>