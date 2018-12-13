<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //

    protected $table = 'bills';

    protected $fillable = [
        'name','description','id','id_customer'
    ];


    public function Detail(){
        $this->hasMany('App\ProductInfo');
//        $this->hasOne('App\CustomerInfo');
    }


}
