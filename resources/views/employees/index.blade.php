@props(['employees', 'companies', 'currentCompany', 'user'])

<x-layout>

    @auth
        <div class="w-full flex flex-col items-center lg:flex-row lg:items-start lg:gap-8">

            <x-header :companies="$companies" :currentCompany="isset($currentCompany) ? $currentCompany : null" for="employees"></x-header>

            <main class="flex flex-col w-full items-center pb-8">

                <div class="flex items-center justify-between w-full max-w-2xl">
                    <h1 class="text-2xl py-8">
                        All <span class="text-blue-500">{{ $currentCompany ? ucwords($currentCompany->name) : '' }}</span> Employees
                    </h1>
                    @auth
                        @if (auth()->user()->is_admin == 1)
                            <a href="admin/employees/create"
                                class="py-1 px-3 bg-blue-500 h-fit w-fit rounded-md text-sm text-white hover:bg-blue-600 hover:text-blue-300">Add</a>
                        @endif
                    @endauth

                </div>

                @if (isset($employees) ? $employees->count() : null)
                    <x-index-grid :employees="$employees" for="employees"></x-employees-grid>

                        {{ $employees->links() }}
                        <div class="h-12 w-full"></div> {{-- Spacer --}}
                    @else
                        <p class="text-center">No employees yet. Please check back later.</p>
                @endif

            </main>


        </div>

    @endauth



</x-layout>
