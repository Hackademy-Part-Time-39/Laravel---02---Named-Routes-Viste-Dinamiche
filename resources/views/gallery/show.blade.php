<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($pictures as $picture)
        @if ( $current_id == $picture['id'] )
            <h1>{{ $picture['title'] }}</h1>
            <img src="{{ $picture['url'] }}" alt="{{ $picture['title'] }}" style="max-width: 500px;">
            <p>{{ $picture['description'] }}</p>
        @endif
    @endforeach

    <a href="{{ route('gallery.index') }}">Torna alla gallery</a>
</body>
</html>