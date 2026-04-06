<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=DynaPuff:wght@400..700&family=Lobster&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex w-screen h-screen overflow-hidden">
        <div class="h-screen">
            <img class="h-screen rounded-r-full animate-slide-in-left" src="{{asset('images/backgroundbanner.jpg')}}" alt="bannertext"> 
        </div>
        <div class="h-screen flex flex-col items-center justify-center text-center ml-40 overflow-hidden animate-slide-in-right" >
            <p class=""> Welcome to Cygni's Portfolio </p>
            <a href="{{ route('home') }}" class="button-link"> See the rest of my work </a>
        </div>
    </div>

</body>
</html>