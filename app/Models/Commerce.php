<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\NameSaving;


class Commerce extends Model
{
    protected $fillable = [
        'prix', 'description'
    ];

    public function users(){
        return $this->hasOne(User::class);
    }

}
