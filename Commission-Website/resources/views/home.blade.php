<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 min-h-screen font-sans text-home-ink bg-gradient-to-b from-slate-50 to-slate-100" style="background: radial-gradient(circle at 14% 12%, rgba(20, 184, 166, 0.15), transparent 34%), linear-gradient(165deg, #f8fafc 0%, #e2e8f0 100%);">
    <x-navbar/>

    <main class="w-full mt-4 pt-0 px-6 md:px-4 pb-8 min-h-[calc(100vh-92px)]">
        <section class="mt-4 rounded-3xl p-6 md:p-4 bg-white/90 border border-slate-400/20 shadow-xl grid grid-cols-1 lg:grid-cols-5 gap-5 min-h-96 lg:items-stretch">
            <div class="lg:col-span-3">
                <h1 class="mt-3 mb-3 font-serif text-4xl md:text-2xl leading-tight">Welcome to my slice of the internet!</h1>
                <p class="mt-4 text-home-ink-soft max-w-2xl leading-relaxed">
                    Hi, I'm Cygni and I'm a full-time university student who's always dying from my classes. If I'm not playing FFXIV or League of Legends, I'm probably drawing while watching a Jacob Geller video essay. My art style is a blend of semi-realism and anime, with a focus on character design and storytelling. Currently open for commissions, collaborations, and business inquiries for stylized and semi-realistic illustration work.
                </p>

                <div class="mt-5 flex gap-2.5 flex-wrap">
                    <a class="no-underline rounded-lg px-4 py-3 text-sm font-bold text-white bg-linear-to-br from-home-accent to-home-accent-soft shadow-lg hover:-translate-y-0.5 transition-transform duration-180" href="{{ route('portfolio') }}">See Commission Gallery</a>
                    <a class="no-underline rounded-lg px-4 py-3 text-sm font-bold text-home-accent border border-home-accent/28 bg-white/96 hover:-translate-y-0.5 transition-transform duration-180" href="{{ route('contact') }}">Start a Commission</a>
                </div>

                 <p class="section-title mt-14 mb-2 text-xs font-bold tracking-wider text-home-accent uppercase">Commission Types</p>
        <section class="mt-1 grid grid-cols-1 md:grid-cols-3 gap-4 mr-4">
            <article class="rounded-xl bg-white/95 border border-slate-400/28 p-4">
                <h2 class="mt-0 mb-0 text-base">Character Illustrations</h2>
                <p class="mt-2 mb-0 text-home-ink-soft leading-relaxed text-sm">This can fall under original character renders or fan-inspired commissions on existing media. Let's tell a story with your characters in mind, doing anything from simple portraits to complex narrative scenes that resembles your visions as ala-cutscene stills.</p>
            </article>
            <article class="rounded-xl bg-white/95 border border-slate-400/28 p-4">
                <h2 class="mt-0 mb-0 text-base">Character Reference Sheets</h2>
                <p class="mt-2 mb-0 text-home-ink-soft leading-relaxed text-sm">Comprehensive reference materials for character design, including multiple angles, detailed anatomy, and style guides. Could include the several angles, turnarounds, and expressions of the character involved in the reference cheets including props used by the character.</p>
            </article>
            <article class="rounded-xl bg-white/95 border border-slate-400/28 p-4">
                <h2 class="mt-0 mb-0 text-base">Custom Art Template</h2>
                <p class="mt-2 mb-0 text-home-ink-soft leading-relaxed text-sm">Interested in working with me with something else in mind? Please feel free to inquire me! I am open to following other styles such as doodles, journal-style illustrations, manga-like art, and more.</p>
            </article>

        </section>

                <p class="section-title mt-14 mb-2 text-xs font-bold tracking-wider text-home-accent uppercase">Before You Commission Me</p>
                <div class="border border-slate-400/28 rounded-2xl p-4 bg-slate-50/95">
                    <p class="mt-0 pb-4 text-home-ink-soft leading-relaxed">Please read my full TOS to find important information such as payment plan, Turn-out-time, revision rules, refund rules and other related things.</p>

                </div>
                <div class="border border-slate-400/28 rounded-2xl p-4 bg-slate-50/95">
                   
                    <p class="mt-2.5 pb-0 text-home-ink-soft leading-relaxed">I do NOT draw gore, loli-style characters in NSFW situations, and heavy mecha. Rules for NSFW art can be found in TOS. If something isn't mentioned, contact me if you need for clarification.</p>
                    
                </div>
                <div class="border border-slate-400/28 rounded-2xl p-4 bg-slate-50/95">
                    <p class="mt-2.5 pb-0 text-home-ink-soft leading-relaxed">I reply usually within 1-2 business days or within the same hour if it's my usual working hours. Please do not spam my channels of communication. If I'm busy, I'll reply to you once I'm done with my prior commitments.</p>
                </div>
                <div class="border border-slate-400/28 rounded-2xl p-4 bg-slate-50/95">
                    <p class="mt-2.5 pb-0 text-home-ink-soft leading-relaxed">I have different rates for local (PH-Based), International, and Corporate commissions. Please refer to my rates under my TOS for your reference.</p>
                </div>
                <div class="border border-slate-400/28 rounded-2xl p-4 bg-slate-50/95">
                    <p class="mt-2.5 pb-0 text-home-ink-soft leading-relaxed">If you want to track your commission's progress, please refer to the status page. I will update my different queue statues there regularly.</p>
                </div>
            </div>
            

            <aside class="lg:col-span-2 rounded-2xl bg-blue-100 overflow-hidden min-h-72 lg:min-h-full relative shadow-lg animate-rise-in">
                <div class="flex w-[300%] h-full animate-slide-show">
                    <figure class="w-1/3 flex-none">
                        <img src="{{ asset('images/collab.png') }}" alt="Commission artwork preview 1" class="w-full h-full object-cover opacity-90 block">
                    </figure>
                    <figure class="w-1/3 flex-none">
                        <img src="{{ asset('images/albedo.png') }}" alt="Commission artwork preview 2" class="w-full h-full object-cover opacity-90 block">
                    </figure>
                    <figure class="w-1/3 flex-none">
                        <img src="{{ asset('images/swan.png') }}" alt="Commission artwork preview 3" class="w-full h-full object-cover opacity-90 block">
                    </figure>
                </div>
                
            </aside>
        </section>



        <p class="mt-14 mb-2 text-xs font-bold tracking-wider text-home-accent uppercase">How does commissioning work?</p>
        <section class="mt-1 rounded-2xl p-4 border border-slate-400/28 bg-slate-50/90 grid grid-cols-1 md:grid-cols-3 gap-4">
            <article class="rounded-xl border border-slate-400/28 p-4 bg-white/95">
                <b class="text-xs tracking-wider text-home-accent uppercase">Step 1</b>
                <p class="mt-3 mb-0 text-home-ink-soft leading-relaxed text-sm">Send your ideas references and contact me through the contact page. Please fill out the form as detailed and comprehensively as you can so that we can align with each other with your vision. Afterwards, I will contact you back with your preferred channel of communication</p>
            </article>
            <article class="rounded-xl border border-slate-400/28 p-4 bg-white/95">
                <b class="text-xs tracking-wider text-home-accent uppercase">Step 2</b>
                <p class="mt-3 mb-0 text-home-ink-soft leading-relaxed text-sm">Receive quote, and receive a thumbnail of potential artwork final appearances from me. We will align with what your final vision is until I create a thumbnail you are satisfied with, and confirm your initial payment.</p>
            </article>
            <article class="rounded-xl border border-slate-400/28 p-4 bg-white/95">
                <b class="text-xs tracking-wider text-home-accent uppercase">Step 3</b>
                <p class="mt-3 mb-0 text-home-ink-soft leading-relaxed text-sm">Stay updated via my website's commission status updates from sketching to lineart to flats to render. Minor revisions can be done and receive a high-resolution final illustration via a ZIP file in your email of choice.</p>
            </article>
        </section>
    </main>
</body>
</html>