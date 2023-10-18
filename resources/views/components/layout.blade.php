<!doctype html>

<head>
    <title>Laravel From Scratch Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>



    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-4 min-h-screen flex flex-col items-center">
        <div class="flex flex-col min-h-screen w-full">
            <nav class="flex items-center justify-between border-b border-gray-100 pb-4">
                <div>
                    <a href="/">
                        <img src="/Favicon.ico" alt="JobStack Logo" width="40" height="80">
                    </a>
                </div>
                <div class="flex gap-4">

                    <a href="#newsletter"
                        class="bg-blue-500 rounded-md text-xs font-semibold text-white uppercase py-2 px-4 flex justify-center items-center">
                        Newsletter <span class="hidden md:inline-block ml-1">Sign Up</span>
                    </a>

                    @auth
                        <form method="POST" action="/logout">
                            @csrf

                            <button type="submit"
                                class="text-xs font-bold uppercase py-2 px-4 border border-blue-500 text-blue-500 rounded-md">Log
                                Out <span
                                    class="hidden lowercase pl-1 text-gray-700 lg:inline-block">{{ auth()->user()->username }}</span>
                            </button>

                        </form>
                    @else
                        <a href="/register" class="text-xs text-center font-bold uppercase p-2 text-blue-500">Register</a>
                        <a href="/login" class="text-xs text-center font-bold uppercase p-2 text-blue-500">Log
                            In</a>
                    @endauth
                </div>
            </nav>
            <div class="flex-1 flex flex-col items-center pb-16">
                {{ $slot }}
            </div>
        </div>

        <x-footer />


    </section>

    @if (session()->has('success'))
        <x-flash-message :message="session('success')" />
    @endif
</body>
