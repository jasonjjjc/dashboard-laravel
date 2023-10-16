<x-layout>
    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                <p class="mt-4 block text-gray-400 text-xs">
                    Published <time>{{ $employee->created_at->diffForHumans() }}</time>
                </p>

                <div class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="flex gap-6 ml-3 text-left">
                        <h5 class="font-bold">
                            <a href="/?user={{ $employee->user->name }}">{{ $employee->user->name }}</a>
                        </h5>
                        <a href="mailto:{{ $employee->email }}"
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

                        Back to Employees
                    </a>

                    <div class="space-x-2">
                        <x-company-button :company="$employee->company" />
                    </div>
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{ $employee->name }}
                </h1>

                <div class="space-y-4 lg:text-lg leading-loose">
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



                <section class="col-span-8 col-start-5 mt-10 space-y-6">
                    <header>
                        <h3 class="font-bold text-xl">Comments</h3>
                    </header>

                    <main class="space-y-4">

                        <form method="POST" action="/employees/{{ $employee->slug }}/testimonials" class="border border-gray-200 rounded-xl flex flex-col p-6 gap-4">
                            @csrf

                            <img src="https://i.pravatar.cc/200?id={{ auth()->user()->id }}" alt="avatar"
                                class="h-12 w-12 rounded-xl">

                            <div class="w-full flex flex-col gap-4 md:space-x-3">
                                <div class="flex-grow">
                                    <label for="body" class="sr-only">Enter Your Testimonial Here</label>
                                    <textarea id="body" name="body" rows="4"
                                        class="w-full h-full border border-gray-200 rounded-xl placeholder-gray-900 px-4 py-2"
                                        placeholder="Add a testimonial about {{ $employee->name }}..."></textarea>
                                </div>

                                <button type="submit"
                                    class="h-8 bg-blue-500 hover:bg-blue-600 rounded-xl shadow-md text-white px-10 md:w-fit md:self-end">Post</button>
                            </div>
                        </form>


                        @foreach ($employee->testimonials as $testimonial)
                            <x-testimonial :testimonial="$testimonial" />
                        @endforeach
                    </main>
                </section>

            </div>
        </article>
    </main>


</x-layout>
