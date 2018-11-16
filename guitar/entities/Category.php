<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11/16/18
 * Time: 16:15
 */

class Category{
    public $id;
    public $name;
    public $note;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->not = $data['note'];

    }

}
?>