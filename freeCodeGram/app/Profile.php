<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

   protected $guarded = [];

   public function profileImage(){

     $imagePath = ($this->image) ? $this->image : 'profile/1f4fe6a4411edc2ff625888b4093e917.jpg' ;
     return '/storage/' .$imagePath;
   }

   public function followers(){
     return $this->belongsToMany(User::class);
   }

   public function user()                    //profile class fetching the user
    {
      return $this->belongsTO(User::class);
    }
}
