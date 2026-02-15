{{-- Breadcrumb --}}
<nav aria-label="breadcrumb animated slideInDown">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item text-white active" aria-current="page">{{ $title ?? app()->name() }}</li>
    </ol>
</nav>
