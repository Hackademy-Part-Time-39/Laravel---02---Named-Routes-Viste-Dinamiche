<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ( $products as $product )
        @if ( $current_id == $product['id'] )
            <h1>{{ $product['title'] }}</h1>
            <img src="{{ $product['image_url'] }}" alt="{{ $product['title'] }}" style="max-width: 500px;">
            <p>{{ $product['description'] }}</p>
        @endif
    @endforeach

    <a href="{{ route('prodotti.index') }}">Torna a tutti i prodotti</a>
</body>
</html>