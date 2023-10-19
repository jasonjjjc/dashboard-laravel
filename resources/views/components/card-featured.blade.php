@if (isset($employee))

@props(['employee'])


<article class="w-full flex justify-center">
    <div class="relative w-full max-w-2xl">
        <a href="/employees/{{ $employee->slug }}">

            <h1
                class="text-md font-semibold transition-colors duration-300 border border-gray-100 hover:bg-gray-100 rounded-md p-3">
                {{ $employee->name }}
            </h1>

        </a>
        <h2 class="absolute top-2 right-2 flex justify-center md:w-40">
            <x-link-button :company="$employee->company" />

        </h2>
    </div>


</article>

@else

@props(['company'])

<article class="w-full flex justify-center">
    <div class="relative w-full max-w-2xl">
        <a href="/employees/{{ $company->slug }}">

            <h1
                class="text-md font-semibold transition-colors duration-300 border border-gray-100 hover:bg-gray-100 rounded-md p-3">
                {{ $company->name }}
            </h1>

        </a>
        <h2 class="absolute top-2 right-2 flex justify-center md:w-40">
            <x-link-button :website="$company->website" />

        </h2>
    </div>


</article>

@endif