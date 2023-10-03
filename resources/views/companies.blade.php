<x-layout>
    <div class="px-6 flex flex-1 flex-col gap-6">

        @foreach ($companies as $company)
        <div class="relative text-white bg-grey rounded-md transform hover:-translate-y-1 hover:shadow-2xl transition-transform duration-200 ease-in-out">
            <!-- Adding some exaggerated styles to the category tag to make it easier to click it on small screens -->
            <a href="/categories/{{ $company->category->slug }}" class="absolute -top-1 -right-2 p-4">
                <p class="text-sm py-1 px-2 rounded-md bg-black text-white hover:text-red-400">{{ $company->category->name }}</p>
            </a>
            <a href="/" class="absolute top-56 left-2 p-2">
                <p class="fill-black p-1 rounded-full bg-white hover:bg-red-400">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="pl-1">
                        <title>play3</title>
                        <path d="M6 4l20 12-20 12z"></path>
                    </svg>
                </p>
            </a>
            <a href="/companies/{{ $company->slug }}">
                <div class="flex flex-col h-72 shadow-xl group">
                    <h1 class="py-3 px-6 text-xl rounded-tl-md rounded-tr-md group-hover:text-red-400">
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