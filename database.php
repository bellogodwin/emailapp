<?php
    $connect = new mysqli('localhost','root','','userdata');
    if($connect){
        echo "connection successful";
       
    }else{
        echo 'could not connect to database';
        exit();
    }
    return $connect;

?>