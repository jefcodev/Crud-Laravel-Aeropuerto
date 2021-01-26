<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vuelo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vuelos';

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
    protected $fillable = ['codigo_vuelo', 'plazas_vacias', 'plazas_ocupadas', 'vuelo_directo', 'vuelo_escala', 'fecha_vuelo'];

    
}
