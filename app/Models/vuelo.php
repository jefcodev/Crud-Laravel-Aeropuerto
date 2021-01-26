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
    protected $fillable = ['codigo_vuelo', 'hdesp_vuelo', 'aero_desp_vuelo', 'hater_vuelo', 'aero_ater_vuelo', 'fecha_vuelo', 'pocup_vuelo', 'pvac_vuelo', 'escala_vuelo', 'fk_avion_id_avi'];

    
}