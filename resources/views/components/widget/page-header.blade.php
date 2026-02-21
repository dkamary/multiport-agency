{{-- Page Header --}}

@props([
    'with_breadcrumb' => true,
    'title' => 'Page Title',
    'image' => asset('img/carousel-1.jpg'),
])

<div class="container-fluid page-header py-5" style="margin-bottom: 6rem; background: linear-gradient(rgba(6, 3, 21, .5), rgba(6, 3, 21, .5)), url({{ $image }}) center center no-repeat;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{!! $title !!}</h1>
        @if($with_breadcrumb)
            <x-widget.breadcrumb :$title />
        @endif
    </div>
</div>