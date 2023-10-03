<x-layout>
    <div class="flex flex-1 flex-col px-6 gap-6">
        <article class="flex flex-col rounded-md border-2 border-gray-100 shadow-md">
            <div class="relative flex flex-col gap-6 pb-12 rounded-md">
                <h1 class="py-3 px-6 text-xl rounded-tl-md rounded-tr-md">{{ $company->name }}</h1>
                <!-- Adding some exaggerated styles to the category tag to make it easier to click it on small screens -->
                <a href="/categories/{{ $company->category->slug }}" class="absolute -top-1 -right-2 p-4 group">
                    <p class="text-sm py-1 px-2 rounded-md group-hover:text-red-400">{{ $company->category->name }}</p>
                </a>
                <div class="px-3 flex flex-col gap-6">
                    <div class="flex flex-col gap-2">
                        <h2 class="font-bold">Email:</h2>
                        <p class="p-2  overflow-hidden">{{ $company->email }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="font-bold">Website:</h2>
                        <p class="p-2  overflow-hidden">{{ $company->website }}</p>
                    </div>
                    <div class="flex flex-col gap-2 group">
                        <div class="flex justify-between">
                            <h2 class="font-bold">Created By</h2>
                        </div>
                        <p class=" overflow-hidden">
                            <a href="/users/{{ $company->user->name }}" class="">{{ $company->user->name }}</a>
                        </p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="font-bold">Updated:</h2>
                        <p class="p-2  overflow-hidden">{{ $company->updated_at }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="font-bold">Created:</h2>
                        <p class="p-2  overflow-hidden">{{ $company->created_at }}</p>
                    </div>
                </div>
            </div>
        </article>
    </div>
</x-layout>