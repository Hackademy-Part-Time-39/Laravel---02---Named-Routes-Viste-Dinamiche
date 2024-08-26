<x-layout>
    <h1>Profilo utente</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <p>{{ $error }}</p>
            </div>
        @endforeach
    @endif

    <form action="/user/profile-information" method="post">
        @csrf
        {{ method_field('PUT') }}

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Mario Rossi" value="{{ $user->name }}">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="mario@email.it" value="{{ $user->email }}">

        <input type="submit" value="Aggiorna profilo" class="btn btn-primary">
    </form>

    <form action="/user/password" method="post">
        @csrf
        {{ method_field('PUT') }}

        <label for="current_password">Password corrente</label>
        <input type="password" name="current_password" id="current_password" class="form-control">

        <label for="password">Nuova password</label>
        <input type="password" name="password" id="password" class="form-control">

        <label for="password_confirmation">Conferma nuova password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">

        <input type="submit" value="Aggiorna password" class="btn btn-primary">
    </form>
</x-layout>