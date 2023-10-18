<footer class="w-full bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-6">
    <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
    <h5 class="text-3xl">Subscribe to get newsletter updates</h5>
    <p class="text-sm mt-4">We promise to keep the inbox clean. No bugs.</p>

    <div class="mt-4">
        <div class="flex justify-center">

            <form id="newsletter" method="POST" action="/newsletter"
                class="relative flex flex-col w-full gap-4 text-sm max-w-md">

                @csrf

                <div class=" flex items-center">
                    <label for="email" class="hidden lg:inline-block mr-4">
                        <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                    </label>

                    <input id="email" name="email" type="text" placeholder="Your email address"
                        class="w-full p-3 rounded-md border border-blue-500 focus:outline-blue-500">

                </div>
                @error('email')
                    <p class="absolute top-full text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <button type="submit"
                    class="w-full bg-blue-500 py-3 rounded-md text-white hover:text-blue-300 font-bold">
                    Sign Up
                </button>
            </form>
        </div>
    </div>
</footer>
