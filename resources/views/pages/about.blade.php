{{-- About page --}}

<x-logistica :with_carousel="false">
    <x-slot:meta_title>About Us</x-slot:meta_title>

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/about.jpg') }}" style="object-fit: cover;"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                    <h1 class="mb-5 text-primary">Quick Transport and Logistics Solutions</h1>

                    <p class="mb-5">
                        Multiport Agency Services FZCO is a UAE Free Zone company specializing in port agency, ship husbandry, logistics coordination, and vessel operations management across multiple global ports.
                        We offer end-to-end support for shipowners, charterers, operators, freight forwarders, and logistics partners who require fast, transparent, and dependable port services.
                    </p>
                    <p class="mb-5">
                        From pre-arrival arrangements to vessel clearance, bunkering, crew logistics, cargo coordination, and departure procedures, our team ensures every port call is handled with precision.
                        Through our international agent network, we deliver consistent service quality and compliance with global maritime standards.
                    </p>
                    {{-- <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                            <h5>Global Coverage</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam
                                justo.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                            <h5>On Time Delivery</h5>
                            <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam
                                justo.</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary py-3 px-5">Explore More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Our Core values</h6>
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
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/feature.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/carousel-1.jpg') }}" style="object-fit: cover;"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">What we are</h6>
                    <h3 class="mb-1 text-primary">OUR MISSION</h3>
                    <p class="mb-5" style="text-wrap: balance;">
                        To provide reliable and efficient multi-port agency services by ensuring operational excellence, transparency, and strong communication across every vessel operation.
                    </p>
                    <h3 class="mb-1 text-primary">OUR VISION</h3>
                    <p class="mb-5" style="text-wrap: balance;">
                        To become a globally recognized port and ship agency offering world-class service, seamless coordination, and trusted maritime solutions across all major ports.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</x-logistica>
