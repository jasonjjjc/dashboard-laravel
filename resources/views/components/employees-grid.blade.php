@if ($employees->count() > 0)
    <div class="flex flex-col gap-4 w-full">
        @foreach ($employees as $employee)
            <x-employee-card-featured :employee="$employee" />
        @endforeach
    </div>
@endif
