<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

    protected $table = 'customers';

    protected $fillable = [
        'name', 'address', 'email','cardName','cardNumber','phone','city','country','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
