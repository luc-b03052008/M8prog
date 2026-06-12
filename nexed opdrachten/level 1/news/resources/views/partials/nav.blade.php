<nav style="margin-bottom: 30px;">
    @foreach ($navSlugs as $slug)
        <a href="{{ route('news.show', $slug) }}" style="margin-right: 15px;">
            {{ ucfirst($slug) }}
        </a>
    @endforeach

    <a href="{{ route('news.index') }}">All News</a>
</nav>
