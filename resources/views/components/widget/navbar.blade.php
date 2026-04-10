{{-- Navbar --}}
@php
    $request = request();
@endphp

<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white">
            <img src="{{ asset('img/multiport-agency-logo.svg') }}" alt="Multiport Agency" style="width: auto; height: 3.5rem;" />
            <span>Multiport Agency</span>
        </h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ $request->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ $request->routeIs('about') ? 'active' : '' }}">About Us</a>
            {{-- <div class="nav-item dropdown">
                <a href="{{ route('about') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('about') }}#mission" class="dropdown-item">Our Mission</a>
                    <a href="{{ route('about') }}#vision" class="dropdown-item">Our Visions</a>
                    <a href="{{ route('about') }}#values" class="dropdown-item">Core Values</a>
                    <a href="{{ route('about') }}#why-choose-us" class="dropdown-item">Why Choose Us</a>
                </div>
            </div> --}}
            <a href="{{ route('services') }}" class="nav-item nav-link {{ $request->routeIs('services') ? 'active' : '' }}">Services</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ $request->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </div>
        <h4 class="m-0 pe-lg-5 d-none d-lg-block">
            <i class="fa fa-headphones text-primary me-3"></i>
            <a href="tel:+9710567615868">+971 056 761 5868</a>
        </h4>
    </div>
</nav>
