{{-- Home page --}}

<x-logistica>
    <x-slot:meta_title>Multiport Agency FZCO</x-slot:meta_title>

    <x-section.about :has_video="true">
        <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
        <h2 class="mb-5 text-primary text-uppercase">Global Ship Agency Solutions</h2>
        <p class="mb-5 text-wrap-balance">
            Multiport Agency Services FZCO is an independent ship agency providing smooth and reliable port services
            worldwide. We assist shipowners, operators, and charterers with vessel operations, including port agency,
            crew change, bunkering coordination, cargo handling, and husbandry. Through our trusted global network of
            port agents, we ensure efficient, timely, and cost-effective support at every port of call.
        </p>

        <a href="{{ route('about') }}" class="btn btn-primary py-3 px-5">Explore More</a>
    </x-section.about>

    <x-section.why-choose-us>
        <x-slot:title>Why choose us?</x-slot:title>
        <x-slot:subtitle>RELIABLE SHIP AGENCY WORLDWIDE</x-slot:subtitle>
        <x-slot:text>
            <div class="row">
                <div class="col-12">
                    <ul>
                        <li><strong>Global Coverage</strong>: Trusted network of port agents across major ports worldwide.</li>
                        <li><strong>Reliable Operations</strong>: Efficient vessel calls, timely PDAs, and smooth port procedures.</li>
                        <li><strong>Comprehensive Services</strong>: Port agency, crew change, bunkering, cargo handling, and husbandry.</li>
                        <li><strong>Cost-Effective Solutions</strong>: Competitive PDAs and transparent service fees.</li>
                        <li><strong>24/7 Support</strong>: Always available to handle vessel requirements and emergencies.</li>
                    </ul>
                </div>
            </div>
        </x-slot:text>

    </x-section.why-choose-us>

    <x-widget.map />

    <x-section.services />

    <x-section.contact />

</x-logistica>
