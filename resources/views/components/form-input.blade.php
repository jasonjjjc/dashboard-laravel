@props([
    'type' => 'text',
    'id' => '',
    'name' => '',
    'placeholder' => '',
    'value' => '',
    'required' => false,
])

<div class="relative">
    <input 
        type="{{ $type }}" 
        id="{{ $id }}" 
        name="{{ $name }}" 
        placeholder="{{ $placeholder }}"
        value="{{ $type !== 'password' ? (old($name) ?: $value) : '' }}" 
        {{ $required ? 'required' : '' }}
        class="flex-1 px-4 py-2 rounded-sm border border-blue-500 focus:outline-blue-500 w-full" 
    />

    @error($name)
        <p class="absolute top-full text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
