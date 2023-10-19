<x-layout>

    @auth


        <h1>Welcome</h1>

        
    @else
        <main class="min-h-screen flex flex-1 flex-col items-center justify-center max-w-6xl">
            <div class="space-y-6 transform -translate-y-20">
                <div class="flex flex-col gap-2 items-center">
                    <p class="font-bold text-4xl">Welcome to</p>
                    <p class="font-bold text-6xl">JobStack</p>
                </div>

                <div>
                    <p class="text-center ">Please <a href="/register"
                            class="font-bold text-blue-500 hover:text-blue-600">register</a> or <a href="/login"
                            class="font-bold text-blue-500 hover:text-blue-600">login</a> to start collecting JobStacks!</p>
                </div>
            </div>
        </main>


    @endauth

    <x-footer />


</x-layout>
