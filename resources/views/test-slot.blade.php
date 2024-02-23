<x-app-layout>
    <x-slot name="header">
        <h3>Header</h3>
    </x-slot>
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

</x-app-layout>