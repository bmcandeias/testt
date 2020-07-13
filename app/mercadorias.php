<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mercadorias extends Model
{
    protected $fillable = [
        'id','nomer','preco','imagem','ratingm','data_chegada','tamanho','quantidade','id_categoria',
    ];
}
