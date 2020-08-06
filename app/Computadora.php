<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    /*Este hace lo contrario al fillable (que dice cuáles pueden ser rellenados por el usuario)*/
    protected $guarded = ["id"];
}
