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