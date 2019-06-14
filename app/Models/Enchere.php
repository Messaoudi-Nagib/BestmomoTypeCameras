<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Enchere extends Model
{
    public function image(){
        return $this->belongsTo(Image::class,'image_id');
    }
}
