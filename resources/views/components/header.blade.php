<header class="max-w-xl mx-auto mt-10 text-center">
    <h1 class="text-4xl">
        All <span class="text-blue-500">{{ $currentCompany ? $currentCompany->name : '' }}</span> Employees
    </h1>

    <h2 class="inline-flex mt-2">by {{ $user->name }}</h2>

    <div class="text-sm mt-8">
        @if ($currentCompany)
            {{ $currentCompany->summary }}
        @else
            <p>Select a company to get started learning about the employees at all the companies in our database!</p>
        @endif
    </div>
    
    

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
           <x-company-dropdown :currentCompany="isset($currentCompany) ? $currentCompany : null" />
        </div>

        <!-- Other Filters -->
        {{-- <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-3 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <x-icon name="down-arrow" class="mr-3"></x-icon>
        </div> --}}

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl p-2">
            <form method="GET" action="/" class="w-full text-start">

                @if (request('company')) 

                    <input type="hidden" name="company" value="{{ request('company') }}">

                @endif

                <input type="text" name="search" placeholder="Find something"
                    class="bg-transparent placeholder-blue-500 font-semibold text-sm w-full p-1 focus:outline-blue-500"
                    value="{{ request('search') }}">    
            </form>
        </div>
    </div>
</header>
