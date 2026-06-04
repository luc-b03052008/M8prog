<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>News Views</title>

    
</head>

<body>
    <h1>News Views</h1>

    @foreach ($articles as $article)
        <article>
            <h2>{{ $article['title'] }}</h2>
            <p>{{ $article['intro'] }}</p>
        </article>
    @endforeach
</body>
</html>



