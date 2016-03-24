<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

/**
 * Class ProdutoController
 * @package App\Http\Controllers
 */
class ProdutoController extends Controller{
    /**
     * @return $this
     */
    public function lista(){
        $produtos = DB::select("select * from produtos");

        return view('produto.listagem')->with('produtos', $produtos);
    }

    /**
     * @return $this|string
     */
    public function mostra(){
        $id = Request::route('id');
        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        if(empty($resposta)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $resposta[0]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function novo(){
        return view('produto.formulario');
    }

    public function adiciona(){

        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');

        DB::insert('insert into produtos values (null, ?, ?, ?, ?)',
            array($nome, $valor, $descricao, $quantidade));

        return view('produto.adiciona')->with('nome', $nome);
    }
}