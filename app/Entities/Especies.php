<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Especies extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'especies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];

/*    RECIBE EL MODELO
*     EL NOMBRE DEL CAMPO QUE RECIBE EL KF
 *    EL NOMBRE DEL CAMPO ID DE LA TABLA QUE MANDA EL FK
*/
//    SI NUESTRA TABLA TIENE EL CAMPO ID SIEMPRE NO ES NECESARIO ESPECIFICAR EN LA RELACION EL CAMPO ID PORQUE LARAVEL LO TOMA AUTOMATIICAMENTE, SI TU ID SE LLAMA ID_POKEMONES ENTONCES SI HAY QUE PONERLO.
//    MISMO PASA CON EL FK, SI SE LLAMA IGUAL QUE LA TABLA (EL PLURAL), GUIÓN BAJO ID ( _id ), TAMPOCO ES NECESARIO PONERLO PORQUE YA LARAVEL TE LO TOMA POR DEFAULT DE ESA FORMA
    public function pokemones(){
        return $this->hasOne(Pokemones::class,'especies_id');
    }


    //    RELACIONES N-N CREA UNA TABLA APARTE, POR ENDE AMBOS SON BELONGSTOMANY
    /*
     * PRIMERO ESPECIFICAMOS EL MODELO RELACIONADO
     * SEGUNDO LA TABLA INTERMEDIA
     * TERCERO COMO SE LLAMA EL CAMPO QUE RECIBE EL FK DE ESTA TABLA EN ESA INTERMEDIA
     */
    public function tipos(){
        return $this->belongsToMany(Tipos::class,'especies_tipos','tipos_id');
    }


    public function imagenes(){
        return $this->hasOne(Imagenes::class);
    }

}
