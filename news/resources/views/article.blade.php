<!DOCTYPE html>
<html>
<head>
    <title>{{ $article['title'] }}</title>
</head>
<body>

@include('partials.nav')

<h1>{{ $article['title'] }}</h1>

<p>{{ $article['intro'] }}</p>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
</p>

</body>
</html>
