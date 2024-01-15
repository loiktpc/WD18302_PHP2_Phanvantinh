<?php


namespace Src\Responsitores ;

// lớp trưừ tượng 
abstract class BaseModelAbstract{

    protected $model ; 
    


    public function Message() {
        return 'this is mess đây là kế thừa lớp asbtract' ;
    }
    // phương thức trừu tượng 
    abstract public function show()  ;
    abstract public function GetAll_Product()  ;
    abstract public function Insert_Product()  ;
    abstract public function Edit_Product()  ;
    abstract public function Delete_Product()  ;

    
}