{{-- Widget Map --}}

<x-widget.container :fullscreen="true">
    <div class="container">
        <div class="col-12">
            <div class="mapt-title-container">
                <h6 class="text-secondary text-uppercase wow fadeInRight" data-wow-delay="0.1s">
                    {{ $title ?? 'Ports Coverage' }}</h6>
                <h2 class="text-primary text-uppercase wow fadeInRight" data-wow-delay="0.1s">Global Ports Network</h2>
                <p class="wow fadeIn" data-wow-delay="0.1s">
                    Through our trusted partners, we provide ship agency services
                    in major ports worldwide.
                </p>
            </div>
        </div>
    </div>
</x-widget.container>
<div class="container-fluid p-3" style="background-color: lightblue;">
    <div id="map" class="wow fadeInUp" data-wow-delay="0.1s"></div>

    <div class="map-controls d-flex justify-content-center align-items-center">
        <div class="button-group">
            <a href="#" class="my-1 btn btn-services btn-primary active" data-service="all">All Services</a>
            <a href="#" class="my-1 btn btn-services btn-primary" data-service="port_agent">Port Agents</a>
            <a href="#" class="my-1 btn btn-services btn-primary" data-service="bqs_surveyor">BQS Surveyors</a>
        </div>
    </div>
</div>
