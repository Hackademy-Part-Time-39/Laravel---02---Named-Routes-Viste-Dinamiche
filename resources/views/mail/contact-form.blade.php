<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nuovo messaggio dal form contatti</h1>
    <p>Nome e cognome: {{ $nome_cognome }}</p>
    <p>Email: {{ $email }}</p>
    <p>Azienda: {{ $azienda }}</p>
    <p>Messaggio: {{ $messaggio }}</p>
</body>
</html>