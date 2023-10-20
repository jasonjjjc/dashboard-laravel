@if (request()->is('admin/employees'))
    @props(['employee'])

    <article class="w-full flex justify-center">
        <div class="relative w-full max-w-2xl">
            <a href="/admin/employees/{{ $employee->slug }}/edit">

                <h1
                    class="text-md font-semibold transition-colors duration-300 border border-gray-100 hover:bg-gray-100 rounded-md p-3">
                    {{ $employee->name }}
                </h1>

            </a>

        </div>


    </article>




@elseif (isset($employee))
    @props(['employee'])


    <article class="w-full flex justify-center">
        <div class="relative w-full max-w-2xl">
            <a href="/employees/{{ $employee->slug }}">

                <h1
                    class="text-md font-semibold transition-colors duration-300 border border-gray-100 hover:bg-gray-100 rounded-md p-3">
                    {{ $employee->name }}
                </h1>

            </a>
            <h2 class="absolute top-3 right-4 flex justify-center md:w-32">
                <x-link-button :employeeCompany="$employee->company"/>
            </h2>
        </div>


    </article>
@else
    @props(['company'])

    <article class="w-full flex justify-center">
        <div class="relative w-full max-w-2xl">
            <a href="/employees/?company={{ $company->slug }}">

                <h1
                    class="text-md font-semibold transition-colors duration-300 border border-gray-100 hover:bg-gray-100 rounded-md p-3">
                    {{ $company->name }}
                </h1>

            </a>
            <h2 class="absolute top-3 right-2 flex justify-center md:w-40">
                <x-link-button :company="$company"/>

            </h2>
        </div>


    </article>
@endif
