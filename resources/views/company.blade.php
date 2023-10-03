<x-layout>

    <div class="flex flex-1 flex-col px-6">
        <article class="flex flex-col rounded-md shadow-md">
            <div class="relative flex flex-col gap-6 pb-12 rounded-md bg-grey">
                <h1 class="py-3 px-6 text-xl rounded-tl-md rounded-tr-md">{{ $company->name }}</h1>
                <!-- Adding some exaggerated styles to the category tag to make it easier to click it on small screens -->
                <a href="/categories/{{ $company->category->slug }}" class="absolute -top-1 -right-2 p-4 group">
                    <p class="text-sm py-1 px-2 rounded-md bg-black group-hover:text-red-400">{{ $company->category->name }}</p>
                </a>
                <div class="px-3 flex flex-col gap-6">
                    <h2 class="font-bold">Email:</h2>
                    <p class="p-2 border border-black overflow-hidden">{{ $company->email }}</p>
                    <h2 class="font-bold">Website:</h2>
                    <p class="p-2 border border-black overflow-hidden">{{ $company->website }}</p>
                    <h2 class="font-bold">Updated:</h2>
                    <p class="p-2 border border-black overflow-hidden">{{ $company->updated_at }}</p>
                    <h2 class="font-bold">Created:</h2>
                    <p class="p-2 border border-black overflow-hidden">{{ $company->created_at }}</p>
                </div>
            </div>
        </article>
        <a href="/" class="mt-6 bg-grey py-2 px-6 w-fit rounded-md hover:text-red-400">Home</a>
    </div>

</x-layout>