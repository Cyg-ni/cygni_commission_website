<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing | Cygni</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 min-h-screen font-sans text-home-ink bg-linear-to-b from-slate-50 to-home-bg">
    <x-navbar/>

    <main class="w-full max-w-5xl mx-auto mt-6 px-4 md:px-6 pb-10">
        <section class="rounded-3xl p-6 md:p-8 bg-white/90 border border-slate-400/20 shadow-xl">
            <p class="m-0 text-xs font-bold tracking-wider text-home-accent uppercase">Pricing</p>
            <h1 class="mt-3 mb-2 font-serif text-4xl md:text-5xl leading-tight">Commission Rates</h1>
            <p class="m-0 text-home-ink-soft leading-relaxed">Base pricing can vary by character count, detail level, and usage scope. Final quotes are shared before payment.</p>
            <p class="m-0 text-home-ink-soft leading-relaxed"> Simple backgrounds are an additional 50-100 PHP while detailed backgrounds are an additional 200-300 PHP.</p>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                <article class="rounded-2xl border border-slate-300/35 bg-slate-50/85 p-5">
                    <h2 class="m-0 text-lg">Portrait</h2>
                    <p class="mt-1 text-xs uppercase tracking-wider text-home-accent font-bold">Starting At</p>
                    <p class="mt-2 mb-0 text-2xl font-bold">300 PHP</p>
                    <p class="mt-2 mb-0 text-sm text-home-ink-soft leading-relaxed">Bust-up character work or neck-up paintings.</p>
                </article>
                <article class="rounded-2xl border border-slate-300/35 bg-slate-50/85 p-5">
                    <h2 class="m-0 text-lg">Half Body</h2>
                    <p class="mt-1 text-xs uppercase tracking-wider text-home-accent font-bold">Starting At</p>
                    <p class="mt-2 mb-0 text-2xl font-bold">500 PHP</p>
                    <p class="mt-2 mb-0 text-sm text-home-ink-soft leading-relaxed">Half-body character works that cuts beneath the waist. </p>
                </article>
                <article class="rounded-2xl border border-slate-300/35 bg-slate-50/85 p-5">
                    <h2 class="m-0 text-lg">Full Illustration</h2>
                    <p class="mt-1 text-xs uppercase tracking-wider text-home-accent font-bold">Starting At</p>
                    <p class="mt-2 mb-0 text-2xl font-bold">700 PHP</p>
                    <p class="mt-2 mb-0 text-sm text-home-ink-soft leading-relaxed">Fully-kitted character illustrations displaying the character's full body.</p>
                </article>

            </div>
        </section>
    </main>
</body>
</html>
