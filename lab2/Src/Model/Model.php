<?php


namespace Src\Model ;

class Model {
    CONST DB = "FB" ;
    private $data = "loi" ;

    // protected kế thừa qua fun get name  không được gọi trực tiếp 
    protected $name =  "Database Model" ;

    public  $color ="black" ;

    // function __construct()  {
    //     echo 'đây là model' ;
    // }
    function getdata(){
        return $this->data ;
     }

     public static function getName(){
        return self::DB ;
    }
}