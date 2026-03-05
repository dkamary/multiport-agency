{{-- Why choose us section --}}

@props([
    'additional_class' => 'container-xxl py-5',
    'title' => 'Why choose us?',
    'subtitle' => 'Reliable ship agency worldwide',
    'text' => 'Multiport Agency Services FZCO is a UAE Free Zone company specializing in port agency, ship husbandry, logistics coordination, and vessel operations management across multiple global ports.',
    'phone_number' => '+971 xxx xxx xxx',
    'phone_label' => 'Call for any query!',
    'image' => asset('img/why-choose-us.webp'),
])

<!-- Fact Start -->
<div class="{{ $additional_class }}">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 py-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">{!! $title !!}</h6>
                <h2 class="mb-5 text-primary text-uppercase">{!! $subtitle !!}</h2>
                <div class="mb-5 text-wrap-balance">{{ $text }}</div>
                <div class="d-flex align-items-center">
                    <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                    <div class="ps-4">
                        <h6 class="text-muted">{!! $phone_label !!}</h6>
                        <h3 class="text-secondary m-0">{!! $phone_number !!}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInDown" data-wow-delay="0.3s">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ $image }}"
                        style="object-fit: cover;" alt="{{ $title }}">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->
