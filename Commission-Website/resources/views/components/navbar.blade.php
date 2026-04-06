<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=DynaPuff:wght@400..700&family=Lobster&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<div id="navbar" class= "flex items-center justify-between rounded-full mt-10 mr-5 ml-5 p-8 text-violet-950 " >
    <div> 
        <a id= "home" class=" pt-2 " href="{{ route('home') }}"> Home </a>
        <a id= "portfolio" class="pt-2"  href=" {{ route ('portfolio') }}"> Portfolio </a>
    </div>
    <div> 
            <a id=logo class="pt-2 align-middle"> 
                <img src="" alt="logo">   
            </a>
    </div>
    <div> 
        <a id= "contact" class="text-white bg-violet-950 p-3 rounded-full" href="{{ route ('contact') }}"> Contact Me </a>
    </div>
    
    
    
    
</div>