<x-layout>
    <h1>{{ $page_title }}</h1>

    <a href="{{ route('portfolio.create') }}">Aggiungi nuovo lavoro</a>
    <ul>
        @if (!$works->isEmpty())
            @foreach ( $works as $work )
                <li>
                    <x-card>
                        @if ($work->image != '')
                            <img src="{{ asset('storage/images/' . $work->image) }}" alt="{{ $work->title }}" style="max-width: 200px">
                        @endif
                        <h2>{{ $work->title }}</h2>
                        <p>{{ $work->content }}</p>
                        <a href="{{ route('portfolio.show', [ $work->url, $work->id ]) }}">Scopri di più</a>
                    </x-card>
                </li>
            @endforeach
        @else
            <p>Non sono presenti lavori</p>
        @endif
    </ul>
</x-layout>