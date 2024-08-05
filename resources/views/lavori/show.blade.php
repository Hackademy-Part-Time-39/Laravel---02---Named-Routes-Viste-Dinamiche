<x-layout>
    @foreach ($jobs as $job)
        @if ($current_id == $job['id'])
            <h1>{{ $job['title'] }}</h1>
            <p>{{ $job['content'] }}</p>
        @endif
    @endforeach

    <a href="{{ route('lavori.index') }}">Torna a tutte le offerte di lavori</a>
</x-layout>