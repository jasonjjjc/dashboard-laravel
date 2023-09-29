<x-layout>
    <div class="p-6 flex flex-col gap-6">

        @foreach ($companies as $company)
        <div class="flex flex-col border border-gray-100 rounded-sm">
            <h1 class="flex">
                <a href="/companies/{{ $company->slug }}" class="w-full py-3 px-6 bg-green-400 text-white rounded-tl-sm rounded-tr-sm">{{ $company->title }}</a>
            </h1>
            <p class="p-6">{{ $company->excerpt }}</p>
        </div>
        @endforeach
    </div>
</x-layout>