<?php
$verify = file_get_contents("data.json");
$data =  json_decode($verify);

if(isset($_POST["submit"])){
    foreach($data as $key=>$value){
        if($value->username == $_REQUEST["username"] && $value->password ==$_REQUEST["password"]){
            header("Location: ../view/home.php");
        }
    }
}
?>