<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $timestamps=false;
    protected $table='Productos';
    protected $primaryKey='pro_id';
    protected $fillable=['pro_nombre','pro_codigo' ];
    
}
