<?php
namespace lib;

class Connector{
    private static $conn;

    public static function connector(){
       if(is_null(self::$conn)){
           self::$conn = connect();
       }
       return self::$conn;
    }
}