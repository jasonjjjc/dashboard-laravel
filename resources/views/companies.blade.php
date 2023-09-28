@extends ('layout')

@section('header')

    <div class="flex justify-between p-2 border-b-2 border-gray-200">
        <h1 class="rounded-sm p-2 hover:bg-green-500 hover:text-white cursor-pointer">ComDash</h1>
        <ul class="flex gap-4">
            <li class="rounded-sm p-2 hover:bg-green-500 hover:text-white cursor-pointer">Help</li>
            <li class="rounded-sm p-2 hover:bg-green-500 hover:text-white cursor-pointer">Logout</li>
        </ul>
    </div>

@endsection


@section ('content')
<div class="p-6 flex flex-col gap-6">

    @foreach ($companies as $company)
    <div class="flex flex-col border border-gray-100 rounded-sm">
        <h1 class="flex">
            <a href="/companies/{{ $company->slug }}" class="w-full py-3 px-6 bg-green-400 text-white rounded-tl-sm rounded-tr-sm">{{ $company->title }}</a>
        </h1>
        <p class="p-6">{{ $company->excerpt }}</p>
    </div>
    @endforeach

</div>

@endsection