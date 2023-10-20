<x-layout>
    <main class="max-w-2xl mt-6 mx-auto flex flex-col md:flex-row">

        <!-- Left Content Section -->
        <article class="flex-1 flex flex-col items-start gap-6 p-4 pr-8">

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
                            <input type="file" name="image" required>
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


            <!-- Name -->
            <h1 class="font-bold text-2xl lg:text-4xl">
                @php
                    $nameParts = explode(' ', $employee->name);
                    echo count($nameParts) > 1 ? ucwords($employee->name) : strtoupper($employee->name);
                @endphp
            </h1>

            <!-- Company Link -->
            <x-link-button :company="$employee->company" />

            <!-- Description -->

            @php
                $sentences = preg_split('/\. (?=[A-Z])/', $employee->description);
                $lastSentence = array_pop($sentences);
                $lastSentence = rtrim($lastSentence, '.');
                $sentences[] = $lastSentence;
            @endphp


            <div class="text-sm lg:text-md leading-loose mt-4">
                @foreach (array_chunk($sentences, 2) as $description)
                    <p class="mb-4">{{ implode('. ', $description) }}.</p>
                @endforeach
            </div>

        </article>

        <!-- Right Edit Form Section for Larger Screens -->
        <form method="POST" action="/admin/employees/{{ $employee->slug }}"
            class="flex-1 flex-col justify-center gap-6 pl-8 hidden md:flex border-l border-gray-100">

            @csrf

            @method('PUT')

            <!-- Name Input -->

            <div class="flex flex-col">
                <input type="text" name="name" value="{{ $employee->name }}" placeholder="Employee Name"
                    class="border rounded-md px-4 py-2 mb-2">
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <!-- Company Input -->
            <div class="flex flex-col">
                <input type="text" name="company" value="{{ optional($employee->company)->name }}"
                    placeholder="Company Name" class="border rounded-md px-4 py-2 mb-2">
                @error('company')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <!-- Description Input -->
            <div class="flex flex-col">
                <textarea name="description" rows="4" class="border rounded-md px-4 py-2 mb-2">{{ $employee->description }}</textarea>
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
                    class="border rounded-md px-4 py-2 mb-2">
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Company Input -->
            <div class="flex flex-col">
                <label for="company">Company</label>
                <input type="text" name="company" value="{{ $employee->company->name ?? '' }}"
                    placeholder="Company Name" class="border rounded-md px-4 py-2 mb-2">
                @error('company')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description Input -->
            <div class="flex flex-col">
                <label for="description">Description</label>
                <textarea name="description" rows="4" class="border rounded-md px-4 py-2 mb-2">{{ $employee->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save
                Changes</button>
        </form>

    </main>
</x-layout>
