@if (isset($company))
    @props(['company'])

    <a href="/?company={{ $company->slug }}"
        class="w-fit px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold hover:text-blue-600 hover:border-blue-600">
        {{ $company->name }}
    </a>
@else
    @props(['website'])

    <a href="{{ $website }}"
        class="w-fit px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs font-semibold hover:text-blue-600 hover:border-blue-600">
       Site
    </a>
@endif
