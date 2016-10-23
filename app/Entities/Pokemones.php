<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Pokemones extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pokemones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'nivel', 'sexos_id', 'especies_id'];

//    SIEMPRE EN TODAS LAS TABLAS DONDE VAYAMOS A HACER UN ABM VAMOS A TENER QUE AGREGARLE LOS CAMPOS CREATED_AT Y UPDATED_AT QUE SON TIMESTAMPS, PARA QUE LARAVEL NOS GRABE LA FECHA Y HORA EN LA QUE DIMOS DE ALTA O ACTUALIZAMOS EL REGISTRO. SI NO LO PONEMOS NOS VA A TIRAR ERROR


//    RELACIONES DE UNO A MUCHOS
//    CON BELONGSTO VAMOS A DECIR QUE UN SEXO PERTENECE A MUCHOS POKEMONES
    public function sexos(){
        return $this->belongsTo(Sexos::class);
    }

    public function especies(){
        return $this->belongsTo(Especies::class,'especies_id');
    }
}
