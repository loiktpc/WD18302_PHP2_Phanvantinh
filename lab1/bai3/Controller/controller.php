<?php 
include './Model/model.php' ;
$email= $_POST['email'] ?? "" ;

$user = get_user($email) ;

include './Views/view.php' ;
