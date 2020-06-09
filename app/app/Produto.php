<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        "descricao", 'preco', "cor", "peso"
    ];

    /*
     * Aqui estamos dizendo no laravel essa relação entre marca e produto
     */
    public function marca(){
        return $this->belongsTo('App\Marca','marca_id');
    }
}
