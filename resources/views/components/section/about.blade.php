{{-- About section --}}

@props([
    'additional_class' => 'py-5 px-lg-0',
    'image' => asset('img/about.jpg'),
    'video' => asset('videos/multiport-agency-covid-protocol-480p.mp4'),
    'has_video' => false,
])

<div class="container-fluid overflow-hidden {{ $additional_class }}">
    <div class="container about py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    @if (!$has_video)
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ $image }}"
                        style="object-fit: cover;" alt="">
                    @else
                        <video class="position-absolute w-100 h-100" autoplay muted loop style="object-fit: cover;" poster="{{ asset('img/why-choose-us.webp') }}">
                            <source src="{{ $video }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 py-4 about-text wow fadeInUp" data-wow-delay="0.3s">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
