<?php 
include './Model/model.php' ;
$email= $_POST['email'] ?? "" ;

$user = get_user($email) ;
// var_dump($user) ;
include './Views/view.php' ;
