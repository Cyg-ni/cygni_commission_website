<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Commission | Cygni</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 min-h-screen font-sans text-home-ink bg-linear-to-b from-slate-50 to-home-bg">
    <x-navbar/>

    <main class="w-full max-w-4xl mx-auto mt-6 px-4 md:px-6 pb-10">
        <section class="rounded-3xl p-6 md:p-8 bg-white/90 border border-slate-400/20 shadow-xl">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <p class="m-0 text-xs font-bold tracking-wider text-home-accent uppercase">Commission</p>
                    <h1 class="mt-3 mb-0 font-serif text-4xl leading-tight">Add New Commission</h1>
                </div>
                <a href="{{ route('status') }}" class="text-home-accent hover:text-home-accent-soft transition-colors">← Back</a>
            </div>

            @if ($errors->any())
                <div class="mb-6 rounded-2xl border border-red-300 bg-red-50 text-red-700 px-4 py-3 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('commissions.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @csrf

                <div>
                    <label for="commissioner_name" class="block text-sm font-semibold">Commissioner Name</label>
                    <input id="commissioner_name" name="commissioner_name" type="text" value="{{ old('commissioner_name') }}" required class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="commissioner_email" class="block text-sm font-semibold">Commissioner Email</label>
                    <input id="commissioner_email" name="commissioner_email" type="email" value="{{ old('commissioner_email') }}" required class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="commissioner_discord" class="block text-sm font-semibold">Discord</label>
                    <input id="commissioner_discord" name="commissioner_discord" type="text" value="{{ old('commissioner_discord') }}" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="commission_type" class="block text-sm font-semibold">Commission Type</label>
                    <input id="commission_type" name="commission_type" type="text" value="{{ old('commission_type') }}" required class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="budget" class="block text-sm font-semibold">Budget</label>
                    <input id="budget" name="budget" type="text" value="{{ old('budget') }}" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="deadline" class="block text-sm font-semibold">Deadline</label>
                    <input id="deadline" name="deadline" type="date" value="{{ old('deadline') }}" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="date_started" class="block text-sm font-semibold">Date Started</label>
                    <input id="date_started" name="date_started" type="date" value="{{ old('date_started', now()->toDateString()) }}" required class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="payment_status" class="block text-sm font-semibold">Payment Status</label>
                    <select id="payment_status" name="payment_status" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                        <option value="yet_to_receive" @selected(old('payment_status', 'yet_to_receive') === 'yet_to_receive')>Yet to Receive</option>
                        <option value="paid" @selected(old('payment_status') === 'paid')>Paid</option>
                        <option value="fully_paid" @selected(old('payment_status') === 'fully_paid')>Fully Paid</option>
                    </select>
                </div>

                <div>
                    <label for="phase" class="block text-sm font-semibold">Project Phase</label>
                    <select id="phase" name="phase" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                        <option value="sketch" @selected(old('phase', 'sketch') === 'sketch')>Sketch</option>
                        <option value="lineart" @selected(old('phase') === 'lineart')>Lineart</option>
                        <option value="rendering" @selected(old('phase') === 'rendering')>Rendering</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label for="project_brief" class="block text-sm font-semibold">Project Brief</label>
                    <textarea id="project_brief" name="project_brief" rows="4" required class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">{{ old('project_brief') }}</textarea>
                </div>

                <div class="md:col-span-2">
                    <label for="notes" class="block text-sm font-semibold">Notes</label>
                    <textarea id="notes" name="notes" rows="3" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">{{ old('notes') }}</textarea>
                </div>

                <div class="md:col-span-2 flex gap-3 pt-4">
                    <button type="submit" class="inline-flex items-center justify-center px-5 py-3 rounded-lg bg-linear-to-br from-home-accent to-home-accent-soft text-white text-sm font-bold tracking-wide shadow-lg hover:-translate-y-0.5 transition-transform duration-200">Add Commission</button>
                    <a href="{{ route('status') }}" class="inline-flex items-center justify-center px-5 py-3 rounded-lg border border-slate-300 text-home-ink text-sm font-bold tracking-wide hover:bg-slate-50 transition-colors duration-200">Cancel</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
