<x-layout>
    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                <p class="mt-4 block text-gray-400 text-xs">
                    Published <time>{{ $company->created_at->diffForHumans() }}</time>
                </p>

                <div class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="flex gap-6 ml-3 text-left">
                        <h5 class="font-bold">{{ $company->user->name }}</h5>
                        <a href="mailto:{{ $company->user->email }}"
                            class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                            style="font-size: 10px">Email</a>
                    </div>
                </div>
            </div>

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    <a href="/"
                        class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>

                        Back to Companies
                    </a>

                    <div class="space-x-2">
                        <x-category-button :category="$company->category" />
                    </div>
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{ $company->name }}
                </h1>

                <div class="space-y-4 lg:text-lg leading-loose">
                    <p>
                        {{-- Convert the company description to an array of sentences --}}
                        @php
                            $sentences = explode('. ', $company->description);
                            // Remove the last item, remove the period, and add it back
                            $lastSentence = array_pop($sentences);
                            $lastSentence = rtrim($lastSentence, '.');
                            $sentences[] = $lastSentence;
                        @endphp

                        {{-- Iterate through each pair of sentences to create paragraphs --}}
                        @foreach (array_chunk($sentences, 2) as $description)
                            <p>{{ implode('. ', $description) }}.</p>
                        @endforeach




                    </p>
                </div>
            </div>
        </article>
    </main>


</x-layout>
