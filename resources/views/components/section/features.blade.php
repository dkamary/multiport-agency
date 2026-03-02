{{-- Features --}}

@props([
    'additional_class' => 'py-5 px-lg-0',
    'image' => asset('img/feature.jpg'),
    'title' => 'Our Core Values',
    'image' => asset('img/feature.jpg'),
])

<div class="container-fluid overflow-hidden {{ $additional_class }}">
    <div class="container feature py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 feature-text wow fadeInUp py-4" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">{!! $title !!}</h6>
                {{-- <h1 class="mb-5">We Are Trusted Logistics Company Since 1990</h1> --}}
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa fa-bolt text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Reliability</h5>
                        <p class="mb-0">24/7 support and consistent performance.</p>
                    </div>
                </div>
                <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Integrity</h5>
                        <p class="mb-0">Transparency in all costings, communication, and operations.</p>
                    </div>
                </div>
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Safety First</h5>
                        <p class="mb-0">Compliance with international maritime standards.</p>
                    </div>
                </div>
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-clock text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Efficiency</h5>
                        <p class="mb-0">Minimizing delays and optimizing port turnaround times.</p>
                    </div>
                </div>
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-user text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Professionalism</h5>
                        <p class="mb-0">Minimizing delays and optimizing port turnaround times.</p>
                    </div>
                </div>
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Global Reach</h5>
                        <p class="mb-0">Strong international agent and supplier network.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ $image }}"
                        style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
