<?php

namespace App\Http\Controllers;

use App\http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Contato;

class ContatoController extends Controller
{
    
    public function index()
    {

        $contatos = [
            (object)["nome"=> "maria","tel"=>"92929293"],
            (object)["nome"=> "Pedro","tel"=>"23567423"]
        ];


        $contato = new Contato();
        $con = $contato-> lista();
        dd($con->nome);


          
        return view('contato.index',compact('contatos'));
    }


    public function criar(Request $req)
    {
        dd($req['nome']);
        return "Esse é o Criar do Controller";
    }

    public function editar()
    {
        return "Esse é o Editar do Controller";
    }

}
