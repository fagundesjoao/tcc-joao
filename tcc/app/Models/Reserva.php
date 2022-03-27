<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
           'data_inicial', 
           'data_final', 
           'preco', 
           'total',
           'ocupado'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function anuncio(){
        return $this->belongsTo('App\Models\Anuncio');
    }
}
