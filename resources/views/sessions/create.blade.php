<x-layout>

    <section class="flex-1 flex flex-col justify-center">

        <div class="flex flex-col items-center py-20">
            <header class="flex flex-col justify-center items-center">
                <h1 class="self-center font-bold text-xl pb-4">Login</h1>
            </header>

            <form id="login-form" method="POST" action="/sessions" class="flex flex-col items-center gap-16 w-full ">
                @csrf
                <div id="register-form-inputs" class="relative flex flex-col gap-10 w-full max-w-md">

                        <x-form-input type="email" id="email" name="email" placeholder="Email*" required />
                    

                        <x-form-input type="password" id="password" name="password" placeholder="Password*" required />

                </div>
                <button id="register-form-submit" type="submit"
                    class="w-full max-w-md bg-blue-500 text-white py-2 px-4 rounded-md">Login</button>
            </form>
        </div>
    </section>

</x-layout>
