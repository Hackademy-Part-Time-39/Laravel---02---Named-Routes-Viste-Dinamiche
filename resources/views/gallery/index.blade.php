<x-layout>
    <x-page-title title="Gallery" />

    @foreach ($pictures as $picture)
        <a href="{{ route('gallery.show', [ $picture['slug'], $picture['id'] ]) }}">
            <img src="{{ $picture['url'] }}" alt="{{ $picture['title'] }}" style="max-width: 250px;">
        </a>
        <p>{{ $picture['title'] }}</p>
    @endforeach
</x-layout>