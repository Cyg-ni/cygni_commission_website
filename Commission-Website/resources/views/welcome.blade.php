<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cygni | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 min-h-screen font-sans text-portfolio-ink bg-cover bg-center box-border" style="background: radial-gradient(circle at 14% 18%, rgba(20, 184, 166, 0.26), transparent 36%), radial-gradient(circle at 88% 84%, rgba(244, 114, 182, 0.18), transparent 32%), linear-gradient(145deg, #f5f7fb 0%, #edf2f7 48%, #f8fafc 100%); overflow: hidden;">
    <main class="relative min-h-screen grid grid-cols-1 lg:grid-cols-5 items-center gap-6 md:gap-8 lg:gap-10 p-3 md:p-6 lg:p-6">
        <section class="relative w-full lg:col-span-3 rounded-r-full lg:rounded-r-full lg:rounded-l-none lg:overflow-hidden shadow-2xl isolation-isolate animate-slide-in-left" aria-hidden="true">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/5 to-slate-900/50 z-10"></div>
            <img src="{{ asset('images/backgroundbanner.jpg') }}" alt="Portfolio showcase backdrop" class="block w-full h-96 lg:h-[calc(100vh-3rem)] lg:max-h-[calc(100vh-3rem)] object-cover scale-104 lg:scale-100 animate-soft-zoom">
        </section>

        <section class="relative lg:col-span-2 px-6 md:px-10 md:py-10 rounded-3xl lg:rounded-2xl bg-white/70 border border-white/85 lg:border-white/85 backdrop-blur-lg shadow-2xl animate-slide-fade w-full max-w-96 lg:max-w-none lg:justify-self-end lg:ml-4">
            <p class="m-0 text-xs md:text-sm tracking-widest text-portfolio-accent font-bold uppercase">Digital Portfolio and Commission Page</p>
            <h1 class="mt-3 mb-4 font-serif text-3xl md:text-4xl lg:text-5xl leading-tight">Welcome to Cygni's personal art portfolio</h1>
            <p class="m-0 text-base md:text-lg leading-relaxed text-portfolio-ink-soft max-w-3xl">
                Browse a curated collection of my latest art pieces blending semi-realism with anime elements. Currently open for commissions, collaborations, and business inquiries. Let's create something together.
            </p>

            <div class="flex flex-wrap gap-2 mt-5 md:mt-5" aria-label="Highlights">
                <span class="inline-flex items-center px-3 py-2 rounded-full border border-slate-300 bg-white/82 text-sm font-semibold text-slate-700">Anime</span>
                <span class="inline-flex items-center px-3 py-2 rounded-full border border-slate-300 bg-white/82 text-sm font-semibold text-slate-700">Fantasy</span>
                <span class="inline-flex items-center px-3 py-2 rounded-full border border-slate-300 bg-white/82 text-sm font-semibold text-slate-700">Semi-Realistic</span>
            </div>

            <div class="mt-7 flex items-center gap-3">
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center px-5 py-3.5 rounded-lg bg-gradient-to-br from-portfolio-accent to-portfolio-accent-soft text-slate-50 text-base font-bold tracking-wider no-underline shadow-lg hover:-translate-y-0.5 transition-all duration-220">View Gallery</a>
                <span class="text-sm text-slate-600 tracking-wider">Commission slots open</span>
            </div>
        </section>
    </main>

</body>
</html>