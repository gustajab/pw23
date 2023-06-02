@extends('includes.base')

@section('title', 'Produtos - ver')

@section('content')
    <h2>{{$prod->name}}</h2>
    <p>preço:  {{ number_format ($prod->price, 2, ',', '.') }} </p>
    <p>Quantidade: {{ $prod->quantity}}</p>
    <p>
        <a href="{{route('produtos')}}">Voltar</a>
    </p>
@endsection
