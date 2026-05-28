<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    @if (request()->is('none'))
        <h1>404 Not Found</h1>
    @else
        <h1>Products</h1>
        <ul>
            @foreach ($products as $product)
                <li>
                    <a href="{{ url('products/'.$product['id']) }}">{{ $product['name'] }}</a>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
