<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;
     public function parcelPost()
   {
       return $this->belongsTo('App\Models\Post', 'post_id', 'id');
   }

}
