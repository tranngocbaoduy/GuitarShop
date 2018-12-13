<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    //
    protected $table = 'products_info';

    protected $fillable = [
        'name', 'price', 'quantity','image','description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function Bill(){
        $this->belongsTo('App\Bill');
    }
}
