<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vuelo_aerolinea extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vuelo_aerolineas';

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
    protected $fillable = ['codigo_vuelo', 'codigo_aerolinea'];

    
}
