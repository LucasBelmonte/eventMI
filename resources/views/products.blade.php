@extends('layouts.main')

@section('title','Produtos')

@section('content')
<h1>Tela de produtos</h1>
<a href="http://localhost/hdcevents/public/">Voltar para home</a>
@if ($busca!="")
    <p>O susuario ta buscando por:{{$busca}}</p>

@endif

@endsection
