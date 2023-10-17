<x-dropdown :companies="$companies" :currentCompany="isset($currentCompany) ? $currentCompany : null">

    <x-slot name="trigger">
        <button
            class="pl-3 py-2 pr-2 w-full flex justify-between text-blue-500">{{ isset($currentCompany) ? $currentCompany->name : 'Filter by company' }}

            <x-down-arrow class="pointer-events-none"></x-down-arrow>

        </button>
    </x-slot>


    <x-dropdown-item href="/?{{ http_build_query(request()->except('company', 'page')) }}" class="{{ isset($currentCompany) ? '' : 'bg-blue-500 text-white' }}">All
        Companies</x-dropdown-item>

    @foreach ($companies as $company)
        <x-dropdown-item href="/?company={{ $company->slug }}&{{ http_build_query(request()->except('company', 'page')) }}" :active="isset($currentCompany) && $currentCompany->is($company)">{{ ucwords($company->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
