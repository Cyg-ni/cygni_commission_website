<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Cygni</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 min-h-screen font-sans text-home-ink bg-linear-to-b from-slate-50 to-home-bg">
    <x-navbar/>

    <main class="w-full max-w-xl mx-auto mt-6 px-4 md:px-6 pb-10">
        <section class="rounded-3xl p-6 md:p-8 bg-white/90 border border-slate-400/20 shadow-xl">
            <p class="m-0 text-xs font-bold tracking-wider text-home-accent uppercase">Owner Access</p>
            <h1 class="mt-3 mb-2 font-serif text-4xl leading-tight">Sign In</h1>
            <p class="m-0 text-home-ink-soft">If you're not Cygni, please get outta here go back to commissioning me thanks</p>

            @if ($errors->any())
                <div class="mt-6 rounded-2xl border border-red-300 bg-red-50 text-red-700 px-4 py-3 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login.store') }}" method="POST" class="mt-6 space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-semibold">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold">Password</label>
                    <input id="password" name="password" type="password" required class="mt-2 w-full rounded-xl border border-slate-300 px-3 py-2.5 bg-white">
                </div>

                <label class="inline-flex items-center gap-2 text-sm text-home-ink-soft">
                    <input type="checkbox" name="remember" class="rounded border-slate-300 text-home-accent focus:ring-home-accent/50">
                    Remember me
                </label>

                <div>
                    <button type="submit" class="inline-flex items-center justify-center px-5 py-3 rounded-lg bg-linear-to-br from-home-accent to-home-accent-soft text-white text-sm font-bold tracking-wide shadow-lg hover:-translate-y-0.5 transition-transform duration-200">Log In</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
