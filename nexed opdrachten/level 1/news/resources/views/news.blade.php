<!DOCTYPE html>
<html>
<head>
    <title>News Overview</title>
</head>
<body>

@include('partials.nav')

<h1>News Overview</h1>

@foreach ($articles as $article)
    <article style="margin-bottom: 30px;">
        <h2>
            <a href="{{ route('news.show', $article['slug']) }}">
                {{ $article['title'] }}
            </a>
        </h2>
        <p>{{ $article['intro'] }}</p>
    </article>
@endforeach

</body>
</html>




