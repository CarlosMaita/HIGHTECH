<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto_Parameter extends Model
{
    protected $table = 'auto_parameters';


    public function product()
    {
    	return $this->belongsTo('App\Product', 'product_id');
    }


    public function posicion()
    {
    	return $this->belongsTo('App\Posicion', 'posicion_id');
    }
}
