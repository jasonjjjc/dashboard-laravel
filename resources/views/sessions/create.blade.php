<x-layout>
    <section class="w-full flex flex-col">

        <main class="flex flex-col items-center flex-1">
            <h1 class="self-center font-bold text-xl pt-6 pb-4">Login</h1>
        </main>

        <form id="login-form" method="POST" action="/sessions" class="flex flex-col items-center gap-16 w-full">
            @csrf
            <div id="register-form-inputs" class="relative flex flex-col gap-10 w-full max-w-md">
                <div class="relative">
                    <input type="email" id="email" name="email" placeholder="Email*" value="{{ old('email') }}"
                        required class="w-full px-4 py-2 border border-blue-500 rounded-sm focus:outline-blue-500" />
                </div>
                <div class="relative">
                    <input type="password" id="password" name="password" placeholder="Password*" required
                        class="w-full px-4 py-2 border border-blue-500 rounded-sm focus:outline-blue-500" />
                </div>

                @if ($errors->any())
                    <p class="absolute top-full text-red-500 text-xs mt-6">{{ $errors->first() }}</p>
                @endif

            </div>
            <button id="register-form-submit" type="submit"
                class="w-full max-w-md bg-blue-500 text-white py-2 px-4 rounded-md">Login</button>
        </form>

    </section>
</x-layout>