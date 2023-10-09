<div x-data="{ show: false }" @click.away="show = false" class="w-full flex lg:w-48 items-center">
    <button @click="show = ! show"
        class="w-full py-2 pl-3 pr-9 text-start text-sm font-semibold">{{ isset($currentCompany) ? $currentCompany->name : 'All Companies' }}

        <svg class="inline-flex transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
            height="22" viewBox="0 0 22 22">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                </path>
                <path fill="#222"
                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
            </g>
        </svg>

    </button>


    <div x-show="show" class="w-full bg-gray-100 p-2 absolute top-10 z-10 rounded-xl"
        style="display: none">
        
        <a href="/"
            class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white rounded-sm">All</a>

        @foreach ($companies as $company)
            <a href="/companies/{{ $company->slug }}"
                class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 
                hover:text-white focus:bg-blue-500 focus:text-white rounded-sm
                {{ isset($currentCompany) && $currentCompany->id === $company->id ? 'bg-blue-500 text-white' : '' }}">{{ $company->name }}</a>
        @endforeach

    </div>
</div>