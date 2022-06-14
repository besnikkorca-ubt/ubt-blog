@props(['active'])

@php
    $classes = 'block px-4 py-2 text-sm';

    if ($active) $classes .= ' bg-blue-500 text-white'
@endphp


<a {{ $attributes(['class' => $classes ]) }}  >{{ $slot }}</a>
