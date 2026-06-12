@php
    $items = [
        'sale' => ['label' => 'Sale','url' => url('/sale')],
        'shoes' => ['label' => 'All Shoes','url' => url('/shoes')],
        'sneakers' => ['label' => 'Sneakers','url' => url('/sneakers')],
        'boots' => ['label' => 'Boots','url' => url('/boots')],
    ];
@endphp

<nav>
    @foreach($items as $key => $item)
        <a href="{{ $item['url'] }}" class="{{ ($active ?? '') === $key ? 'active' : '' }}">{{ $item['label'] }}</a>
    @endforeach
</nav>
