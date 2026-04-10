<x-logistica :with_carousel="false">
    <x-slot:meta_title>Email Diagnostic Tool</x-slot:meta_title>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="mb-0"><i class="fas fa-tools me-2"></i> SMTP Diagnostic Tool</h5>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-muted">
                            This tool allows you to test your email configuration in <strong>real-time</strong>. 
                            It bypasses the queue system to provide immediate feedback on connection or authentication errors.
                        </p>

                        @if(session('success'))
                            <div class="alert alert-success border-0 shadow-sm mb-4">
                                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger border-0 shadow-sm mb-4">
                                <h6 class="alert-heading fw-bold"><i class="fas fa-exclamation-triangle me-2"></i> Error Detected</h6>
                                <hr>
                                <p class="mb-0 font-monospace small" style="word-break: break-all;">
                                    {{ session('error') }}
                                </p>
                            </div>
                            
                            <div class="bg-light p-3 rounded mb-4">
                                <h6 class="fw-bold small text-uppercase text-secondary mb-2">Checklist:</h6>
                                <ul class="small mb-0">
                                    <li>Check <code>MAIL_HOST</code> and <code>MAIL_PORT</code> in <code>.env</code></li>
                                    <li>Verify <code>MAIL_USERNAME</code> and <code>MAIL_PASSWORD</code></li>
                                    <li>Ensure <code>MAIL_ENCRYPTION</code> (tls/ssl) matches your provider's requirements</li>
                                    <li>Check if your server's firewall allows outgoing connections on the specified port</li>
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('test.email.send') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">Recipient Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white"><i class="fas fa-envelope text-primary"></i></span>
                                    <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                           placeholder="e.g. your-personal@email.com" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-text mt-2">
                                    A test message will be sent immediately to this address using your current SMTP settings.
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg py-3 fw-bold">
                                    Run Diagnostic Test <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light text-center py-3">
                        <a href="{{ route('home') }}" class="text-decoration-none small text-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Back to Homepage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-logistica>
