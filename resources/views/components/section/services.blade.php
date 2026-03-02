{{-- Services section --}}

@props([
    'additional_class' => 'container-xxl py-5',
    'title' => 'Our Services',
    'subtitle' => 'Explore Our Services',
])

<div class="services-section {{ $additional_class }}">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">{!! $title !!}</h6>
            <h2 class="mb-5 text-primary">{!! $subtitle !!}</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{ asset('img/service-5.jpg') }}" alt="">
                    </div>
                    <h4 class="mb-3 text-secondary">PORT AGENCY SERVICES</h4>
                    <ul>
                        <li>Vessel arrival & departure coordination</li>
                        <li>Port clearance & documentation</li>
                        <li>Liaison with port authorities & terminal operators</li>
                        <li>Pre-arrival planning and real-time operational updates</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{ asset('img/ship-husbandry-services.webp') }}" alt="">
                    </div>
                    <h4 class="mb-3 text-secondary">SHIP HUSBANDRY SERVICES</h4>
                    <ul>
                        <li>Crew change and immigration assistance</li>
                        <li>Cash-to-Master (CTM) handling</li>
                        <li>Stores, supplies, and spare parts delivery</li>
                        <li>Fresh water supply, waste disposal & medical assistance</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{ asset('img/cargo-and-operation-management.webp') }}"
                            alt="">
                    </div>
                    <h4 class="mb-3 text-secondary">CARGO & OPERATIONS MANAGEMENT</h4>
                    <ul>
                        <li>Cargo coordination with terminals</li>
                        <li>Loading & discharging supervision</li>
                        <li>Stevedore arrangements</li>
                        <li>Cargo documentation and reporting</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{ asset('img/maritimes-logistic-support.webp') }}" alt="">
                    </div>
                    <h4 class="mb-3 text-secondary">MARITIME LOGISTICS SUPPORT</h4>
                    <ul>
                        <li>Bunkering coordination</li>
                        <li>Delivery of provisions, equipment & ship supplies</li>
                        <li>Launch boat services</li>
                        <li>On-dock and offshore support arrangements</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{ asset('img/global-multiport-support.webp') }}" alt="">
                    </div>
                    <h4 class="mb-3 text-secondary">GLOBAL MULTI-PORT SUPPORT</h4>
                    <ul>
                        <li>A wide network of international partners</li>
                        <li>Standardized processes across multiple ports</li>
                        <li>Centralized communication & reporting</li>
                        <li>Consistent service quality worldwide</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
