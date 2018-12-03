<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temas extends Model
{
    //
  
  public function Ejercicios()
  {
    return $this->hasMany(Ejercicios::class);
  }
}
