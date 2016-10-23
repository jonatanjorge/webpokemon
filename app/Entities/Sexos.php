<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Sexos extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sexos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sexo'];


//    RELACIONES DE UNO A MUCHOS
//    ACÁ CON HASONCE LE VAMOS A DECIR AL MODELO QUE UN POKEMON TIENE UN SEXO
//    EN EL CASO DE LA RELACIÓN 1-N EL QUE SE LLEVA EL FK ES EL QUE TIENE EL BELONGSTO, EL QUE LO PASA TIENE EL HASONE
//    LO MISMO PASA EN EL CASO DE N-N

    public function pokemones(){
        return $this->hasOne(Pokemones::class);
    }





    public function entrenadores(){
        return $this->hasOne(Entrenadores::class);
    }
    
}
