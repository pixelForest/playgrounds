<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
  public function equipment()
  {

    return $this->belongsToMany('App\Equipment','equipment_response');

  }

  public function uniques()
  {

    return $this->belongsToMany('App\Unique','response_unique');

  }
}
