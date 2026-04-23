@php
$eventSpaces = [
[
'title' => 'Grand Lawn',
'image' => '/assets/images/weddingimg.jpeg',
'type' => 'Outdoor',
'capacity' => '500+ guests',
'suitable' => 'Weddings, large gatherings',
'description' =>
'A spacious open-air venue designed for wedding ceremonies, receptions, and high-capacity celebrations that need scale, movement, and a memorable setting.',
],
[
'title' => 'Banquet Hall',
'image' => '/assets/images/corporate.jpg',
'type' => 'Indoor (AC Hall)',
'capacity' => '100-200 guests',
'suitable' => 'Corporate events, conferences, small functions',
'description' =>
'A climate-controlled hall suited for formal presentations, business gatherings, milestone functions, and well-managed indoor events with focused seating plans.',
],
[
'title' => 'Poolside / Open Area',
'image' => '/assets/images/birthday.jpeg',
'type' => 'Semi-outdoor',
'capacity' => '50-100 guests',
'suitable' => 'Birthday parties, private gatherings, evening events',
'description' =>
'An intimate semi-open setting for curated evening celebrations, private parties, cocktail functions, and smaller social events with a relaxed flow.',
],
];
@endphp

<section class="bg-white py-24" id="event-spaces">
    <div class="mx-auto max-w-screen-2xl px-6 md:px-8">
        <div class="mb-14 flex flex-col gap-8 md:flex-row md:items-end md:justify-between">
            <div class="max-w-3xl">
                <span class="mb-4 inline-block font-label text-xs uppercase tracking-[0.35em] text-primary/70">
                    Venue Selection
                </span>
                <h2 class="mb-6 font-headline text-4xl text-primary md:text-5xl">
                    Our Event Spaces
                </h2>
                <p class="max-w-2xl text-base leading-8 text-on-surface-variant md:text-lg">
                    Chhapaak offers multiple indoor and outdoor venues tailored for weddings, corporate events, and
                    private celebrations, making it easy to choose the right setting based on guest count, event style,
                    and format.
                </p>
            </div>

            <div class="rounded-xl border border-outline-variant/60 bg-surface-container-low px-5 py-4 text-sm text-on-surface-variant md:max-w-sm">
                A complete event venue with flexible space options for large-format functions and intimate hosted occasions.
            </div>
        </div>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            @foreach ($eventSpaces as $space)
            <article class="overflow-hidden rounded-xl border border-outline-variant/50 bg-surface-container-lowest shadow-[0_20px_60px_rgba(0,66,66,0.08)]">
                <div class="relative overflow-hidden">
                    <img
                        src="{{ $space['image'] }}"
                        alt="{{ $space['title'] }} event venue at Chhapaak Resort"
                        class="h-72 w-full object-cover object-center transition-transform duration-700 hover:scale-105">
                    <div class="absolute left-5 top-5 rounded-full bg-black/55 px-4 py-2 text-[11px] uppercase tracking-[0.25em] text-white">
                        {{ $space['type'] }}
                    </div>
                </div>

                <div class="p-7 md:p-8">
                    <div class="mb-5">
                        <h3 class="mb-3 font-headline text-3xl text-primary">
                            {{ $space['title'] }}
                        </h3>
                        <p class="text-sm leading-7 text-on-surface-variant">
                            {{ $space['description'] }}
                        </p>
                    </div>

                    <div class="mb-6 grid gap-3 border-y border-outline-variant/50 py-5 text-sm text-on-surface-variant">
                        <div class="flex items-start justify-between gap-4">
                            <span class="font-label uppercase tracking-[0.2em] text-primary/70">Suitable for</span>
                            <span class="max-w-[65%] text-right">{{ $space['suitable'] }}</span>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <span class="font-label uppercase tracking-[0.2em] text-primary/70">Capacity</span>
                            <span class="font-semibold text-primary">{{ $space['capacity'] }}</span>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <span class="font-label uppercase tracking-[0.2em] text-primary/70">Venue type</span>
                            <span>{{ $space['type'] }}</span>
                        </div>
                    </div>

                    <a
                        href="#contact"
                        class="inline-flex items-center justify-center rounded-full bg-primary px-6 py-3 font-label text-xs uppercase tracking-[0.25em] text-white transition-all duration-300 hover:bg-primary-container">
                        Enquire Now
                    </a>
                </div>
            </article>
            @endforeach
        </div>


    </div>
</section>