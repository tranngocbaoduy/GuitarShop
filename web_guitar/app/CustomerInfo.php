<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    //
    protected $table = 'customers_info';

    protected $fillable = [
        'name', 'address', 'email','cardName','cardNumber','phone','city','country','created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function Bill(){
        $this->belongsTo('App\Bill');
    }
    protected $hidden = [
        'remember_token',
    ];
}
