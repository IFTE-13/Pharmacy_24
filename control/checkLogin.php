<?php
$verify = file_get_contents("../Data/data.json");
$data =  json_decode($verify);

    foreach($data as $key=>$value){
        if($value->username == $_REQUEST["username"] && $value->password ==$_REQUEST["password"]){
            header("Location: ../view/home.php");
        }
    }
?>