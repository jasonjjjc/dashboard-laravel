@props(['employees', 'companies', 'currentCompany', 'user'])

<x-layout>
    <x-header :companies="$companies" :currentCompany="isset($currentCompany) ? $currentCompany : null" :user="$user"></x-header>



    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if (isset($employees) ? $employees->count() : null)
            <x-employees-grid :employees="$employees"></x-employees-grid>
        @else
            <p class="text-center">No employees yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
