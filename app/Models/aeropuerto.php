<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aeropuerto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'aeropuertos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo_aero', 'nombre_aero', 'ciudad_aero', 'pais_aero'];

    
}
