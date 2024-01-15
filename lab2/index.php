<?php


require_once './vendor/autoload.php' ;

use Src\Model\Model ;
use Src\Core\Core ;
use Src\Model\Product ; 
use Src\Core\Base ; 
// kế thừa abstract 
use Src\Model\User ; 
// $name = new Core() ;

$Model = new Model() ;
echo $Model->getdata() ; // lấy từ  private 

echo  Model::getName() ; // lấy từ const  function từ static ; 

$product = new Product() ; // đối tượng kế thừa 



//  kế thừa
echo  $product->getnames() ; // lấy từ protected

echo $product->color ;  // lấy từ public 

$base = new Base() ;
echo '</br>' ;
var_dump($base) ;
echo '</br>' ;
echo $base->getName() ;// lấy từ  private 
echo '</br>' ;
$base->setName('JS') ;// lấy từ  private set lại
echo $base->getName() ; // ra dữ liệu mới set 
echo '</br>' ;

$user = new User() ;
echo  $user->GetAll_Product() ; // lấy từ lớp abtrast

echo '</br>' ;
echo $base->GetAll_Product() ; // lấy từ interface 