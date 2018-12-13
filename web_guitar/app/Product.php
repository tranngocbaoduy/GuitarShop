<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'price', 'quantity','id_category','image','description','id_brand'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function Category(){
        $this->belongsTo('App\Category');
    }
    public function Brand(){
        $this->belongsTo('App\Brand');
    }
}
