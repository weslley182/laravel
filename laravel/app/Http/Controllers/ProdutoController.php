<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;

/**
 * Class ProdutoController
 * @package App\Http\Controllers
 */
class ProdutoController extends Controller{
    /**
     * @return $this
     */
    public function lista(){
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    /**
     * @return $this|string
     */
    public function mostra($id){
        $resposta = Produto::find($id);

        if(empty($resposta)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $resposta);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function novo(){
        return view('produto.formulario');
    }

    public function adiciona(){
        Produto::create(Request::all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function listaJson(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');

    }
}