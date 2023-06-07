@extends('includes.base')

@section('title', 'Produtos')

@section('content')

<h2>Apagar produto</h2>
    <p>Você está prestes a apagar {{ $prod->name }}.</p>
    <p>tem certeza de que deseja apagar</p>
@endsection
