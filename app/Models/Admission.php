<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
  public  function name(){
    return $this->belongsTo(Course::class);
  }
}
