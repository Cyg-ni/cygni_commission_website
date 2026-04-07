<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Commission | Cygni</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 min-h-screen font-sans text-home-ink bg-linear-to-b from-slate-50 to-home-bg">
    <x-navbar/>

    <main class="w-full max-w-3xl mx-auto mt-6 px-4 md:px-6 pb-10">
        <section class="rounded-3xl p-6 md:p-8 bg-white/90 border border-slate-400/20 shadow-xl">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <p class="m-0 text-xs font-bold tracking-wider text-home-accent uppercase">Commission</p>
                    <h1 class="mt-3 mb-0 font-serif text-4xl leading-tight">Update Commission</h1>
                </div>
                <a href="{{ route('status') }}" class="text-home-accent hover:text-home-accent-soft transition-colors">← Back</a>
            </div>

            <div class="mb-6 p-4 rounded-2xl bg-slate-50/80 border border-slate-300/30">
                <p class="m-0 text-sm font-semibold text-home-accent">{{ $commission->commissioner_name }}</p>
                <p class="mt-1 mb-0 text-sm text-home-ink-soft">Commission from {{ $commission->date_started->format('M d, Y') }}</p>
            </div>

            <form action="{{ route('commissions.update', $commission) }}" method="POST" class="space-y-6">
                @csrf
                @method('PATCH')

                <div>
                    <label for="payment_status" class="block text-sm font-semibold">Payment Status</label>
                    <select id="payment_status" name="payment_status" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white focus:outline-none focus:ring-2 focus:ring-home-accent/50">
                        <option value="yet_to_receive" @selected((string) $commission->payment_status === 'yet_to_receive')>Yet to Receive</option>
                        <option value="paid" @selected((string) $commission->payment_status === 'paid')>Paid</option>
                        <option value="fully_paid" @selected((string) $commission->payment_status === 'fully_paid')>Fully Paid</option>
                    </select>
                </div>

                <div>
                    <label for="phase" class="block text-sm font-semibold">Project Phase</label>
                    <select id="phase" name="phase" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white focus:outline-none focus:ring-2 focus:ring-home-accent/50">
                        <option value="sketch" @selected((string) $commission->phase === 'sketch')>Sketch</option>
                        <option value="lineart" @selected((string) $commission->phase === 'lineart')>Lineart</option>
                        <option value="rendering" @selected((string) $commission->phase === 'rendering')>Rendering</option>
                    </select>
                </div>

                <div>
                    <label for="notes" class="block text-sm font-semibold">Notes</label>
                    <textarea id="notes" name="notes" rows="4" placeholder="Update on progress, issues, or client feedback" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white focus:outline-none focus:ring-2 focus:ring-home-accent/50">{{ $commission->notes }}</textarea>
                </div>

                <div class="flex gap-3 pt-4">
                    <button type="submit" class="inline-flex items-center justify-center px-5 py-3 rounded-lg bg-linear-to-br from-home-accent to-home-accent-soft text-white text-sm font-bold tracking-wide shadow-lg hover:-translate-y-0.5 transition-transform duration-200">Save Changes</button>
                    <a href="{{ route('status') }}" class="inline-flex items-center justify-center px-5 py-3 rounded-lg border border-slate-300 text-home-ink text-sm font-bold tracking-wide hover:bg-slate-50 transition-colors duration-200">Cancel</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
