<x-app-layout>
    <x-slot name="header">
        <h3>Header</h3>
    </x-slot>
    <ol>
        <li>Nome: {{ $name }}</li>        
        <li>Documento: {{ $document }}</li>
        <li>Status da assinatura: {{ $status }}</li>
        <li>Bebida: {{ $params }}</li>
    </ol>
</x-app-layout>