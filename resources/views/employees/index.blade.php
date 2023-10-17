@props(['employees', 'companies', 'currentCompany', 'user'])

<x-layout>

    @auth
        <div class="w-full flex flex-col items-center lg:flex-row lg:items-start lg:gap-8">
            <x-header :companies="$companies" :currentCompany="isset($currentCompany) ? $currentCompany : null" :user="$user"></x-header>

            <main class="flex flex-col w-full lg:items-center  border-b border-gray-100 pb-8">
                <h1 class="text-2xl py-8">
                    All <span class="text-blue-500">{{ $currentCompany ? $currentCompany->name : '' }}</span> Employees
                </h1>
                @if (isset($employees) ? $employees->count() : null)
                    <x-employees-grid :employees="$employees"></x-employees-grid>

                    {{ $employees->links() }}
                @else
                    <p class="text-center">No employees yet. Please check back later.</p>
                @endif
            </main>
        </div>
    @else
        <main class="flex flex-1 flex-col items-center justify-center max-w-6xl">
            <div class="space-y-16">
                <div class="flex flex-col gap-2 items-center">
                    <p class="font-bold text-4xl">Welcome to</p>
                    <p class="font-bold text-6xl">JobStack</p>
                </div>

                <div>
                    <p>Please <a href="/register" class="font-bold text-blue-500">register</a> or <a href="/login"
                            class="font-bold text-blue-500">login</a> to start collecting JobStacks!</p>
                </div>
            </div>
        </main>



    @endauth

</x-layout>
