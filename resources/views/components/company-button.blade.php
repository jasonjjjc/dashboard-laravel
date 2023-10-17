@props(['company'])

<a href="/?company={{ $company->slug }}"
    class="w-fit px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">
    {{ $company->name }}
</a>