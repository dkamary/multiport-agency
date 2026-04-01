{{-- Contact Section --}}
@props([
    'showMap' => false,
    'additional_class' => 'py-5 px-lg-0',
    'title' => 'Contact For Any Query',
    'subtitle' => 'Get In Touch',
    'form' => null,
    'image' => asset('img/port-de-barcelona-night.webp'),
])

<div class="container-fluid overflow-hidden {{ $additional_class }}">
    <div class="container contact-page-none py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">{!! $subtitle !!}</h6>
                <h1 class="mb-4 text-primary">{{ $title }}</h1>
                <div class="bg-light p-4">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        {{-- Honeypot --}}
                        <div style="display:none;">
                            <input type="text" name="website" id="website" value="">
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                    <label for="name">Your Name</label>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                                    <label for="email">Your Email</label>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                                    <label for="subject">Subject</label>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Leave a message here" id="message" name="message" style="height: 100px" required>{{ old('message') }}</textarea>
                                    <label for="message">Message</label>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input @error('consent') is-invalid @enderror" type="checkbox" name="consent" id="consent" required>
                                    <label class="form-check-label text-muted small" for="consent">
                                        I hereby acknowledge and provide my express consent to be contacted by Multiport Agency Services FZCO and agree to the processing of my personal data in accordance with professional communication standards.
                                    </label>
                                    @error('consent')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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
                <div class="d-flex justify-content-center overflow-hidden position-relative">
                    @if ($showMap)
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    @else
                        @if(!empty($image))
                            <img class="img-fluid-custom" src="{{ $image }}" alt="{{ $title }}">
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
