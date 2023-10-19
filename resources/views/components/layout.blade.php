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
    <section class="px-2 py-4">
        <div class="flex flex-col w-full min-h-screen">

            <nav
                class="flex items-center justify-between border-b border-gray-100 pb-4 text-sm font-semibold text-blue-500">
                <div>
                    <a href="/">
                        <img src="/Favicon.ico" alt="JobStack Logo" width="40" height="80">
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    @auth
                        @if (auth()->user()->is_admin)
                            <div class="py-2 px-4">

                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button class="hover:text-blue-600 focus:text-blue-600">Menu</button>
                                    </x-slot>

                                    <x-dropdown-item href="/admin/employees/create" :active="request()->is('admin/employees/create')">
                                        Add Employee
                                    </x-dropdown-item>

                                    <x-dropdown-item href="/admin/companies/create" :active="request()->is('admin/companies/create')">
                                        Add Company
                                    </x-dropdown-item>

                                </x-dropdown>

                            </div>
                        @endif
                    @endauth

                    <a href="#newsletter" class="hidden md:block whitespace-nowrap py-2 px-4 hover:text-blue-600">
                        Newsletter <span class="hidden md:inline-block">Sign Up</span>
                    </a>

                    @auth
                        <form method="POST" action="/logout">

                            @csrf

                            <button type="submit" class="py-2 px-4 whitespace-nowrap hover:text-blue-600">Log Out</button>

                        </form>
                    @else
                        <a href="/register" class=" text-center p-2 hover:text-blue-600 ">Register</a>
                        <a href="/login" class=" text-center p-2 hover:text-blue-600 ">Login</a>
                    @endauth
                </div>
            </nav>

            <div class="flex flex-col flex-1 px-2">
                {{ $slot }}
            </div>

        </div>



    </section>

    @if (session()->has('success'))
        <x-flash-message success="success" :message="session('success')" />
    @endif
</body>
