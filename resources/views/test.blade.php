<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: black; color: white;">
    @php
        $letsGo = "Let's go";
    @endphp
    <h2>Hey HO {{ $user }} {{ $letsGo }}</h2>

    <ol>
        <li>Usuario: {{ auth()->user()->name }}</li>
        {{-- <li>Documento: {{ auth()->user()->client->document }}</li> --}}
        <li>Documento: {{ App\Models\Client::where('user_id', auth()->user()->id)->first()->document }}</li>
        <li>Status da assinatura: {{ auth()->user()->client->signatures->first()->status->name }}</li>
    </ol>
</body>
</html>