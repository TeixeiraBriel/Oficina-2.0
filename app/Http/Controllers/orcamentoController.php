<?php

namespace App\Http\Controllers;
use App\Orcamento;

use Illuminate\Http\Request;

class orcamentoController extends Controller
{
    public function index(){
        return view('orcamento.index');
    }

    public function create(){
        return view('orcamento.create');
    }
   
    public function store(Request $request){      
        $Orcamentos = Orcamento::create($request->all()); 

        $request->session()->flash('mensagem',"Candidato {$Orcamentos->name} criado com sucesso.");
        return redirect(route('index'));
    }

    public function find(Request $request){      
        
        $Orcamentos = Orcamento::where('cliente', $request->cliente)
                                        ->orWhere('dataOrcamento', $request->dataOrcamento)
                                        ->orWhere('vendedor', $request->vendedor)->orderBy('dataOrcamento', 'desc')->get(); 
        ($Orcamentos);
        return view('orcamento.resultado', compact('Orcamentos'));
    }
}
