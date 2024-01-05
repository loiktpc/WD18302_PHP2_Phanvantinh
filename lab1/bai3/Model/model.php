<?php

function get_user($email)  {
    include './config/config.php' ;
    $db = new connect();

    try{

        $sql = "SELECT * FROM user where email = '$email'" ;
        $result = $db->pdo_query_one($sql);

        // Đóng kết nối  db
        $db = null;
        if(!empty($result)){
            return $result ;
        }else{
            return null;
        }
    }catch(PDOException $e){

    error_log("Database Error: " . $e->getMessage(), 0);
        
    return null;
    }
}
