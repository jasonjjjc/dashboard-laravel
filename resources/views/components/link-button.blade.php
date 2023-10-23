{{-- if on admin pages the button submits a delete request for that employee --}}

@if (isset($employee) && request()->is('admin/employees'))
    <form method="POST" action="/admin/employees/{{ $employee->slug }}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit"
            class="w-fit px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold hover:text-blue-600 hover:border-blue-600">
            Delete
        </button>
    </form>


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
