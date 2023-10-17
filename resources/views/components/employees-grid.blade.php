@if ($employees->count() > 0)
    
        @foreach ($employees as $employee)
            <x-employee-card-featured :employee="$employee" />
        @endforeach
    
@endif
