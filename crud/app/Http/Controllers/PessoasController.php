<?php

namespace App\Http\Controllers;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        Pessoa::create([
            'nome' =>$request->nome,
            'email'=>$request->email,
            'cpf'=>$request->cpf,
            'data_nasc'=>$request->data_nasc,
            'nacionalidade'=>$request->nacionalidade
        ]);
        return "Pessoa cadastrada com sucesso!";
        }
    public function show()
    {
        $pessoas = Pessoa::all();
        return view('todos',['pessoas' => $pessoas]);
     }
     
    
   
}


