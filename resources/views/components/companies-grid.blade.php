<x-company-card-featured :company="$companies[0]" />

@if ($companies->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($companies->skip(1) as $company)
            <x-company-card :company="$company" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}" />
        @endforeach
    </div>
@endif
