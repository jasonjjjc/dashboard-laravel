<x-layout>
    <main class="max-w-xl mt-6">
        <article class="flex flex-col items-center gap-4">
            <img src="/images/illustration-1.png" alt="" class="rounded-xl">

            <p class="text-gray-400 text-xs">
                Added <time>{{ $employee->created_at->diffForHumans() }}</time>
            </p>

            <h1 class="font-bold text-3xl lg:text-4xl">
                {{ $employee->name }}
            </h1>

            <x-company-button :company="$employee->company" />


            <div class="lg:text-lg leading-loose">
                <div>
                    {{-- Convert the employee description to an array of sentences --}}
                    @php
                        $sentences = preg_split('/\. (?=[A-Z])/', $employee->description);
                        // Remove the last item, remove the period, and add it back
                        $lastSentence = array_pop($sentences);
                        $lastSentence = rtrim($lastSentence, '.');
                        $sentences[] = $lastSentence;
                    @endphp

                    {{-- Iterate through each pair of sentences to create paragraphs --}}
                    @foreach (array_chunk($sentences, 2) as $description)
                        <p class="mb-4">{{ implode('. ', $description) }}.</p>
                    @endforeach
                </div>
            </div>

            <x-testimonials :employee="$employee" />

        </article>
    </main>


</x-layout>
