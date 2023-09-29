<x-layout>
    <div class="px-6 flex flex-1 flex-col gap-6">

        @foreach ($companies as $company)
        <a href="/companies/{{ $company->id }}">
            <div class="flex flex-col items-center border border-gray-100 rounded-md h-72 shadow-md">
                <h1 class="flex w-full justify-center py-3 px-6 bg-green-900 text-white text-xl rounded-tl-md rounded-tr-md">
                    {{ $company->name }}
                </h1>
                <div class="flex items-center h-full">
                    <img src="{{ $company->logo }}" class="w-32" />
                </div>
            </div>
        </a>
        @endforeach
    </div>
</x-layout>