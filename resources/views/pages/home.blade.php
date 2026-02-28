{{-- Home page --}}

<x-logistica>
    <x-slot:meta_title>Multiport Agency FZCO</x-slot:meta_title>
        
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
                <div class="col-lg-6 py-4 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                    <h2 class="mb-5 text-primary">Quick Transport and Logistics Solutions</h2>
                    <p class="mb-5 text-wrap-balance">
                        Multiport Agency Services FZCO delivers professional, reliable, and cost-efficient port agency and ship support services across major international ports. 
                        With a strong global network and a 24/7 operations desk, we ensure smooth vessel movements, accurate documentation, and real-time communication—every time.
                    </p>
        
                    <a href="{{ route('about') }}" class="btn btn-primary py-3 px-5">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fact Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 py-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Why choose us?</h6>
                    <h2 class="mb-5 text-primary">Efficiency and Reliability</h2>
                    <p class="mb-5 text-wrap-balance">Multiport Agency Services FZCO is a UAE Free Zone company specializing in port agency, ship husbandry, logistics coordination, and vessel operations management across multiple global ports.</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">+971 xxx xxx xxx</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-delay="0.3s">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/why-choose-us.webp') }}" style="object-fit: cover;"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- Service Start -->
    <div class="services-section container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Services</h6>
                <h2 class="mb-5 text-primary">Explore Our Services</h2>
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
                            <img class="img-fluid" src="{{ asset('img/cargo-and-operation-management.webp') }}" alt="">
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
                            <img class="img-fluid" src="{{ asset('img/service-2.jpg') }}" alt="">
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
                            <img class="img-fluid" src="{{ asset('img/service-1.jpg') }}" alt="">
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
    <!-- Service End -->

    <!-- Contact Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container contact-page py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                    <h1 class="mb-4 text-primary">Contact For Any Query</h1>
                    {{-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> --}}
                    <div class="bg-light p-4">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

</x-logistica>