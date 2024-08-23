<x-layout>
    <h1>Crea un nuovo lavoro</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <p>{{ $error }}</p>
            </div>
        @endforeach
    @endif

    <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label for="title">Titolo</label>
        <input class="form-control" id="title" type="text" name="title" placeholder="Titolo" value="{{ old('title') }}">

        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Contenuto">{{ old('content') }}</textarea>

        <label for="url">Url</label>
        <input class="form-control" id="url" type="text" name="url" placeholder="Url" value="{{ old('url') }}">

        <label for="image">Image</label>
        <input class="form-control" type="file" id="image" name="image">

        <input class="btn btn-primary" type="submit" value="Crea">

    </form>
</x-layout>