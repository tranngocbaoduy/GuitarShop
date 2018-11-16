<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11/16/18
 * Time: 16:18
 */

class Response{

    public static $SUCCESS = 1;
    public static $FAILED = 0;
    public static $ERROR = -1;

    public $status;
    public $message;
    public $data;

    public function __construct()
    {
    }

}
?>