<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Anuncio extends Model
{
    
    protected $fillable=[
        'titulo', 
        'endereco',
        'cep',
        'bairro',
        'univ',
        'area_total',
        'qtd_quartos',
        'qtd_hospedes',
        'descricao',
        'preco',
        'image'
        ];

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
