<x-layout>

    <section class="flex">

        <main class="flex flex-col items-center flex-1">
            <h1 class="self-center font-bold text-xl pt-6 pb-4">Register!</h1>
            <form id="register-form" method="POST" action="/register" class="flex flex-col items-center gap-16 w-full">
                @csrf
                <div id="register-form-inputs" class="relative flex flex-col gap-6 w-full max-w-md">
                    <input type="text" id="name" name="name" placeholder="Name*" required class="flex-1 px-4 py-2 border-2 border-gray-100 rounded-sm focus:outline-blue-500" />
                    <input type="text" id="username" name="username" placeholder="Username*" required class="flex-1 px-4 py-2 border-2 border-gray-100 rounded-sm focus:outline-blue-500" />
                    <input type="email" id="email" name="email" placeholder="Email*" required class="flex-1 px-4 py-2 border-2 border-gray-100 rounded-sm focus:outline-blue-500" />
                    <input type="password" id="password" name="password" placeholder="Password*" required class="flex-1 px-4 py-2 border-2 border-gray-100 rounded-sm focus:outline-blue-500" />
                    <input type="password" id="password-confirm" name="password_confirmation" placeholder="Confirm password*" required class="flex-1 px-4 py-2 border-2 border-gray-100 rounded-sm focus:outline-blue-500" />
                    <div id="error-container" class="absolute -bottom-4"></div>
                </div>
                <button id="register-form-submit" type="submit" class="w-full max-w-md bg-blue-500 text-white py-2 px-4 rounded-md">Submit</button>
            </form>  
            
        </main>

    </section>

</x-layout>


