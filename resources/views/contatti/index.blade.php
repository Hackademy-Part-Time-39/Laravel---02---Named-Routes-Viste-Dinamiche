<x-layout>
    <x-page-title title="Contatti" />

    <form action="{{ route('contatti.submit') }}" method="POST">
        @csrf
        <input class="form-control" type="text" name="nome_cognome" placeholder="Nome e cognome">
        <input class="form-control" type="email" name="email" placeholder="Email">
        <input class="form-control" type="text" name="azienda" placeholder="Azienda">
        <textarea class="form-control" name="messaggio" cols="30" rows="10" placeholder="Messaggio"></textarea>
        <input class="btn btn-primary" type="submit" value="Invia">
    </form>
</x-layout>