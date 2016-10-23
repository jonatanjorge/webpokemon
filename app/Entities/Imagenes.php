<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'imagenes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['especies_id','image'];

    public function especies(){
        return $this->belongsTo(Especies::class);
    }

}
