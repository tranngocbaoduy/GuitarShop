<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/entities/Product.php');

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11/16/18
 * Time: 16:22
 */

class ShoppingCart{

    var $products;

    function __construct() {
        $this->products = array();
    }

    function add($p) {
        foreach ($this->products as $item) {
            if ($item->id == $p->id) {
                $item->quantity ++;
                return;
            }
        }
        $this->products[$p->id] = $p;
    }
}