@extends('layouts.main')

@section('title','Produtos')

@section('content')
<h1>Tela de produtos</h1>




<a href="/">Voltar para home</a>
@if ($busca!="")
    <p>O usuario ta buscando por:{{$busca}}</p>

@endif

@endsection
