<x-layout>
    <h1>Accedi</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <p>{{ $error }}</p>
            </div>
        @endforeach
    @endif

    <form action="/login" method="post">

        @csrf

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="mario@email.it">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">

        <input type="submit" value="Accedi" class="btn btn-primary">

    </form>
</x-layout>