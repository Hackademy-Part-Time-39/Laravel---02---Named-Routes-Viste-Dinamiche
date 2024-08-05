<x-layout>
    <h1>{{ $page_title }}</h1>
    <ul>
        @foreach ( $works as $work )
            <li>
                <x-card>
                    <h2>{{ $work['title'] }}</h2>
                    <p>{{ $work['content'] }}</p>
                    <a href="{{ route('portfolio.show', [ $work['url'], $work['id'] ]) }}">Scopri di più</a>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>