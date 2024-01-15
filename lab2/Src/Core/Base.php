<?php


namespace Src\Core ; 

use Src\Responsitores\Modelinterface ; 
class Base implements Modelinterface { 
    Const VAT = 0.1 ; 
    private $_name = 'PHP' ;

    public static $docoment = 'docoment' ;

    public function getName(){
        return $this->_name ;
    }
   
    public function setName($language){
        echo  self::VAT ;
      return  $this->_name = $language ;
    }
    public function GetAll_Product(){
        return "lấy tất cả sản phẩm qua Interface" ;
    }
    public function Insert_Product(){
        return "" ;
    }
    public function Edit_Product(){
        return "" ;
    }
    public function Delete_Product(){
        return "" ;
    }
}