@extends('includes.base')

@section('title', 'Produtos')

@section('content')
    <table border="5" style="border-color:chocolate">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>

        @foreach ($prods as $prod)
        <tr>
            <td>{{ $prod->name }}</td>
            <td>R$ {{ number_format ($prod->price, 2, ',', '.') }}</td>
            <td>{{ $prod->quantity }}</td>
        </tr>
        @endforeach
    </table>
    <p>Produtos funcionando</p>
    <a href="{{ route('produtos.add') }}">Adicionar produto</a>
@endsection


