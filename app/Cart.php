<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function users(){
        return $this->belongsTo(User::class, 'userID');
    }
    public function clothes(){
        return $this->belongsTo(Cloth::class, 'clothID');
    }
}
