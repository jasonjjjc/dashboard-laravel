<x-layout>

    <section class="flex-1 flex flex-col justify-center">
        <div class="flex flex-col items-center py-20">

            <h1 class="text-center font-bold text-xl pb-8">Register</h1>

            <form id="register-form" method="POST" action="/register" class="flex flex-col items-center gap-16 w-full">
                @csrf
                <div id="register-form-inputs" class="relative flex flex-col gap-6 w-full max-w-md">
                    
                    
                    <input type="text" id="name" name="name" placeholder="Name*" value="{{ old('name') }}"
                        required class="flex-1 px-4 py-2 rounded-sm border border-blue-500 focus:outline-blue-500" />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <input type="text" id="username" name="username" placeholder="Username*"
                        value="{{ old('username') }}" required
                        class="flex-1 px-4 py-2 rounded-sm border border-blue-500 focus:outline-blue-500" />
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <input type="email" id="email" name="email" placeholder="Email*" value="{{ old('email') }}"
                        required class="flex-1 px-4 py-2 rounded-sm border border-blue-500 focus:outline-blue-500" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <input type="password" id="password" name="password" placeholder="Password*" required
                        class="flex-1 px-4 py-2 rounded-sm border border-blue-500 focus:outline-blue-500" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <input type="password" id="password-confirm" name="password_confirmation"
                        placeholder="Confirm password*" required
                        class="flex-1 px-4 py-2 rounded-sm border border-blue-500 focus:outline-blue-500" />
                    <div id="error-container" class="absolute top-full"></div>
                </div>
                <button id="register-form-submit" type="submit"
                    class="w-full max-w-md bg-blue-500 text-white py-2 px-4 rounded-md">Submit</button>
            </form>
        </div>
    </section>

</x-layout>
