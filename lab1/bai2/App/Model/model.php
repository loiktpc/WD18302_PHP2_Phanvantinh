<?php 
// model tương tác db
// thư mục con (viết thường, ten-file.php)
// model controller 
$course = [
    'TheDuc' => 'TheDuc',
    'CongDan' => 'CongDan',
    'Toan' => 'Toan'
];
function get_Course() {
    global $course ;

    return array_values($course) ;
}
function find_by_semester($semester) {
    global $course ;

    return (array_key_exists($semester, $course ) ? $course[$semester]:'Invalid course') ; 
}