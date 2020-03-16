@extends('layouts.layout')

@section('Titulo')
    Inicio
@endsection

@section('cabecalho')
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Orçamentos</h1>
        <div class="d-flex flex-row-reverse">
            <a href="{{ route('index') }}" ><button type="button" class="btn btn-danger">Voltar</button></a>
        </div>
    </div>
    </div>
    
@endsection

@section('conteudo')
    @include('includes.table', ['orcamento' => $Orcamentos])
@endsection

