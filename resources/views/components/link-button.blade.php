{{-- if on admin pages the button links to the edit page for that employee --}}

@if (request()->is('admin/employees'))
    @props(['employee'])

    <a href="/admin/employees/{{ $employee->slug }}/edit"
        class="w-fit px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold hover:text-blue-600 hover:border-blue-600">
        Edit
    </a>

    {{-- If on the employee index page and NO company has been selected, display the company link button --}}
@elseif (isset($employeeCompany) && request()->is('employees*') && !request()->has('company'))
    @props(['employeeCompany'])

    <a href="/employees?company={{ $employeeCompany->slug }}"
        class="w-fit px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold hover:text-blue-600 hover:border-blue-600">
        {{ $employeeCompany->name }}
    </a>

    {{-- If on the employee index page and a company has been selected, display nothing --}}
@elseif (isset($employeeCompany) && request()->is('employees*') && request()->has('company'))
    {{-- do nothing --}}
@else
    @props(['company'])

    <a href="{{ $company->website }}" target="_blank"
        class="w-fit px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs font-semibold hover:text-blue-600 hover:border-blue-600">
        Website
    </a>
@endif
