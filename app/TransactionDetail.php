<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $table = 'transaction_detail';
    public function headers(){
        return $this->belongsTo(TransactionHeader::class, 'transactionHeaderID');
    }
    public function clothes(){
        return $this->belongsTo(Cloth::class, 'clothID');
    }
}
