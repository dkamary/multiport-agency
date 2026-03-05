{{-- Widget Row --}}

@props([
    'id' => '',
    'classes' => '',
])

<div class="row {{ $classes }}" @if (!empty($id)) id="{{ $id }}" @endif>
    {{ $slot }}
</div>
