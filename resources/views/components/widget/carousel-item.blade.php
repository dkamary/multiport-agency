@props([
    'image' => 'img/carousel-1.jpg',
    'background' => 'rgba(6, 3, 21, .5)',
    'subtitle' => 'Transport & Logistics Solution',
    'title' => '#1 Place For Your <span class="text-primary">Logistics</span> Solution',
    'text' => 'Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.',
    'primary_button_text' => 'Read More',
    'primary_button_link' => '',
    'secondary_button_text' => 'Free Quote',
    'secondary_button_link' => '',
])

<div class="owl-carousel-item position-relative">
    <img class="img-fluid" src="{{ $image }}" alt="">
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
        style="background: {{ $background }};">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-10 col-lg-8">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">{!! $subtitle !!}</h5>
                    <h1 class="display-3 text-white animated slideInDown mb-4">{!! $title !!}</h1>
                    <p class="fs-5 fw-medium text-white mb-4 pb-2">{!! !$slot->isEmpty() ? $slot : '' !!}</p>
                    {{-- @if(!empty($primary_button_text))
                        <a href="{{ $primary_button_link }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{!! $primary_button_text !!}</a>
                    @endif
                    @if(!empty($secondary_button_text))
                        <a href="{{ $secondary_button_link }}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">{!! $secondary_button_text !!}</a>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
