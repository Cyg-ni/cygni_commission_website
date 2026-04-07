@php
    $navBase = 'relative no-underline font-semibold text-sm px-3 py-2 rounded-full transition-all duration-200';
    $navGlow = 'after:content-[\'\'] after:absolute after:left-2 after:right-2 after:bottom-1 after:h-0.5 after:rounded-full after:bg-home-accent after:shadow-[0_0_10px_rgba(29,78,216,0.9)] after:origin-center after:transition-transform after:duration-300';
@endphp

<nav class="w-full max-w-4xl mx-auto rounded-full mt-4 mb-0 px-5 py-3 border border-white/75 bg-white/75 backdrop-blur shadow-lg grid grid-cols-3 items-center max-md:grid-cols-1 max-md:rounded-2xl max-md:gap-2">
    <div class="flex gap-1 justify-self-start max-md:w-full max-md:flex-wrap">
        <a href="{{ route('home') }}" class="{{ $navBase }} {{ $navGlow }} {{ request()->routeIs('home') ? 'text-home-accent bg-blue-500/14 after:scale-x-100' : 'text-slate-700 hover:text-home-accent hover:bg-blue-500/16 after:scale-x-0 hover:after:scale-x-100' }}">Home</a>
        <a href="{{ route('portfolio') }}" class="{{ $navBase }} {{ $navGlow }} {{ request()->routeIs('portfolio') ? 'text-home-accent bg-blue-500/14 after:scale-x-100' : 'text-slate-700 hover:text-home-accent hover:bg-blue-500/16 after:scale-x-0 hover:after:scale-x-100' }}">Portfolio</a>
        <a href="{{ route('tos') }}" class="{{ $navBase }} {{ $navGlow }} {{ request()->routeIs('tos') ? 'text-home-accent bg-blue-500/14 after:scale-x-100' : 'text-slate-700 hover:text-home-accent hover:bg-blue-500/16 after:scale-x-0 hover:after:scale-x-100' }}">TOS</a>
    </div>

    <a class="justify-self-center max-md:order-first" aria-label="Cygni Home">
        <img src="{{ asset('images/logo.png') }}" alt="Cygni logo" class="h-14 w-auto rounded-full block">
    </a>

    <div class="flex gap-1 justify-self-end max-md:w-full max-md:justify-start max-md:flex-wrap">
        <a href="{{ route('pricing') }}" class="{{ $navBase }} {{ $navGlow }} {{ request()->routeIs('pricing') ? 'text-home-accent bg-blue-500/14 after:scale-x-100' : 'text-slate-700 hover:text-home-accent hover:bg-blue-500/16 after:scale-x-0 hover:after:scale-x-100' }}">Pricing</a>
        <a href="{{ route('status') }}" class="{{ $navBase }} {{ $navGlow }} {{ request()->routeIs('status') ? 'text-home-accent bg-blue-500/14 after:scale-x-100' : 'text-slate-700 hover:text-home-accent hover:bg-blue-500/16 after:scale-x-0 hover:after:scale-x-100' }}">Status</a>
        <a href="{{ route('contact') }}" class="{{ $navBase }} {{ $navGlow }} {{ request()->routeIs('contact') ? 'text-home-accent bg-blue-500/14 after:scale-x-100' : 'text-slate-700 hover:text-home-accent hover:bg-blue-500/16 after:scale-x-0 hover:after:scale-x-100' }}">Contact</a>
    </div>
</nav>