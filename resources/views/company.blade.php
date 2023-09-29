<x-layout>

    <div class="flex flex-1 flex-col px-6">
        <article class="flex flex-col border border-gray-100 rounded-md shadow-md">
            <div class="flex flex-col gap-6 pb-12 border border-gray-100 rounded-md">
                <h1 class="flex w-full justify-center py-3 px-6 bg-green-900 text-white text-xl rounded-tl-md rounded-tr-md">
                    <a href="/companies/{{ $company->id }}">{{ $company->name }}</a>
                </h1>
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
        <a href="/" class="mt-6 py-2 px-6 bg-green-900 text-white w-fit rounded-md">Back</a>
    </div>

</x-layout>