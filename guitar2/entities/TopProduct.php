<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11/16/18
 * Time: 16:15
 */

    class TopProduct{
        public $id;
        public $name;
        public $price;
        public $desc;
        public $vote;
        public $image;
        public $type;
        public $quantity;

        public function __construct($data)
        {
            $this->id = $data['id'];
            $this->name = $data['name'];
            $this->price = $data['price'];
            $this->desc = $data['description'];
            $this->vote = $data['vote'];
            $this->image = $data['image'];
            $this->type = $data['type'];
            $this->quantity = 1;
        }

        function total() {
            return $this->price * $this->quantity;
        }
    }
?>