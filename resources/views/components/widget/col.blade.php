{{-- Widget Column --}}

@props([
    'classes' => 'col-12',
    'id' => '',
])

<div class="{{ $classes }}" @if (!empty($id)) id="{{ $id }}" @endif>
    {{ $slot }}
</div>