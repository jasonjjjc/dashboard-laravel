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
    <section class="px-6 py-4 min-h-screen flex flex-col justify-between items-center">
        <nav class="flex w-full items-center justify-between">
            <div>
                <a href="/">
                    <img src="/Favicon.ico" alt="Laracasts Logo" width="80" height="160">
                </a>
            </div>
            <div class="flex gap-4">

                @auth
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="text-xs font-bold uppercase py-2 px-6 border border-blue-500 text-blue-500 rounded-md">Log Out <span class="hidden lowercase text-gray-700 lg:block">{{ auth()->user()->username }}</span></button>
                    </form>
                @else
                    <a href="/register"
                        class="text-xs text-center font-bold uppercase p-2 text-blue-500">Register</a>
                    <a href="/login"
                        class="text-xs text-center font-bold uppercase p-2 text-blue-500">Log
                        In</a>
                @endauth
            </div>
        </nav>

        {{ $slot }}

        <x-footer />
    </section>

    @if (session()->has('success'))
        <x-flash-message :message="session('success')" />
    @endif
</body>
