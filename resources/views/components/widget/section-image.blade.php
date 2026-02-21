{{-- Section Image --}}
@props([
    'image_first' => true,
    'image' => 'img/about.jpg',
    'image_alt' => '',
    'image_title' => '',
    'delay' => '0.1s',
    'min_height' => '400px',
    'classes' => ''
])

<div class="col-lg-6 ps-lg-0 wow {{ $image_first ? 'fadeInLeft' : 'fadeInRight' }} {{ $classes }}" data-wow-delay="{{ $delay }}" style="min-height: {{ $min_height }};">
    <div class="position-relative h-100">
        <img class="position-absolute img-fluid w-100 h-100" style="object-fit: cover;" 
            src="{{ $image }}"
            alt="{{ $image_alt }}" 
            title="{{ $image_title }}">
    </div>
</div>
