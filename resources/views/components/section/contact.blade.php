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
                    <div id="contact-form-container">
                        <div class="d-flex justify-content-center py-5" id="form-loader" style="display: none !important;">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const container = document.getElementById('contact-form-container');
                            const loader = document.getElementById('form-loader');

                            // 1. Chargement asynchrone après 5 secondes
                            setTimeout(function() {
                                loader.style.setProperty('display', 'flex', 'important');
                                
                                fetch('{{ route('contact.form') }}')
                                    .then(response => response.text())
                                    .then(html => {
                                        container.innerHTML = html;
                                        initContactForm();
                                    })
                                    .catch(error => {
                                        console.error('Error loading form:', error);
                                        container.innerHTML = '<div class="alert alert-danger">Error loading form. Please refresh the page.</div>';
                                    });
                            }, 5000);

                            function initContactForm() {
                                const form = document.getElementById('contact-form-ajax');
                                if (!form) return;

                                form.addEventListener('submit', function(e) {
                                    e.preventDefault();

                                    const submitBtn = form.querySelector('button[type="submit"]');
                                    const spinner = submitBtn.querySelector('.spinner-border');
                                    
                                    // Reset errors
                                    form.querySelectorAll('.invalid-feedback').forEach(el => el.innerText = '');
                                    form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));

                                    // Disable button and show spinner
                                    submitBtn.disabled = true;
                                    spinner.classList.remove('d-none');

                                    const formData = new FormData(form);

                                    // 2. Soumission par XHttpRequest (Fetch API)
                                    fetch(form.action, {
                                        method: 'POST',
                                        body: formData,
                                        headers: {
                                            'X-Requested-With': 'XMLHttpRequest',
                                            'Accept': 'application/json',
                                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                                        }
                                    })
                                    .then(response => response.json().then(data => ({ status: response.status, body: data })))
                                    .then(({ status, body }) => {
                                        if (status === 200) {
                                            // 3. Afficher un message au retour
                                            container.innerHTML = `<div class="alert alert-success">${body.message}</div>`;
                                        } else if (status === 422) {
                                            if (body.errors) {
                                                Object.keys(body.errors).forEach(key => {
                                                    const input = form.querySelector(`[name="${key}"]`);
                                                    const errorDiv = document.getElementById(`error-${key}`);
                                                    if (input) input.classList.add('is-invalid');
                                                    if (errorDiv) errorDiv.innerText = body.errors[key][0];
                                                });
                                            } else {
                                                alert(body.message || 'Validation error');
                                            }
                                        } else {
                                            alert(body.message || 'An error occurred. Please try again.');
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);
                                        alert('An error occurred. Please try again.');
                                    })
                                    .finally(() => {
                                        submitBtn.disabled = false;
                                        spinner.classList.add('d-none');
                                    });
                                });
                            }
                        });
                    </script>
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
