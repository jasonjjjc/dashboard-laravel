<x-layout>
    <section class="px-6 py-8 flex flex-col items-center w-full">
        
        <form method="POST" action="/admin/employees" class="max-w-lg w-full">

            @csrf
            
            <div class="mb-6 flex flex-col gap-6">
                <label class="hidden block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="name"
                >
                    Name
                </label>

                <input class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500"
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Enter your name"
                    value="{{ old('name') }}"
                    required
                >

                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <label class="hidden block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="email"
                >
                    Email
                </label>

                <input class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500"
                    type="text"
                    name="email"
                    id="email"
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                    required
                >

                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <label class="hidden block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="phone"
                >
                    Phone
                </label>

                <input class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500"
                    type="text"
                    name="phone"
                    id="phone"
                    placeholder="Enter your phone"
                    value="{{ old('phone') }}"
                    required
                >

                @error('phone')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <label class="hidden block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="image"
                >
                    Image
                </label>

                <input class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500"
                    type="text"
                    name="image"
                    id="image"
                    placeholder="Enter your image URL"
                    value="{{ old('image') }}"
                    required
                >

                @error('image')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <label class="hidden block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="job_title"
                >
                    Job Title
                </label>

                <input class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500"
                    type="text"
                    name="job_title"
                    id="job_title"
                    placeholder="Enter your job title"
                    value="{{ old('job_title') }}"
                    required
                >

                @error('job_title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>

                @enderror

                <label class="hidden block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="address"
                >
                    Address
                </label>

                <input class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500"
                    type="text"
                    name="address"
                    id="address"
                    placeholder="Enter your address"
                    value="{{ old('address') }}"
                    required
                >

                @error('address')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <label class="hidden block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="summary"
                >
                    Summary
                </label>

                <textarea class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500"
                    type="text"
                    name="summary"
                    id="summary"
                    placeholder="Enter your summary text"
                    value="{{ old('summary') }}"
                    required
                ></textarea>

                @error('summary')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <label class="hidden block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="description"
                >
                    Description
                </label>

                <textarea class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500"
                    type="text"
                    name="description"
                    id="description"
                    placeholder="Enter your description text"
                    value="{{ old('description') }}"
                ></textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <label class="-mb-5 uppercase font-bold text-xs text-gray-700"
                    for="company"
                >Company</label>

                <select name="company" id="company" class="border border-gray-200 rounded-sm p-2 w-full focus:outline-blue-500">
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>

                @error('company')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

                <input type="hidden" name="company_id" id="company_id" value="{{ $company->id }}" focus:outline-blue-500>

                <button type="submit"
                    class=" mt-8 bg-blue-500 text-white rounded py-2 px-4 hover:text-blue-300 transition duration-150 ease-in-out"
                >
                    Submit  
                </button>

            </div>



        </form>
    
    </section>
</x-layout>
