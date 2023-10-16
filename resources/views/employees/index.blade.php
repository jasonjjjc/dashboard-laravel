@props(['employees', 'companies', 'currentCompany', 'user'])

<x-layout>

    @auth

        <x-header :companies="$companies" :currentCompany="isset($currentCompany) ? $currentCompany : null" :user="$user"></x-header>



        <main class="flex flex-col items-center max-w-6xl mt-6 lg:mt-20">
            @if (isset($employees) ? $employees->count() : null)
                <x-employees-grid :employees="$employees"></x-employees-grid>

                {{ $employees->links() }}
            @else
                <p class="text-center">No employees yet. Please check back later.</p>
            @endif
        </main>
    @else
        <main class="flex flex-col items-center justify-center max-w-6xl">
            <div class="transform -translate-y-1/2 space-y-16">
                <div class="flex flex-col gap-2 items-center">
                    <p class="font-bold text-4xl">Welcome to</p>
                    <p class="font-bold text-6xl">JobStack</p>
                </div>

                <div>
                    <p>Please <a href="/register" class="font-bold text-blue-500">register</a> or <a href="/login" class="font-bold text-blue-500">login</a> to view our huge collection of companies and their employees.</p>
                </div>
            </div>
        </main>



    @endauth

</x-layout>
