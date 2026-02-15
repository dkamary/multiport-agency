{{-- Section --}}
@props([
    'image_first' => true,
    'image' => 'img/about.jpg',
    'subtitle' => 'Subtitle',
    'title' => 'Title',
    'classes' => '',
    'text_classes' => '',
    'image_classes' => '',
    'delay_text' => '0.3s',
    'delay_image' => '0.1s',
    'min_height' => '400px',
])

<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container {{ $classes}} py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            @if($image_first)
                <x-widget.section-image :$image_first :image="$image" :delay="$delay_image" :min_height="$min_height" :classes="$image_classes" />
                <x-widget.section-text :classes="$classes" :delay="$delay_text">
                    <x-slot:title>{!! $title !!}</x-slot:title>
                    <x-slot:subtitle>{!! $subtitle !!}</x-slot:subtitle>
                    {{ $slot }}
                </x-widget.section-text>
            @else
                <x-widget.section-text :classes="$classes" :delay="$delay_text">
                    <x-slot:title>{!! $title !!}</x-slot:title>
                    <x-slot:subtitle>{!! $subtitle !!}</x-slot:subtitle>
                    {{ $slot }}
                </x-widget.section-text>
                <x-widget.section-image :$image_first :image="$image" :delay="$delay_image" :min_height="$min_height" :classes="$image_classes" />
            @endif
        </div>
    </div>
</div>
