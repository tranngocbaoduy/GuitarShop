<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $table = 'categories';
    public $timestamps = false;

    protected $fillable = [
        'name','description','id'
    ];


    public function Product(){
        $this->hasMany('App\Product');
    }

}
