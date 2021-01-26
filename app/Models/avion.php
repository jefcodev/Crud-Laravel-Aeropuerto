<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class avion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'avions';

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
    protected $fillable = ['placa_avi', 'capacidad_avi', 'fk_aerolinea_id_alinea'];

    
}
