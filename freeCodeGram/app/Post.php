<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $guarded=[];

    public function User(){
      return $this->belongsTO(User::class);
    }
}
