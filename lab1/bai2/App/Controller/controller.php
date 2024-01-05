<?php 
// Kim Thanh Loi PC05314 1.2
include '../Model/model.php' ;
// controller 
$list_of_course = get_Course() ;
$semester  = (!empty($_GET['semeter']) ? $_GET['semeter'] :  '') ;

$course_name = find_by_semester($semester) ;
$page_content = $course_name ; 


include '../Views/view.php' ;