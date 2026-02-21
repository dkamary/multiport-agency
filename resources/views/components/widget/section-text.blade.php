{{-- Section Text --}}
@props([
    'classes' => '',
    'subtitle' => 'Subtitle',
    'title' => 'Title',
])

<div class="col-lg-6 wow fadeInUp {{ $classes }}" data-wow-delay="0.3s">
    <h6 class="text-secondary text-uppercase mb-3">{!! $subtitle !!}</h6>
    <h2 class="mb-5">{!! $title !!}</h2>
    {{ $slot }}
</div>
