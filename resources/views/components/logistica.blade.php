@props([
    'lang' => 'en',
    'with_loader' => true,
    'with_carousel' => true,
    'back_to_top' => true,
    'with_breadcrumb' => true,
    'footer' => null,
    'meta_description' => null,
    'meta_title' => null,
    'meta_keywords' => null,
    'meta_data' => [],
    'head' => null,
    'stylesheets' => null,
    'scripts' => null,
    'carousel' => null,
    'icon' => null,
    'ico_type' => null,
])

<!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ $icon ?? asset('img/favicon.ico') }}" rel="{{ $icon_type ?? 'icon' }}">

    @if(!empty($meta_keywords))
        <meta content="{{ $meta_keywords }}" name="keywords">
    @endif
    
    @if (!empty($meta_description))
        <meta content="{{ $meta_description }}" name="description">
    @endif
    
    @if (!empty($meta_data))
        @foreach ($meta_data as $name => $content)
            <meta content="{{ $content }}" name="{{ $name }}">            
        @endforeach
    @endif

    <title>{{ $meta_title ?? config('app.name', 'Laravel') }}</title>

    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    {{-- Icons --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    {{-- library css--}}
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    {{-- Customized Bootstrap Stylesheet --}}
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}

    {{-- Template Stylesheet --}}
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    @vite(['resources/css/app.css'])

    @if (!empty($head))
        {!! $head !!}
    @endif

    @if (!empty($stylesheets))
        {!! $stylesheets !!}
    @endif
    
</head>
<body {{ $attributes->merge(['class' => 'multiport-agency-v2']) }}>

    @if ($with_loader)
        <x-widget.loader width="10rem" height="10rem"><img src="{{ asset('img/multiport-logo.webp') }}" style="width: auto; height: 100%;" /></x-widget.loader>
    @endif

    <x-widget.navbar />

    @if ($with_carousel)
        <x-widget.carousel :carousel="$carousel ?? []" />
    @else
        <x-widget.page-header :title="$meta_title ?? $page_title ?? app()->name()" :with_breadcrumb="$with_breadcrumb ?? true" />
    @endif

    @if(!$slot->isEmpty())
        {{ $slot }}
    @else
        <p>No content.</p>
    @endif
    
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        @if(!empty($footer))
            {!! $footer !!} 
        @else
            <x-widget.footer />
            <x-widget.copyright />
        @endif
    </div>

    @if ($back_to_top)
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
    @endif

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    @vite(['resources/js/app.js'])

    @if(!empty($scripts))
        {!! $scripts !!}
    @endif
</body>
</html>