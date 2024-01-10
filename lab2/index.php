<?php


require_once './vendor/autoload.php' ;

use Src\Model\Model ;
use Src\Core\Core ;

$name = new Core() ;

new Model() ;
include './Src/Views/Home.php' ;