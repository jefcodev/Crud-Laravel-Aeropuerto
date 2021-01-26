<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aerolinea extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'aerolineas';

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
    protected $fillable = ['codigo_alinea', 'nombre_alinea', 'pais_alinea'];

    
}
