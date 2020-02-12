<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    public function inventario()
    {
        return $this->belongsTo('App\Inventario');
    }
}
