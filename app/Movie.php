<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  //Relationship with votes
  public function votes() {
    return $this->hasMany('Vote');
  }
}
