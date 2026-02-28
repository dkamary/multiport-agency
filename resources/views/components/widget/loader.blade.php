{{-- Loader --}}
@props([
    'width' => '3rem',
    'height' => '3rem',
])

<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: {{ $width ?? '3rem' }}; height: {{ $height ?? '3rem' }};" role="status">
        @if (!$slot->isEmpty())
            {{ $slot }}
        @else
            <span class="visually-hidden">Loading...</span>
        @endif
    </div>
</div>
