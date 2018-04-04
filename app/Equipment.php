<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
  public function responses()
  {

    return $this->belongsToMany('App\Response','equipment_response');

  }
}
