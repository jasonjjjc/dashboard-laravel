<!doctype html>

<head>
    <title>Laravel From Scratch Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    
</head>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8 min-h-screen flex flex-col justify-between items-center">
        <nav class="flex flex-col md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>
        </nav>

        {{ $slot }}

        <x-footer/>
    </section>

    @if ( session()->has('success') )
        
        <x-flash-message :message="session('success')"/>
        
    @endif
</body>