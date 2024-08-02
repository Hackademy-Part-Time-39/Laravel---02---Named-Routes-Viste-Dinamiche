<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($works as $work)
        @if ($current_id == $work['id'])
            <h1>{{ $work['title'] }}</h1>
            <p>{{ $work['content'] }}</p>
        @endif
    @endforeach

    <h2>Altri lavori</h2>
    @foreach ($works as $work)
        <h3>{{ $work['title'] }}</h3>
        <p>{{ $work['content'] }}</p>
        <a href="{{ route('portfolio.show', [ $work['url'], $work['id'] ]) }}">Scopri di più</a>
    @endforeach
</body>
</html>