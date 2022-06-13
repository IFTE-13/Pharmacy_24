<?php
    session_start();
    $adminUsername = $_SESSION["username"];
    $passwordChangeError = "";

    if(isset($_POST["changepassword"])){
        $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/data/adminData.json", true);
        $data =  json_decode($verifyAdmin);

        $current = $_REQUEST['current'];
        $new = $_REQUEST['new'];
        $confirem = $_REQUEST['confirm'];

    foreach($data as $key=>$value){
        if($value->username == $adminUsername && $value->password == $current){
            
            
        }
        else{
            $passwordChangeError = 'No User found';
        }
    }
?>