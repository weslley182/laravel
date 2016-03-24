<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model{

    #por padrao o eoquent ja sabe que a tabela é o nome da classe minusculo no plural
    #não seria necessáio esta instrução
    protected $table = 'produtos';

    #desabilita o ORM
    public $timestamps = false;

    #permite salvar estes campos
    protected $fillable = ['nome', 'descricao', 'valor', 'quantidade'];

    #não permite salvar
    protected $guarded = ['id'];
}
