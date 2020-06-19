<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chumacera_Parameter extends Model
{
    protected $table = 'chumacera_parameters';

    public function product()
    {
    	return $this->belongsTo('App\Product', 'product_id');
    }

    public function diametroChum()
    {
    	return $this->belongsTo('App\Diametro_Chum', 'diametro_chum_id');
    }

    public function tipoChum()
    {
    	return $this->belongsTo('App\Tipo_Chum', 'tipo_chum_id');
    }

    public function formaChum()
    {
    	return $this->belongsTo('App\Forma_Chum', 'forma_chum_id');
    }
}
