<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditRequest extends Model
{
    public $incrementing = false;

    public function userAddress()
    {
        return $this->hasOne('App\UserAddress');
    }
}
