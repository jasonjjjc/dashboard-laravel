<x-layout>
    <div class="px-6 flex flex-1 flex-col gap-6">

        @foreach ($companies as $company)
        <div class="relative rounded-md border-2 border-gray-100 transform hover:-translate-y-1 transition-transform duration-200 ease-in-out">
            <!-- Adding some exaggerated styles to the category tag to make it easier to click it on small screens -->
            <div class="absolute top-8 left-0 -mt-8 flex items-center justify-center h-full w-full">
                <img src="{{ $company->logo }}" class="w-32" />
            </div>
            <a href="/companies/{{ $company->slug }}" class="relative z-10">
                <div class="flex flex-col h-72 shadow-sm shadow-red-300 hover:shadow-md hover:shadow-red-300">
                    <h1 class="py-3 px-6 text-xl rounded-tl-md rounded-tr-md">
                        {{ $company->name }}
                    </h1>
                </div>
            </a>
            <a href="/categories/{{ $company->category->slug }}" class="z-20 absolute -top-1 -right-2 p-4">
                <p class="text-sm py-1 px-2 rounded-md hover:text-red-300">{{ $company->category->name }}</p>
            </a>
            <a href="#" class="z-20 absolute top-56 left-2 p-2 group">
                <p class="fill-black p-1 rounded-full group-hover:fill-red-300">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="pl-1">
                        <title>play3</title>
                        <path d="M6 4l20 12-20 12z"></path>
                    </svg>
                </p>
            </a>
        </div>
        @endforeach
    </div>
</x-layout>