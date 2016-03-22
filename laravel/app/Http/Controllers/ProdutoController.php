<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller{
    public function lista(){
        $produtos = DB::select("select * from produtos");

        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra(){
        $id = Request::route('id');
        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        if(empty($resposta)) {
            return "Esse produto n�o existe";
        }
        return view('detalhes')->with('p', $resposta[0]);
    }
}