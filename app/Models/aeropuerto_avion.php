<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aeropuerto_avion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'aeropuerto_avions';

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
    protected $fillable = ['codigo_aeropuerto', 'numero_placa'];

    
}
