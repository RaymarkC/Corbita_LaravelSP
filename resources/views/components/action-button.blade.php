@props(['url', 'color' => 'primary'])

<a href="{{ $url }}" {{ $attributes->merge(['class' => "btn btn-sm btn-$color rounded-pill shadow-sm px-3"]) }}>
    {{ $slot }}
</a>