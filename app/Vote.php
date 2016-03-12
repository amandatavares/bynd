<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
  //Relationship with movies
  public function movie() {
    return $this->belongsTo('Movie');
  }
}
