<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Entrenadores extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'entrenadores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'sexos_id', 'edad'];

    public function sexos(){
        return $this->belongsTo(Sexos::class);
    }

}
