<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title_tag }}</title>
</head>
<body>
    <h1>{{ $page_title }}</h1>
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
    <p>{{ $paragraph }}</p>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>{{ $post['title'] }}</h2>
                <p>{{ $post['content'] }}</p>
                <a href="{{ route('blog.show', [ $post['url'], $post['id'] ]) }}">Leggi tutto</a>
            </li>
        @endforeach
    </ul>
</body>
</html>