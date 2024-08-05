<x-layout>
    <h1>Prodotti</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <img src="{{ $product['image_url'] }}" alt="{{ $product['title'] }}" style="max-width: 250px;">
                <h2>{{ $product['title'] }}</h2>
                <p>{{ $product['description'] }}</p>
                <a href="{{ route('prodotti.show', [ $product['url'], $product['id'] ]) }}">Scopri di più</a>
            </li>
        @endforeach
    </ul>
</x-layout>