<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unique extends Model
{
  public function responses()
  {

    return $this->belongsToMany('App\Response','response_unique');

  }
}
