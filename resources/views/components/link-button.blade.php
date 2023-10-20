@if (request()->is('admin/employees'))
    @props(['employee'])

    <a href="/admin/employees/{{ $employee->slug }}/edit"
       class="w-fit px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold hover:text-blue-600 hover:border-blue-600">
        Edit
    </a>

@elseif (isset($employeeCompany))
    @props(['employeeCompany'])

    <a href="/employees?company={{ $employeeCompany->slug }}"
       class="w-fit px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold hover:text-blue-600 hover:border-blue-600">
        {{ $employeeCompany->name }}
    </a>

@else
    @props(['company'])
    
    <a href="admin/companies?company={{ $company->slug }}"
       class="w-fit px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs font-semibold hover:text-blue-600 hover:border-blue-600">
        {{ $company->name }}
    </a>
@endif
