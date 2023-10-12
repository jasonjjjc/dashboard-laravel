@props(['employees', 'companies', 'currentCompany', 'user'])

<x-layout>
    <x-header :companies="$companies" :currentCompany="isset($currentCompany) ? $currentCompany : null" :user="$user"></x-header>



    <main class="flex flex-col items-center max-w-6xl mt-6 lg:mt-20">
        @if (isset($employees) ? $employees->count() : null)
            <x-employees-grid :employees="$employees"></x-employees-grid>

            {{ $employees->links() }}
        @else
            <p class="text-center">No employees yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
