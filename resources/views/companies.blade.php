<x-layout>
    <x-header></x-header>


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-company-card-featured :company="$companies[0]" />

        <div class="lg:grid lg:grid-cols-2">
            @foreach ($companies->skip(1) as $company)
                <x-company-card :company="$company" />
            @endforeach
        </div>
    </main>
</x-layout>
