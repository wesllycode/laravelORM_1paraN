<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = [
        "nome"
    ];


    /*
     *  Aqui definirmos que a marca ela pode pertencer a vários produtos
     */
    public function produtos(){
        return $this->hasMany('App\Produto', 'marca_id');
    }
}
