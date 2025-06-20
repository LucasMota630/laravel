<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnúncioModel;

class AnúncioController extends Controller
{
    function formulario(){
        return view('anuncio-formulario');
    }

    function store(Request $dados){
        if ($dados->id == '') {
            //fazemos ação de create aqui...
            $anuncio = new AnúncioModel();
            $anuncio->create($dados->all());
        } else {
            //fazemos a ação de update aqui
            $anuncio = AnúncioModel::find($dados->id); //localiza o registro
            $update = $anuncio->update($dados->all()); //atualiza
        }
        
        //recupera todos os registros atualizados
        $anuncios = AnúncioModel::all();
        
        //após adicionar ou editar redireciona para a página listar
        return view('anuncio-listar', ['anuncios'=>$anuncios]);
    }

    function listar(){
        $anuncios = AnúncioModel::all();
        return view('anuncio-listar', ['anuncios'=>$anuncios]);
    }

    function remove($id){
        AnúncioModel::destroy($id);

        return redirect()->route('anuncio-listar');
    }
    
    function editar($id){
				$anuncio = AnúncioModel::find($id);
        return view('anuncio-formulario', ['anuncio' => $anuncio]);
        //vamos enviar o $anuncio que veio do BD para a página anuncio-formulario
    }
}