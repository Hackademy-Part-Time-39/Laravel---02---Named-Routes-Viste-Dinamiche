<x-layout>
    <h1>{{ $page_title }}</h1>
    <p>{{ $paragraph }}</p>
    <ul>
        @foreach ($posts as $post)
            <li>
                <x-card>
                    <h2>{{ $post['title'] }}</h2>
                    <p>{{ $post['content'] }}</p>
                    <a href="{{ route('blog.show', [ $post['url'], $post['id'] ]) }}">Leggi tutto</a>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>