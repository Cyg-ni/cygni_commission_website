<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Cygni</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 min-h-screen font-sans text-home-ink bg-linear-to-b from-slate-50 to-home-bg">
    <x-navbar/>

    <main class="w-full max-w-5xl mx-auto mt-6 px-4 md:px-6 pb-10 grid grid-cols-1 lg:grid-cols-5 gap-4">
        <section class="lg:col-span-2 rounded-3xl p-6 md:p-8 bg-white/90 border border-slate-400/20 shadow-xl">
            <p class="m-0 text-xs font-bold tracking-wider text-home-accent uppercase">Contact</p>
            <h1 class="mt-3 mb-2 font-serif text-4xl leading-tight">Commission Request Form</h1>
            <p class="m-0 text-home-ink-soft leading-relaxed">Please reach out to me via this form if you are interested in contacting me. You can also contact me via my Twitter handle, https://x.com/cygniiiii. </p>

            @if (session('success'))
                <div class="mt-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('warning'))
                <div class="mt-4 rounded-2xl border border-amber-200 bg-amber-50 px-4 py-3 text-sm text-amber-700">
                    {{ session('warning') }}
                </div>
            @endif

            <div class="mt-6 rounded-2xl border border-slate-300/30 bg-slate-50/80 p-4">
                <p class="m-0 text-sm font-semibold text-home-accent">Tip</p>
                <p class="mt-2 mb-0 text-sm text-home-ink-soft">Please compile everything in a Pinterest board or a GoogleDrive for me to peruse. Or you can send the images over in a zip file or just as image stills once I contact you back.</p>
            </div>
        </section>

        <section class="lg:col-span-3 rounded-3xl p-6 md:p-8 bg-white/90 border border-slate-400/20 shadow-xl">
            <form action="{{ route('contact.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @csrf
                <div>
                    <label for="client_name" class="block text-sm font-semibold">Client Name</label>
                    <input id="client_name" name="client_name" type="text" placeholder="Your full name" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="client_email" class="block text-sm font-semibold">Client Email</label>
                    <input id="client_email" name="client_email" type="email" placeholder="you@example.com" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="client_discord" class="block text-sm font-semibold">Discord or Preferred Contact</label>
                    <input id="client_discord" name="client_discord" type="text" placeholder="username#0000" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="commission_type" class="block text-sm font-semibold">Commission Type</label>
                    <select id="commission_type" name="commission_type" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                        <option>Character Illustration</option>
                        <option>Reference Sheet</option>
                        <option>Custom Template</option>
                    </select>
                </div>

                <div>
                    <label for="budget" class="block text-sm font-semibold">Budget Range</label>
                    <input id="budget" name="budget" type="text" placeholder="USD 100-200" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="deadline" class="block text-sm font-semibold">Preferred Deadline</label>
                    <input id="deadline" name="deadline" type="date" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div class="md:col-span-2">
                    <label for="project_brief" class="block text-sm font-semibold">Project Brief</label>
                    <textarea id="project_brief" name="project_brief" rows="5" placeholder="Character details, mood, references, and must-have elements" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white"></textarea>
                </div>

                <div class="md:col-span-2">
                    <label for="notes" class="block text-sm font-semibold">Additional Notes</label>
                    <textarea id="notes" name="notes" rows="3" placeholder="Anything else I should know before quoting" class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white"></textarea>
                </div>

                <div class="md:col-span-2">
                    <button type="submit" class="inline-flex items-center justify-center px-5 py-3 rounded-lg bg-linear-to-br from-home-accent to-home-accent-soft text-white text-sm font-bold tracking-wide shadow-lg hover:-translate-y-0.5 transition-transform duration-200">Submit Commission Inquiry</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>