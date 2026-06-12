<a href="{{ $href }}" {{ $attributes->class([
    'nav-link' => true,
    'active' => $active,
]) }}>
    {{ $slot }}
</a>
