@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false" class="w-full flex lg:w-48 items-center">
    
    {{-- Trigger --}}
    <div @click=" show = ! show " class="w-full text-start py-2 pl-3 pr-3 text-sm font-semibold">
        {{ $trigger }}
    </div>

    {{-- Links --}}

    <div x-show="show" class="w-full bg-gray-100 p-2 absolute top-10 z-10 rounded-xl overflow-auto max-h-48"
        style="display: none">
        
        {{ $slot }}

    </div>
</div>