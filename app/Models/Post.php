<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
     public function postParcels()
   {
       return $this->hasMany('App\Models\parcel', 'post_id', 'id');
   }

}
