<x-layout>
    @foreach ( $products as $product )
        @if ( $current_id == $product['id'] )
            <h1>{{ $product['title'] }}</h1>
            <img src="{{ $product['image_url'] }}" alt="{{ $product['title'] }}" style="max-width: 500px;">
            <p>{{ $product['description'] }}</p>
        @endif
    @endforeach

    <a href="{{ route('prodotti.index') }}">Torna a tutti i prodotti</a>
</x-layout>