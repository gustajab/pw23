@extends('includes.base')

@section('title', 'Produtos')

@section('content')
@if(session('sucesso'))
<div style="background-color: greenyellow; color:peru;">
    {{ session('sucesso') }}
    <marquee speed="10">
    </div>
    @endif
    <table border="5" style="border-color:chocolate">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Editar</th>
        </tr>

        @foreach ($prods as $prod)
        <tr>
            <td><a href="{{ route('produtos.view', $prod->id) }}"> {{$prod->name }}</a></td>
            <td>R$ {{ number_format ($prod->price, 2, ',', '.') }}</td>
            <td>{{ $prod->quantity }}</td>
            <td><a href="{{ route('produtos.edit', $prod->id )}}">Editar</a></td>
        </tr>
        @endforeach
    </table>
    <p>Produtos funcionando</p>
    <a href="{{ route('produtos.add') }}">Adicionar produto</a>
@endsection


