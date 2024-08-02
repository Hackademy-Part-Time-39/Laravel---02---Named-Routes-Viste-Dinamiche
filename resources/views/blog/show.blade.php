<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ( $posts as $post )
        @if ( $current_id == $post['id'] )
            <h1>{{ $post['title'] }}</h1>
            <p>{{ $post['content'] }}</p>
        @endif
    @endforeach

    <h2>Altri articoli</h2>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h3>{{ $post['title'] }}</h3>
                <p>{{ $post['content'] }}</p>
                <a href="{{ route('blog.show', [ $post['url'], $post['id'] ]) }}">Leggi tutto</a>
            </li>
        @endforeach
    </ul>
</body>
</html>