{{-- Home page --}}

<x-logistica>
    <x-slot:meta_title>Multiport Agency FZCO</x-slot:meta_title>
        
    <x-section.about>
        <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
        <h2 class="mb-5 text-primary">Quick Transport and Logistics Solutions</h2>
        <p class="mb-5 text-wrap-balance">
            Multiport Agency Services FZCO delivers professional, reliable, and cost-efficient port agency and ship support services across major international ports. 
            With a strong global network and a 24/7 operations desk, we ensure smooth vessel movements, accurate documentation, and real-time communication—every time.
        </p>

        <a href="{{ route('about') }}" class="btn btn-primary py-3 px-5">Explore More</a>
    </x-section.about>

    <x-section.why-choose-us />

    <x-section.services />

    <x-section.contact />

</x-logistica>