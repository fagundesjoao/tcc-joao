<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $fillable=[
        'id_user',
        'titulo', 
        'endereco',
        'cep',
        'univ',
        'area_total',
        'qtd_quartos',
        'descricao',
        'preco'
        ];

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
