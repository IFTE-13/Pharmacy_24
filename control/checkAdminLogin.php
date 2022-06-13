<?php
    session_start();
    $loginError = "";
    $name = "";
    
    if(isset($_POST["submit"])){
        $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/data/adminData.json", true);
        $data =  json_decode($verifyAdmin);

    foreach($data as $key=>$value){
        if($value->username == $_REQUEST["username"] && $value->password == $_REQUEST["password"]){
            $_SESSION["username"] = $_REQUEST["username"];
            header("Location: http://localhost/Pharmacy24/view/admin/adminProfile.php");
        }
        else{
            $loginError = 'No User found';
        }
    }
}
?>