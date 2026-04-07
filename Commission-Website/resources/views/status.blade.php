<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status | Cygni</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 min-h-screen font-sans text-home-ink bg-linear-to-b from-slate-50 to-home-bg">
    <x-navbar/>

    <main class="w-full max-w-6xl mx-auto mt-6 px-4 md:px-6 pb-10">
        <section class="rounded-3xl p-6 md:p-8 bg-white/90 border border-slate-400/20 shadow-xl">
            <p class="m-0 text-xs font-bold tracking-wider text-home-accent uppercase">Status</p>
            <h1 class="mt-3 mb-2 font-serif text-4xl md:text-5xl leading-tight">Commission Queue</h1>
            <p class="m-0 text-home-ink-soft leading-relaxed">Track current commission progress in table format.</p>

            <div class="mt-6 overflow-x-auto rounded-2xl border border-slate-300/35 bg-white">
                <table class="w-full min-w-225 border-separate border-spacing-0">
                    <thead>
                        <tr>
                            <th class="text-left text-xs uppercase tracking-wider text-home-accent border-b border-slate-300 px-3 py-3">Commissioner Name</th>
                            <th class="text-left text-xs uppercase tracking-wider text-home-accent border-b border-slate-300 px-3 py-3">Date Started</th>
                            <th class="text-left text-xs uppercase tracking-wider text-home-accent border-b border-slate-300 px-3 py-3">Payment Status</th>
                            <th class="text-left text-xs uppercase tracking-wider text-home-accent border-b border-slate-300 px-3 py-3">Phase</th>
                            <th class="text-left text-xs uppercase tracking-wider text-home-accent border-b border-slate-300 px-3 py-3">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm font-semibold">speed</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm">2026-04-02</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm">Fully Paid</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm">Rendering</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm text-home-ink-soft">Final lighting pass in progress</td>
                        </tr>
                        <tr>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm font-semibold">mina deadlock</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm">2026-04-05</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm">Paid</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm">Lineart</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm text-home-ink-soft">Awaiting linework approval</td>
                        </tr>
                        <tr>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm font-semibold">Michael B. Jordan</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm">2026-04-06</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm">Yet to Receive</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm">Sketch</td>
                            <td class="border-b border-slate-200 px-3 py-3 text-sm text-home-ink-soft">Draft thumbnails sent</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>
