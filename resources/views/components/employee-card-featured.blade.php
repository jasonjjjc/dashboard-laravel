@props(['employee'])

<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-company-button :company="$employee->company" />
                </div>

                <div class="mt-12">
                    <div class="flex items-center gap-12">
                        <h1 class="text-5xl">
                            <a href="/employees/{{ $employee->slug }}">{{ $employee->name }}</a>
                        </h1>
                        <p>
                            <a href="mailto:{{ $employee->email }}"
                                class="w-fit px-3 py-1 border border-red-300 text-sm rounded-full text-red-300 uppercase font-semibold">email</a>
                        </p>
                    </div>
                    <span class="mt-2 block text-gray-400">
                        Added <time>{{ $employee->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2">
                <p>
                    {{--  If the current page url looks like /companies/*** then display the company description, else display the company summary  --}}
                    @if (request()->is('employees/*'))
                        {{ $employee->description }}
                    @else
                        {{ $employee->summary }}
                    @endif
                </p>
            </div>

            <footer class="flex flex-col gap-16 mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?user={{ $employee->user->name }}">{{ $employee->user->name }}</a> 
                        </h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>
                <div class="flex items-center gap-36">
                    <a href="/employees/{{ $employee->slug }}"
                        class="transition-colors duration-300 text-lg font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read
                        More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
