<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Cygni</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 min-h-screen font-sans text-home-ink bg-linear-to-b from-slate-50 to-home-bg">
    <x-navbar/>

    <main class="w-full max-w-6xl mx-auto mt-6 px-4 md:px-6 pb-10">
        <section class="rounded-3xl p-6 md:p-8 bg-white/90 border border-slate-400/20 shadow-xl">
            <p class="m-0 text-xs font-bold tracking-wider text-home-accent uppercase">Portfolio</p>
            <h1 class="mt-3 mb-2 font-serif text-4xl md:text-5xl leading-tight">Gallery Showcase</h1>
            <p class="m-0 text-home-ink-soft leading-relaxed max-w-3xl">A curated collection of my recent or current illustrations. I have a variety of styles that I often enjoy experimenting with.</p>
        </section>

        <section class="mt-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 [&>figure]:transition-all [&>figure]:duration-300 [&>figure]:ease-out [&>figure]:hover:-translate-y-1 [&>figure]:hover:scale-[1.02] [&>figure]:hover:shadow-2xl" aria-label="Artwork gallery">
            <figure class="rounded-2xl overflow-hidden border border-slate-300/30 bg-white shadow-lg">
                <button type="button" class="block w-full cursor-zoom-in gallery-image" data-full="{{ asset('images/ailithwip.png') }}" data-alt="Ailithwip artwork">
                    <img src="{{ asset('images/ailithwip.png') }}" alt="Ailithwip artwork" class="w-full h-64 object-cover">
                </button>
            </figure>
            <figure class="rounded-2xl overflow-hidden border border-slate-300/30 bg-white shadow-lg">
                <button type="button" class="block w-full cursor-zoom-in gallery-image" data-full="{{ asset('images/albedo.png') }}" data-alt="Albedo artwork">
                    <img src="{{ asset('images/albedo.png') }}" alt="Albedo artwork" class="w-full h-64 object-cover">
                </button>
            </figure>
            <figure class="rounded-2xl overflow-hidden border border-slate-300/30 bg-white shadow-lg">
                <button type="button" class="block w-full cursor-zoom-in gallery-image" data-full="{{ asset('images/au\'ra.jpg') }}" data-alt="Au Ra artwork">
                    <img src="{{ asset('images/au\'ra.jpg') }}" alt="Au Ra artwork" class="w-full h-64 object-cover">
                </button>
            </figure>
            <figure class="rounded-2xl overflow-hidden border border-slate-300/30 bg-white shadow-lg">
                <button type="button" class="block w-full cursor-zoom-in gallery-image" data-full="{{ asset('images/backgroundbanner.jpg') }}" data-alt="Background banner artwork">
                    <img src="{{ asset('images/backgroundbanner.jpg') }}" alt="Background banner artwork" class="w-full h-64 object-cover">
                </button>
            </figure>
            <figure class="rounded-2xl overflow-hidden border border-slate-300/30 bg-white shadow-lg">
                <button type="button" class="block w-full cursor-zoom-in gallery-image" data-full="{{ asset('images/childestudy.jpg') }}" data-alt="Childe study artwork">
                    <img src="{{ asset('images/childestudy.jpg') }}" alt="Childe study artwork" class="w-full h-64 object-cover">
                </button>
            </figure>
            <figure class="rounded-2xl overflow-hidden border border-slate-300/30 bg-white shadow-lg">
                <button type="button" class="block w-full cursor-zoom-in gallery-image" data-full="{{ asset('images/collab.png') }}" data-alt="Collab artwork">
                    <img src="{{ asset('images/collab.png') }}" alt="Collab artwork" class="w-full h-64 object-cover">
                </button>
            </figure>
            <figure class="rounded-2xl overflow-hidden border border-slate-300/30 bg-white shadow-lg">
                <button type="button" class="block w-full cursor-zoom-in gallery-image" data-full="{{ asset('images/ex2.png') }}" data-alt="Example artwork two">
                    <img src="{{ asset('images/ex2.png') }}" alt="Example artwork two" class="w-full h-64 object-cover">
                </button>
            </figure>
            <figure class="rounded-2xl overflow-hidden border border-slate-300/30 bg-white shadow-lg">
                <button type="button" class="block w-full cursor-zoom-in gallery-image" data-full="{{ asset('images/hann.png') }}" data-alt="Hann artwork">
                    <img src="{{ asset('images/hann.png') }}" alt="Hann artwork" class="w-full h-64 object-cover">
                </button>
            </figure>
            <figure class="rounded-2xl overflow-hidden border border-slate-300/30 bg-white shadow-lg">
                <button type="button" class="block w-full cursor-zoom-in gallery-image" data-full="{{ asset('images/miqo.png') }}" data-alt="Miqo artwork">
                    <img src="{{ asset('images/miqo.png') }}" alt="Miqo artwork" class="w-full h-64 object-cover">
                </button>
            </figure>
            <figure class="rounded-2xl overflow-hidden border border-slate-300/30 bg-white shadow-lg sm:col-span-2 lg:col-span-1">
                <button type="button" class="block w-full cursor-zoom-in gallery-image" data-full="{{ asset('images/swan.png') }}" data-alt="Swan artwork">
                    <img src="{{ asset('images/swan.png') }}" alt="Swan artwork" class="w-full h-64 object-cover">
                </button>
            </figure>
        </section>
    </main>

    <div id="lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-950/90 p-4 opacity-0 transition-opacity duration-300">
        <button id="lightboxClose" type="button" class="absolute top-4 right-4 rounded-full border border-white/50 bg-white/10 text-white px-3 py-1 text-sm">Close</button>
        <img id="lightboxImage" src="" alt="" class="max-w-full max-h-[90vh] rounded-xl shadow-2xl opacity-0 scale-95 transition-all duration-300 ease-out">
    </div>

    <script>
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        const lightboxClose = document.getElementById('lightboxClose');
        const galleryButtons = document.querySelectorAll('.gallery-image');

        function closeLightbox() {
            lightbox.classList.remove('opacity-100');
            lightboxImage.classList.remove('opacity-100', 'scale-100');
            lightboxImage.classList.add('opacity-0', 'scale-95');

            window.setTimeout(() => {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
                lightboxImage.src = '';
                lightboxImage.alt = '';
            }, 220);
        }

        galleryButtons.forEach((button) => {
            button.addEventListener('click', () => {
                lightboxImage.src = button.dataset.full;
                lightboxImage.alt = button.dataset.alt;
                lightbox.classList.remove('hidden');
                lightbox.classList.add('flex');

                requestAnimationFrame(() => {
                    lightbox.classList.add('opacity-100');
                    lightboxImage.classList.remove('opacity-0', 'scale-95');
                    lightboxImage.classList.add('opacity-100', 'scale-100');
                });
            });
        });

        lightboxClose.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (event) => {
            if (event.target === lightbox) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && lightbox.classList.contains('flex')) {
                closeLightbox();
            }
        });
    </script>
</body>
</html>