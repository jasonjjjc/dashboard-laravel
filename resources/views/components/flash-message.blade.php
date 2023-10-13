<div x-data="{ isOpen: true }" x-init="setTimeout(() => isOpen = false, 10000)" class="fixed bottom-0 right-0 p-4" x-show="isOpen">
    <div class="py-2 pl-4 bg-blue-500 text-white rounded-sm flex items-center gap-8">
        <h1>{{ $message }}</h1>
        <a href="#" x-on:click.prevent="isOpen = false" class="h-8 w-12 flex justify-center items-center text-xl font-extrabold hover:text-blue-600 focus:text-blue-600">&times;</a>
    </div>
</div>
