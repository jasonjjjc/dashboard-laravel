@props(['active' => false])

@php

    $classes = 'block mb-1 text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white rounded-md whitespace-nowrap';

    if ($active) {
        $classes .= ' bg-blue-500 text-white';
    }
@endphp


<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>
