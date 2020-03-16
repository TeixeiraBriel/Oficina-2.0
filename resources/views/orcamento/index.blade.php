@extends('layouts.layout')

@section('Titulo')
    Inicio
@endsection

@section('cabecalho')
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Pesquisar Orçamentos</h1>
        <div class="d-flex flex-row-reverse">
            <a href="{{ route('createOrcamento') }}" ><button type="button" class="btn btn-primary">Novo</button></a>
        </div>
    </div>
    </div>
    
@endsection

@section('conteudo')
<form method="post">
    @csrf
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nome Cliente" name="cliente">
        </div>
    </div>

    <div class="form-group row justify-content-md-center mt-3" >
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Data</div>
                </div>
                <input type="datetime-local" class="form-control" name="dataOrcamento">
            </div>
        </div>        
    </div> 
    <div class="row justify-content-md-center mt-2">
        <div class="col-md-6">
            <input type="string" class="form-control" placeholder="Nome Vendedor" name="vendedor">
        </div>
    </div>    
    <div class="row justify-content-md-center mt-3">
        <button type="submit" class="btn btn-primary">Pesquisar</button>    
    </div>
</form>   
@endsection

