<x-layout>
    <h1>{{ $page_title }}</h1>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <h2>{{ $job['title'] }}</h2>
                <p>{{ $job['content'] }}</p>
                <a href="{{ route('lavori.show', [$job['url'], $job['id']]) }}">Scopri di più</a>
            </li>
        @endforeach
    </ul>
</x-layout>