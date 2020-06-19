<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie6000_Parameter extends Model
{
    protected $table = 'serie6000_parameters';

    public function product()
    {
    	return $this->belongsTo('App\Product', 'product_id');
    }

    public function tipoSello()
    {
    	return $this->belongsTo('App\Tipo_Sello', 'tipo_sello_id');
    }
}
