<x-layout>

        <main class="flex flex-1 flex-col items-center justify-center w-full">
            <div class="space-y-6 py-20">
                <div class="flex flex-col gap-2 items-center">
                    <p class="font-bold text-4xl">{{ auth()->check() ? "Start your" : "Welcome to" }}</p>
                    <p class="font-bold text-6xl">JobStack</p>
                </div>

                <div>
                    <p class="text-center">
                        @if(auth()->check())
                            Browse our collection of <a href="/employees" class="font-bold text-blue-500 hover:text-blue-600">employees</a> or <a href="/companies" class="font-bold text-blue-500 hover:text-blue-600">companies</a>
                        @else
                            Please <a href="/register" class="font-bold text-blue-500 hover:text-blue-600">register</a> or <a href="/login" class="font-bold text-blue-500 hover:text-blue-600">login</a> to start browsing JobStacks!
                        @endif
                    </p>
                    
                </div>
            </div>
        </main>

</x-layout>
