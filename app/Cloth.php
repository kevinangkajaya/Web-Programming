<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    protected $table = 'clothes';
    public function categories(){
        return $this->belongsTo(Category::class, 'categoryID');
    }
}
