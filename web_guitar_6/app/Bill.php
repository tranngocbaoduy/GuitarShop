<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //

    protected $table = 'bills';
    public $timestamps = false;

    protected $fillable = [
        'name','description','id'
    ];


    public function Detail(){
        $this->hasMany('App\ProductInfo');
//        $this->hasOne('App\CustomerInfo');
    }


}
