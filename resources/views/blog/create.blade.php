<x-layout>
    <h1>Crea un nuovo articolo</h1>

    <form action="{{ route('blog.store') }}" method="POST">
        @csrf
        <input class="form-control" type="text" name="title" placeholder="Titolo">
        <textarea name="content" cols="30" rows="10" class="form-control" placeholder="Contenuto"></textarea>
        <input class="form-control" type="text" name="url" placeholder="Url">
        <input class="btn btn-primary" type="submit" value="Crea">
    </form>
</x-layout>