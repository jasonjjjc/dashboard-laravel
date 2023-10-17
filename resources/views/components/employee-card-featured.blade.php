@props(['employee'])


<article class="py-4 w-full">
    <div
        class="relative flex transition-colors duration-300 border border-gray-100 hover:bg-gray-100 rounded-xl">
        <a href="/employees/{{ $employee->slug }}" class="flex-1 p-4">

            <h1 class="text-md font-semibold">
                {{ $employee->name }}
            </h1>

        </a>
        <h2 class="absolute top-2 right-2 flex justify-center md:w-40">
            <a href="?company={{ $employee->company->slug }}"
                class="w-full text-center text-xs rounded-full border border-blue-400 text-blue-400 px-2 py-1 uppercase">
                {{ $employee->company->name }}
            </a>
        </h2>
    </div>


</article>
