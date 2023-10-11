<x-dropdown :companies="$companies" :currentCompany="isset($currentCompany) ? $currentCompany : null">

    <x-slot name="trigger">
        <button
            class="p-3 w-full flex justify-between text-start">{{ isset($currentCompany) ? $currentCompany->name : 'All Companies' }}

            <x-down-arrow class="absolute pointer-events-none"></x-down-arrow>

        </button>
    </x-slot>


    <x-dropdown-item href="/" class="{{ isset($currentCompany) ? '' : 'bg-blue-500 text-white' }}">All
        Companies</x-dropdown-item>

    @foreach ($companies as $company)
        <x-dropdown-item href="/?company={{ $company->slug }}&{{ http_build_query(request()->except('company')) }}" :active="isset($currentCompany) && $currentCompany->is($company)">{{ ucwords($company->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
