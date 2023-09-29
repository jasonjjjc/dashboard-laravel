<x-layout>

    <div class="flex flex-1 flex-col p-6">
        <article class="flex flex-col border border-gray-100 rounded-sm">
            <h1 class="py-3 px-6 bg-green-400 text-white rounded-tl-sm rounded-tr-sm">
                {{ $company->title }}
            </h1>
            <p class="p-6">{{ $company->body }}</p>
        </article>
        <a href="/" class="mt-6 py-2 px-6 bg-green-400 text-white w-fit rounded-md">Back</a>
    </div>

</x-layout>