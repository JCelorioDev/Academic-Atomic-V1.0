<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $table = 'personas';
    public $timestamps = false;
    public $fillable = ['Nombre','Apellido','Cedula','Avatar'];
}
