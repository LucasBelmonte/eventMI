@extends('layouts.main')

@section('title','Produto')

@section('content')
<a href="http://localhost/hdcevents/public/">Voltar para home</a>

@if ($id!=1)
<p>Exibindo produtos id:{{$id}}</p>

@else
<p>Exibindo produtos id:{{$id}}</p>

@endif



@endsection
