@props(['employees', 'companies', 'currentCompany', 'user'])

<x-layout>

    @auth
        <div class="w-full flex flex-col items-center lg:flex-row lg:items-start lg:gap-8">
            
            <x-header :companies="$companies" :currentCompany="isset($currentCompany) ? $currentCompany : null" :user="$user"></x-header>

            <main class="flex flex-col w-full items-center pb-8">
                
                <div class="flex items-center justify-between w-full max-w-2xl">
                    <h1 class="text-2xl py-8">
                        All <span class="text-blue-500">{{ $currentCompany ? $currentCompany->name : '' }}</span> Employees
                    </h1>
                    @auth
                        @if (auth()->user()->is_admin == 1)
                            <a href="admin/employees/create"
                                class="py-1 px-3 bg-blue-500 h-fit w-fit rounded-md text-sm text-white hover:bg-blue-600 hover:text-blue-300">Add</a>
                        @endif
                    @endauth

                </div>

                @if (isset($employees) ? $employees->count() : null)
                    <x-employees-grid :employees="$employees"></x-employees-grid>

                    {{ $employees->links() }}
                    <div class="h-12 w-full"></div> {{-- Spacer --}}
                
                    @else
                    <p class="text-center">No employees yet. Please check back later.</p>
                @endif

                <x-footer />

            </main>


        </div>
    @else
        <main class="min-h-screen flex flex-1 flex-col items-center justify-center max-w-6xl">
            <div class="space-y-6 transform -translate-y-20">
                <div class="flex flex-col gap-2 items-center">
                    <p class="font-bold text-4xl">Welcome to</p>
                    <p class="font-bold text-6xl">JobStack</p>
                </div>

                <div>
                    <p class="text-center ">Please <a href="/register" class="font-bold text-blue-500 hover:text-blue-600">register</a> or <a
                            href="/login" class="font-bold text-blue-500 hover:text-blue-600">login</a> to start collecting JobStacks!</p>
                </div>
            </div>
        </main>

        <x-footer />


    @endauth



</x-layout>
