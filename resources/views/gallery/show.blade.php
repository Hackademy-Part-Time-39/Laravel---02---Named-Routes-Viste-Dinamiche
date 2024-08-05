<x-layout>
    @foreach ($pictures as $picture)
        @if ( $current_id == $picture['id'] )
            <h1>{{ $picture['title'] }}</h1>
            <img src="{{ $picture['url'] }}" alt="{{ $picture['title'] }}" style="max-width: 500px;">
            <p>{{ $picture['description'] }}</p>
        @endif
    @endforeach

    <a href="{{ route('gallery.index') }}">Torna alla gallery</a>
</x-layout>