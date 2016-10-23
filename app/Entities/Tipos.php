<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];

//    RELACIONES N-N CREA UNA TABLA APARTE, POR ENDE AMBOS SON BELONGSTOMANY
/*
 * PRIMERO ESPECIFICAMOS EL MODELO RELACIONADO
 * SEGUNDO LA TABLA INTERMEDIA
 * TERCERO COMO SE LLAMA EL CAMPO QUE RECIBE EL FK DE ESTA TABLA EN ESA INTERMEDIA
 */
    public function especies(){
        return $this->belongsToMany(Especies::class,'especies_tipos','especies_id');
    }
}
