<?php

namespace Src\Model ; 

use Src\Responsitores\BaseModelAbstract ; 


// kế thừa lớp abstract 
class User extends BaseModelAbstract {
    function Show(){
        return 'show nessage lớp trừu tượng' ;
    }

     public function GetAll_Product() {
        return "lấy tất cả sản phẩm qua abstract" ;
    }
     public function Insert_Product() {
        return "" ;
    }
     public function Edit_Product() {
        return "" ;
    }
     public function Delete_Product(){
        return "" ;
    } 
}