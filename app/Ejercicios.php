<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejercicios extends Model
{
    //
  public function Tema()
  {
      return $this->belongsTo(Temas::class);
  }
}
