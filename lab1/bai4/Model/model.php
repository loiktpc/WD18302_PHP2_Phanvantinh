<?php

function get_user()  {
    include './config/config.php' ;
    $db = new connect();

    try{

        $sql = "SELECT * FROM user" ;
        $result = $db->pdo_query($sql);

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
