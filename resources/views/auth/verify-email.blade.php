<x-layout>
    <h1>Verifica email</h1>
    <p>Clicca il link nella tua casella email per verificare il tuo indirizzo.</p>

    <form action="/email/verification-notification" method="post">
        @csrf
        <input type="submit" class="btn btn-primary" value="Reinvia la mail di verifica">
    </form>
</x-layout>