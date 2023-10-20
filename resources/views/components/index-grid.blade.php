@if ($for == 'employees')

    @if ($employees->count() > 0)
        <div class="flex flex-col gap-4 w-full">
            @foreach ($employees as $employee)
                <x-card-featured :employee="$employee" />
            @endforeach
        </div>
    @endif
@else
    @if ($for == 'companies')


        <div class="flex flex-col gap-4 w-full">
            @foreach ($companies as $company)
                <x-card-featured :company="$company" />
            @endforeach
        </div>


    @endif

@endif
