<x-layout>
    <main class="max-w-2xl mt-6 mx-auto flex flex-col md:flex-row">
        <!-- Left Content Section -->
        <article class="flex-1 flex flex-col items-start gap-6 pr-8 rounded-sm ">
            <a href="/admin/companies" class="text-blue-500 font-semibold py-2 text-sm hover:text-blue-600">Back to all
                companies</a>

            <h1 class="text-2xl">Edit Company</h1>

            <!-- Image and Edit Button -->
            <img src="{{ asset('/storage/' . $company->logo) }}" alt="" class="rounded-xl w-full max-w-sm">

            <div x-data="{ open: {{ old('image') || $errors->has('image') ? 'true' : 'false' }} }">

                <button @click="open = true" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2">Edit
                    Image</button>

                <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50"
                    style="background-color: rgba(0,0,0,0.5)">
                    <div class="bg-white p-6 rounded-lg">
                        <form method="POST" action="/admin/companies/{{ $company->slug }}/image"
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
        <form method="POST" action="/admin/companies/{{ $company->slug }}"
            class="flex-1 flex-col justify-center gap-6 pl-8 hidden md:flex border-l border-gray-100">

            @csrf
            @method('PUT')

            <!-- Name Input -->
            <x-form-input type="text" id="name" name="name" placeholder="" :value="$company->name" labeltext="Name"
                required="false" />

            <!-- Email Input -->
            <x-form-input type="email" id="email" name="email" placeholder="" :value="$company->email"
                labelText="Email" />

            <!-- Website Input -->
            <x-form-input type="text" id="website" name="website" placeholder="" :value="$company->website"
                labelText="Website" />

            <!-- Description Textarea -->

            <x-form-textarea id="description" name="description" placeholder="" :value="$company->description"
                labelText="Description" />

            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save
                Changes</button>
        </form>

        <!-- Form for Smaller Screens -->
        <form method="POST" action="/admin/companies/{{ $company->slug }}"
            class="flex-1 flex flex-col gap-6 mt-8 p-4 md:hidden">

            @csrf
            @method('PUT')

            <!-- Name Input -->
            <x-form-input type="text" id="name" name="name" placeholder="" :value="$company->name"
                labeltext="Name" />
  
            <!-- Email Input -->
            <x-form-input type="email" id="email" name="email" placeholder="" :value="$company->email"
                labelText="Email" />

                <!-- Website Input -->
            <x-form-input type="text" id="website" name="website" placeholder="" :value="$company->website"
                labelText="Website" />
            
                       <!-- Description Input -->
            <div class="flex flex-col">
                <label for="description">Description</label>
                <textarea name="description" rows="4" class="border rounded-md px-4 py-2 mb-2 focus:outline-blue-500">{{ $company->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save
                Changes</button>
        </form>

    </main>
</x-layout>
