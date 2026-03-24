{{-- About section --}}

@props([
    'additional_class' => 'py-5 px-lg-0',
    'image' => asset('img/about.jpg'),
])

<div class="container-fluid overflow-hidden {{ $additional_class }}">
    <div class="container about-none py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ $image }}"
                        style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 py-4 about-text wow fadeInUp" data-wow-delay="0.3s">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
