<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //

    protected $table = 'brands';

    protected $fillable = [
        'name','description','id'
    ];


    public function Product(){
        $this->hasMany('App\Product');
    }
}
