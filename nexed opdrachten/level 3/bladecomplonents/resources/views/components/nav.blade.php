<nav>
    <x-nav-link href="{{ url('/sale') }}" :active="$active === 'sale'">Sale</x-nav-link>
    <x-nav-link href="{{ url('/shoes') }}" :active="$active === 'shoes'">All Shoes</x-nav-link>
    <x-nav-link href="{{ url('/sneakers') }}" :active="$active === 'sneakers'">Sneakers</x-nav-link>
    <x-nav-link href="{{ url('/boots') }}" :active="$active === 'boots'">Boots</x-nav-link>
</nav>
