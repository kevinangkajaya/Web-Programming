<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    protected $table = 'transaction_header';
    public function users(){
        return $this->belongsTo(User::class, 'userID');
    }
    public function promo(){
        return $this->belongsTo(Promo::class, 'promoID');
    }
    public function transDetail(){
        return $this->hasMany(TransactionDetail::class,'transactionHeaderID');
    }
}
