<x-layout>
    <main class="max-w-2xl mt-6 mx-auto flex flex-col md:flex-row">

        <!-- Left Content Section -->
        <article class="flex-1 flex flex-col items-start gap-6 p-4 pr-8 rounded-sm ">

            <h1 class="text-lg font-bold">Edit Employee</h1>

            <!-- Image and Edit Button -->
            <img src="{{ asset('storage/' . $employee->image) }}" alt="" class="rounded-xl w-full max-w-sm">

            <div x-data="{ open: {{ old('image') || $errors->has('image') ? 'true' : 'false' }} }">

                <button @click="open = true" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2">Edit
                    Image</button>

                <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50"
                    style="background-color: rgba(0,0,0,0.5)">
                    <div class="bg-white p-6 rounded-lg">
                        <form method="POST" action="/admin/employees/{{ $employee->slug }}/image"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="file" name="image">
                            @error('image')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2">Update
                                Image</button>
                        </form>
                        <button @click="open = false" class="mt-2 text-red-500">Close</button>
                    </div>
                </div>

            </div>

        </article>

        <!-- Right Edit Form Section for Larger Screens -->
        <form method="POST" action="/admin/employees/{{ $employee->slug }}"
            class="flex-1 flex-col justify-center gap-6 pl-8 hidden md:flex border-l border-gray-100">

            @csrf

            @method('PUT')

            <!-- Name Input -->

            <div class="flex flex-col">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $employee->name }}" placeholder="Employee Name"
                    class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <!-- Company Dropdown-->
            <div class="flex flex-col">
                <label for="company_id">Company</label>
                <select name="company_id" class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}"
                            {{ $employee->company_id == $company->id ? 'selected' : '' }}>
                            {{ $company->name }}
                        </option>
                    @endforeach
                </select>
                @error('company_id')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <!-- Email Input -->
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ $employee->email }}" placeholder="Email Address"
                    class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Job Title Input -->
            <div class="flex flex-col">
                <label for="job_title">Job Title</label>
                <input type="text" name="job_title" value="{{ $employee->job_title }}" placeholder="Job Title"
                    class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                @error('job_title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Phone Input -->
            <div class="flex flex-col">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" value="{{ $employee->phone }}" placeholder="Phone Number"
                    class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                @error('phone')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Address Input -->
            <div class="flex flex-col">
                <label for="address">Address</label>
                <input type="text" name="address" value="{{ $employee->address }}" placeholder="Address"
                    class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                @error('address')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description Input -->
            <div class="flex flex-col">
                <label for="description">Description</label>
                <textarea name="description" rows="4" class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">{{ $employee->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save
                Changes</button>
        </form>

        <!-- Form for Smaller Screens -->
        <form method="POST" action="/admin/employees/{{ $employee->slug }}"
            class="flex-1 flex flex-col gap-6 p-4 md:hidden">

            @csrf
            @method('PUT')

            <!-- Name Input -->
            <div class="flex flex-col">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $employee->name }}" placeholder="Employee Name"
                    class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <!-- Company Dropdown-->
            <div class="flex flex-col">
                <label for="company_id">Company</label>
                <select name="company_id" class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}"
                            {{ $employee->company_id == $company->id ? 'selected' : '' }}>
                            {{ $company->name }}
                        </option>
                    @endforeach
                </select>
                @error('company_id')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <!-- Email Input -->
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ $employee->email }}" placeholder="Email Address"
                    class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <!-- Job Title Input -->
            <div class="flex flex-col">
                <label for="job_title">Job Title</label>
                <input type="text" name="job_title" value="{{ $employee->job_title }}" placeholder="Job Title"
                    class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                @error('job_title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <!-- Phone Input -->

            <div class="flex flex-col">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" value="{{ $employee->phone }}" placeholder="Phone Number"
                    class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                @error('phone')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <!-- Address Input -->

            <div class="flex flex-col">
                <label for="address">Address</label>
                <input type="text" name="address" value="{{ $employee->address }}" placeholder="Address"
                    class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">
                @error('address')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <!-- Description Input -->
            <div class="flex flex-col">
                <label for="description">Description</label>
                <textarea name="description" rows="4" class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">{{ $employee->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save
                Changes</button>
        </form>

    </main>
</x-layout>
