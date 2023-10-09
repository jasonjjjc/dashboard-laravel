<x-employee-card-featured :employee="$employees[0]" />

@if ($employees->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($employees->skip(1) as $employee)
            <x-employee-card :employee="$employee" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}" />
        @endforeach
    </div>
@endif
