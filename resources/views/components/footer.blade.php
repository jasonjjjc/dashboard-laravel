<footer class="w-full bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-6 mt-12 mb-4">
    <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
    <h5 class="text-3xl">Subscribe to get newsletter updates</h5>
    <p class="text-sm mt-4">We promise to keep the inbox clean. No bugs.</p>

    <div class="mt-4">
        <div class="flex flex-col items-center gap-6 max-w-md mx-auto">

            <form id="newsletterForm" method="POST" action="/newsletter"
                class="relative flex flex-col w-full gap-10 text-sm">

                @csrf

                <div class="relative flex items-center">
                    <label for="newsletter-email" class="sr-only mr-4">
                        Email Address
                    </label>

                    <input id="newsletterEmail" name="newsletter-email" type="text"
                        placeholder="Enter your email address here"
                        class="w-full p-3 rounded-md border border-blue-500 focus:outline-blue-500">

                    @error('newsletter-error')
                        <p class="absolute top-full text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <button type="submit"
                    class="w-full bg-blue-500 py-3 rounded-md text-white hover:text-blue-300 hover:bg-blue-600 font-bold">
                    Sign Up
                </button>
            </form>
        </div>
    </div>
</footer>
