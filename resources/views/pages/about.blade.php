{{-- About page --}}

<x-logistica :with_carousel="false">
    <x-slot:meta_title>About Us</x-slot:meta_title>

    <x-section.about :has_video="true">
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
    </x-section.about>

    <x-section.features />

    <x-section.about :image="asset('img/what-are-we.webp')">
        <h6 class="text-secondary text-uppercase mb-3">What we are</h6>
        <h3 class="mb-1 text-primary">OUR MISSION</h3>
        <p class="mb-5" style="text-wrap: balance;">
            To provide reliable and efficient multi-port agency services by ensuring operational excellence, transparency, and strong communication across every vessel operation.
        </p>
        <h3 class="mb-1 text-primary">OUR VISION</h3>
        <p class="mb-5" style="text-wrap: balance;">
            To become a globally recognized port and ship agency offering world-class service, seamless coordination, and trusted maritime solutions across all major ports.
        </p>
    </x-section.about>
</x-logistica>
