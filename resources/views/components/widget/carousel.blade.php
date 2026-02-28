{{-- Carousel Start --}}

@props([
    'carousel' => [],
])

<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative mb-5">
        @empty($carousel)
            <x-widget.carousel-item
                :image="asset('img/multiport-agency-fzco-banner.webp')"
                background="rgba(6, 3, 21, .5)"
                primary_button_text="Read More" 
                primary_button_link="#" 
                secondary_button_text="Free Quote" 
                secondary_button_link="#"
            >
                <x-slot:title>Efficient. <span class="text-primary">Reliable</span>. Maritime Excellence.</x-slot:title>
                <x-slot:subtitle>Transport & Logistics Solution</x-slot:subtitle>
                {{-- <x-slot:text>
                    Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.
                </x-slot:text> --}}
            </x-widget.carousel-item>

            {{-- <x-widget.carousel-item 
                :image="asset('img/carousel-2.jpg')"
                background="rgba(6, 3, 21, .5)"
                primary_button_text="Read More" 
                primary_button_link="#" 
                secondary_button_text="Free Quote" 
                secondary_button_link="#"
            >
                <x-slot:title>#1 Place For Your <span class="text-primary">Logistics</span> Solution</x-slot:title>
                <x-slot:subtitle>Transport & Logistics Solution</x-slot:subtitle>
                <x-slot:text>
                    Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.
                </x-slot:text>
            </x-widget.carousel-item> --}}
        @else
            @foreach ($carousel as $item)
                <x-widget.carousel-item 
                    :image="asset($item->image)"
                    :background="$item->background ?? 'rgba(6, 3, 21, .5)'"
                    :primary_button_text="$item->primary_button_text ?? ''" 
                    :primary_button_link="$item->primary_button_link ?? '#'" 
                    :secondary_button_text="$item->secondary_button_text ?? ''" 
                    :secondary_button_link="$item->secondary_button_link ?? '#'"
                >
                    <x-slot:title>{!! $item->title !!}</x-slot:title>
                    <x-slot:subtitle>{!! $item->subtitle !!}</x-slot:subtitle>
                    <x-slot:text>{!! $item->text !!}</x-slot:text>
                </x-widget.carousel-item>
            @endforeach
        @endempty
        
    </div>
</div>
{{-- Carousel End --}}
