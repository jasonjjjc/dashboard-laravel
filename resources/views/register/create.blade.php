<x-layout>

    <section class="flex-1 flex flex-col justify-center">
        <div class="flex flex-col items-center py-20">

            <h1 class="text-center font-bold text-xl pb-4">Register</h1>

            <form id="register-form" method="POST" action="/register" class="flex flex-col items-center w-full">

                @csrf

                <div id="register-form-inputs" class="relative flex flex-col gap-6 w-full max-w-md py-6">

                    <x-form-input type="text" id="name" name="name" placeholder="Name"
                        value="{{ old('name') }}" required />

                    <x-form-input type="text" id="username" name="username" placeholder="Username"
                        value="{{ old('username') }}" required />

                    <x-form-input type="text" id="email" name="email" placeholder="Email"
                        value="{{ old('email') }}" required />

                    <x-form-input type="password" id="password" name="password" placeholder="Password" required />

                    <x-form-input type="password" id="password-confirm" name="password_confirmation"
                        placeholder="Confirm password" required />

                    <div id="error-container" class="py-2">
                        @if ($errors->any())
                            <div class="bg-red-500 text-white rounded-md">
                                <h2 class="font-bold text-lg">Error</h2>
                                <ul class="list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li class="text-sm">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                </div>

                <button id="register-form-submit" type="submit"
                    class="w-full max-w-md bg-blue-500 text-white py-2 px-4 rounded-md">Submit</button>
            </form>
        </div>
    </section>

</x-layout>
