@props(['companies'])

<x-layout>
    <x-header></x-header>


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($companies->count())
            <x-companies-grid :companies="$companies"></x-companies-grid>
        @else
            <p class="text-center">No companies yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
