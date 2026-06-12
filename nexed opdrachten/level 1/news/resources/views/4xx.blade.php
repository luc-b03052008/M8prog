<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>News Views | Oops</title>
</head>
<body>

@include('partials.nav')

<h1>{{ $exception->getStatusCode() }}: Oops</h1>

<p>{{ $exception->getMessage() }}</p>

</body>
</html>
