<x-layout>
    <section class="px-6 py-8 w-full max-w-lg mx-auto">
        <h1 class="pb-8 font-bold text-xl">Add a company</h1>
        <form method="POST" action="/admin/companies" class="max-w-lg w-full mx-auto" enctype="multipart/form-data">

            @csrf

            <div class="flex flex-col gap-6">
                <div class="relative">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="name">
                        Name
                    </label>

                    <input class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500" type="text"
                        name="name" id="name" placeholder="" value="{{ old('name') }}" required>

                    @error('name')
                        <p class="absolute top-full text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>

                    <input class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500" type="text"
                        name="email" id="email" placeholder="" value="{{ old('email') }}"
                        required>

                    @error('email')
                        <p class="absolute top-full text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="logo">
                        Logo
                    </label>

                    <input class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500" type="file"
                        name="logo" id="logo" placeholder="" value="{{ old('logo') }}"
                        required>

                    @error('logo')
                        <p class="absolute top-full text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="website">
                        Website
                    </label>

                    <input class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500" type="text"
                        name="website" id="website" placeholder=""
                        value="{{ old('website') }}" required>

                    @error('website')
                        <p class="absolute top-full text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="summary">
                        Summary
                    </label>

                    <textarea class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500" type="text" name="summary"
                        id="summary" placeholder="" required>{{ old('summary') }}</textarea>

                    @error('summary')
                        <p class="absolute top-full text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="description">
                        Description
                    </label>

                    <textarea class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500" type="text" name="description"
                        id="description" placeholder="" value="{{ old('description') }}" rows=5 required>{{ old('description') }}</textarea>

                    @error('description')
                        <p class="absolute top-full text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                @if (session('error'))
                    <x-flash-message success="error" message="{{ session('error') }}" />
                @endif

                <button type="submit"
                    class=" mt-8 bg-blue-500 text-white rounded py-2 px-4 hover:text-blue-300 transition duration-150 ease-in-out">
                    Submit
                </button>

            </div>



        </form>

    </section>
</x-layout>
