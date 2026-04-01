<form id="contact-form-ajax" action="{{ route('contact.submit') }}" method="POST">
    @csrf
    {{-- Honeypot --}}
    <div style="display:none;">
        <input type="text" name="website" id="website" value="">
    </div>
    
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                <label for="name">Your Name</label>
                <div class="invalid-feedback" id="error-name"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                <label for="email">Your Email</label>
                <div class="invalid-feedback" id="error-email"></div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                <label for="subject">Subject</label>
                <div class="invalid-feedback" id="error-subject"></div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px" required></textarea>
                <label for="message">Message</label>
                <div class="invalid-feedback" id="error-message"></div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="consent" id="consent" required>
                <label class="form-check-label text-muted small" for="consent">
                    I hereby acknowledge and provide my express consent to be contacted by Multiport Agency Services FZCO and agree to the processing of my personal data in accordance with professional communication standards.
                </label>
                <div class="invalid-feedback" id="error-consent"></div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">
                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                Send Message
            </button>
        </div>
    </div>
</form>
