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
    <p>{{ $paragraph }}</p>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>{{ $post['title'] }}</h2>
                <p>{{ $post['content'] }}</p>
                <a href="#">Leggi tutto</a>
            </li>
        @endforeach
    </ul>
</body>
</html>