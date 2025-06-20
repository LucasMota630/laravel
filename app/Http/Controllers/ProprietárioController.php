<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProprietárioModel;

class ProprietárioController extends Controller
{
    function formulario(){
        return view('proprietario-formulario');
    }

    function store(Request $dados){
        if ($dados->id == '') {
            //fazemos ação de create aqui...
            $proprietario = new ProprietárioModel();
            $proprietario->create($dados->all());
        } else {
            //fazemos a ação de update aqui
            $proprietario = ProprietárioModel::find($dados->id); //localiza o registro
            $update = $proprietario->update($dados->all()); //atualiza
        }
        
        //recupera todos os registros atualizados
        $proprietarios = ProprietárioModel::all();
        
        //após adicionar ou editar redireciona para a página listar
        return view('proprietario-listar', ['proprietarios'=>$proprietarios]);
    }

    function listar(){
        $proprietarios = ProprietárioModel::all();
        return view('proprietario-listar', ['proprietarios'=>$proprietarios]);
    }

    function remove($id){
        ProprietárioModel::destroy($id);

        return redirect()->route('proprietario-listar');
    }
    
    function editar($id){
				$proprietario = ProprietárioModel::find($id);
        return view('proprietario-formulario', ['proprietario' => $proprietario]);
        //vamos enviar o $proprietario que veio do BD para a página proprietario-formulario
    }
}