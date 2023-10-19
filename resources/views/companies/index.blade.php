@props(['employees', 'companies', 'currentCompany', 'user'])

<x-layout>

    @auth
        <div class="w-full flex flex-col items-center lg:flex-row lg:items-start lg:gap-8">
            
            <x-header :companies="$companies"></x-header>

            <main class="flex flex-col w-full items-center pb-8">
                
                <div class="flex items-center justify-between w-full max-w-2xl">
                    <h1 class="text-2xl py-8">
                        All Companies
                    </h1>
                    @auth
                        @if (auth()->user()->is_admin == 1)
                            <a href="admin/employees/create"
                                class="py-1 px-3 bg-blue-500 h-fit w-fit rounded-md text-sm text-white hover:bg-blue-600 hover:text-blue-300">Add</a>
                        @endif
                    @endauth

                </div>

                @if (isset($companies) ? $companies->count() : null)
                    <x-index-grid :companies="$companies"></x-index-grid>

                    {{ $companies->links() }}
                    <div class="h-12 w-full"></div> {{-- Spacer --}}
                
                    @else
                    <p class="text-center">No companies yet. Please check back later.</p>
                @endif

                <x-footer />

            </main>


        </div>
    
    @endauth



</x-layout>
