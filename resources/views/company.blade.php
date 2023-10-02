<x-layout>

    <div class="flex flex-1 flex-col px-6">
        <article class="flex flex-col border border-gray-100 rounded-md shadow-md">
            <div class="relative flex flex-col gap-6 pb-12 border border-gray-100 rounded-md">
                <h1 class="py-3 px-6 bg-blue-500 text-white text-xl rounded-tl-md rounded-tr-md">
                    <a href="/companies/{{ $company->id }}">{{ $company->name }}</a>
                </h1>
                <!-- Adding some exaggerated styles to the category tag to make it easier to click it on small screens -->
                <a href="/categories/{{ $company->category->slug }}" class="absolute -top-1 -right-2 p-4 group">
                    <p class="bg-gray-100 text-blue-500 text-sm py-1 px-2 rounded-md hover:bg-blue-600 hover:text-white">{{ $company->category->name }}</p>
                </a>
                <div class="px-3 flex flex-col gap-6">
                    <h2 class="font-bold">Email:</h2>
                    <p class="p-2 border border-gray-100 overflow-hidden">{{ $company->email }}</p>
                    <h2 class="font-bold">Website:</h2>
                    <p class="p-2 border border-gray-100 overflow-hidden">{{ $company->website }}</p>
                    <h2 class="font-bold">Updated:</h2>
                    <p class="p-2 border border-gray-100 overflow-hidden">{{ $company->updated_at }}</p>
                    <h2 class="font-bold">Created:</h2>
                    <p class="p-2 border border-gray-100 overflow-hidden">{{ $company->created_at }}</p>
                </div>
            </div>
        </article>
        <a href="/" class="mt-6 py-2 px-6 bg-blue-500 text-white w-fit rounded-md hover:bg-blue-600">Home</a>
    </div>

</x-layout>