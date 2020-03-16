@extends('layouts.layout')

@section('Titulo')
    Novo
@endsection

@section('cabecalho')
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Novo Orçamento</h1>
        <div class="d-flex flex-row-reverse">
            <a href="{{ route('index') }}" ><button type="button" class="btn btn-danger">Voltar</button></a>
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
        <div class="form-group row justify-content-md-center mt-3" >
            <div class="col-md-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">R$</div>
                    </div>
                    <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" placeholder="Valor Orçamento" name="valor">
                </div>
            </div>        
        </div>   
        <div class="row justify-content-md-center mt-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Descrição" name="descricao">
            </div>
        </div>    
        <div class="row justify-content-md-center mt-3">
            <button type="submit" class="btn btn-primary">Adicionar</button>    
        </div>
    </form>   
    
@endsection