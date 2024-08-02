<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Gallery</h1>
    <nav>
        <ul>
            <li>
                <a href="{{ route('home.index') }}">Home page</a>
            </li>
            <li>
                <a href="{{ route('portfolio.index') }}">Portfolio</a>
            </li>
            <li>
                <a href="{{ route('gallery.index') }}">Gallery</a>
            </li>
            <li>
                <a href="{{ route('blog.index') }}">Blog</a>
            </li>
            <li>
                <a href="{{ route('prodotti.index') }}">Prodotti</a>
            </li>
        </ul>
    </nav>

    @foreach ($pictures as $picture)
        <a href="{{ route('gallery.show', [ $picture['slug'], $picture['id'] ]) }}">
            <img src="{{ $picture['url'] }}" alt="{{ $picture['title'] }}" style="max-width: 250px;">
        </a>
        <p>{{ $picture['title'] }}</p>
    @endforeach
</body>
</html>