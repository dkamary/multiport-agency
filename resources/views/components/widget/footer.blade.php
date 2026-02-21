{{-- Footer --}}
<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Address</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Dubai, United Arab Emirates</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+971 xxx xxx xxx</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>ops@multiportagencyservices.com</p>
            <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Services</h4>
            {{-- <a class="btn btn-link" href="">Air Freight</a> --}}
            <a class="btn btn-link" href="{{ route('services') }}#sea-freight">Sea Freight</a>
            <a class="btn btn-link" href="{{ route('services') }}#road-freight">Road Freight</a>
            <a class="btn btn-link" href="{{ route('services') }}#logistic">Logistic Solutions</a>
            <a class="btn btn-link" href="{{ route('services') }}#industry">Industry solutions</a>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Quick Links</h4>
            <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
            <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
            <a class="btn btn-link" href="{{ route('services') }}">Our Services</a>
            <a class="btn btn-link" href="{{ route('faq') }}">Faqs</a>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Newsletter</h4>
            <p>Be the first to know about our latest news and offers.</p>
            <div class="position-relative mx-auto" style="max-width: 400px;">
                <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                <button type="button"
                    class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
            </div>
        </div>
    </div>
</div>
