<x-layout>
    <main class="mt-6 md:mx-auto flex flex-col md:flex-row">
        <!-- Left Content Section -->
        <article class="flex-1 flex flex-col items-start gap-6 lg:pr-8 rounded-sm ">
            <a href="/admin/companies" class="text-blue-500 font-semibold py-2 text-sm hover:text-blue-600">Back to all companies</a>

            <h1 class="text-2xl">Edit Company</h1>

            <!-- Image and Edit Button -->
            <img src="{{ asset('/storage/' . $company->logo) }}" alt="{{ $company->name }} logo"
                class="mx-auto rounded-xl max-w-48 max-h-48 md:pr-4">

            <div x-data="{ open: {{ old('image') || $errors->has('image') ? 'true' : 'false' }} }" >
                <button @click="open = true" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2 mx-auto">Edit Image</button>
                <!-- ... The rest of your modal and image uploading code ... -->
            </div>
        </article>

        <!-- Edit Form Section -->
        <form method="POST" action="/admin/companies/{{ $company->slug }}"
            class="flex flex-col gap-10 pt-12 md:pt-4 md:pl-8 md:border-l md:border-gray-100 md:w-96">
            @csrf
            @method('PUT')

            <!-- Name Input -->
            <x-form-input type="text" id="name" name="name" placeholder="" :value="$company->name" labeltext="Name" required="false" />

            <!-- Email Input -->
            <x-form-input type="email" id="email" name="email" placeholder="" :value="$company->email" labelText="Email" />

            <!-- Website Input -->
            <x-form-input type="text" id="website" name="website" placeholder="" :value="$company->website" labelText="Website" />

            <!-- Description Input -->
            <x-form-textarea id="description" name="description" placeholder="" :value="$company->description" labelText="Description" rows="6" />

            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save Changes</button>
        </form>
    </main>
</x-layout>
