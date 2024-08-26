<x-layout>
    <h1>Registrati</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <p>{{ $error }}</p>
            </div>
        @endforeach
    @endif

    <form action="/register" method="post">

        @csrf

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Mario Rossi">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="mario@email.it">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">

        <label for="password_confirmation">Conferma password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">

        <input type="submit" value="Registrati" class="btn btn-primary">
    </form>
</x-layout>