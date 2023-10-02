<x-layout>
    <div class="px-6 flex flex-1 flex-col gap-6">

        @foreach ($companies as $company)
        <div class="relative">
            <!-- Adding some exaggerated styles to the category tag to make it easier to click it on small screens -->
            <a href="/" class="absolute -top-1 -right-2 p-4 group">
                <p class="bg-gray-100 text-blue-500 text-sm py-1 px-2 rounded-md group-hover:underline">{{ $company->category->name }}</p>
            </a>
            <a href="/companies/{{ $company->slug }}">
                <div class="flex flex-col border border-gray-100 rounded-md h-72 shadow-md">
                    <h1 class="py-3 px-6 bg-blue-500 text-white text-xl rounded-tl-md rounded-tr-md">
                        {{ $company->name }}
                    </h1>
                    <div class="flex items-center justify-center h-full w-full">
                        <img src="{{ $company->logo }}" class="w-32" />
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</x-layout>