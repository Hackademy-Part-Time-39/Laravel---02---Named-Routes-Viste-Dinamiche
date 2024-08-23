<x-layout>
    <h1>Test</h1>
    <p>Blog abc</p>
    <a href="{{ route('blog.create') }}">Crea nuovo articolo</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <x-card>
                    @if ($post->image != '')
                        <img src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->title }}" class="img-responsive" style="max-width: 200px">
                    @endif
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <a href="{{ route('blog.show', [ $post->url, $post->id ]) }}">Leggi tutto</a>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>