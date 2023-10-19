<x-layout>

    @auth


        <main class="min-h-screen flex flex-1 flex-col items-center justify-center max-w-6xl">
            <div class="space-y-6 transform -translate-y-20">
                <div class="flex flex-col gap-2 items-center">
                    <p class="font-bold text-4xl">Start your</p>
                    <p class="font-bold text-6xl">JobStack</p>
                </div>

                <div>
                    <p class="text-center ">Browse our collection of <a href="/employees"
                            class="font-bold text-blue-500 hover:text-blue-600">employees</a> or <a href="/companies"
                            class="font-bold text-blue-500 hover:text-blue-600">companies</a>!</p>
                </div>
            </div>
        </main>
    @else

            <main class="flex flex-1 flex-col items-center justify-center w-full">
                <div class="max-w-6xl space-y-6">
                    <div class="flex flex-col gap-2 items-center mt-6">
                        <p class="font-bold text-4xl">Welcome to</p>
                        <p class="font-bold text-6xl">JobStack</p>
                    </div>

                    <div>
                        <p class="text-center ">Please <a href="/register"
                                class="font-bold text-blue-500 hover:text-blue-600">register</a> or <a href="/login"
                                class="font-bold text-blue-500 hover:text-blue-600">login</a> to start browsing JobStacks!
                        </p>
                    </div>
                </div>
            </main>


    @endauth



</x-layout>
