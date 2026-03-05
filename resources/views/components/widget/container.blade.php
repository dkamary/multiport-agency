{{-- Widget Container --}}

@props([
    'id' => '',
    'classes' => '',
    'fullscreen' => false,
])

<div @class([
    'container-fluid' => $fullscreen,
    'container' => !$fullscreen,
    $classes,
]) @if (!empty($id)) id="{{ $id }}" @endif>{{ $slot }}</div>
