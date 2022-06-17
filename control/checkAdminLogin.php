<?php
    session_start();
    $loginError = "";
    $name = "";
    
    $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/data/adminData.json", true);
    $data =  json_decode($verifyAdmin);

    if(isset($_POST["submit"])){
        if(empty($_REQUEST["username"])||empty($_REQUEST["password"])){
            $loginError = 'None of the fields cannot be empty';
        }
        else{
            foreach($data as $key=>$value){
                if($value->username == $_REQUEST["username"] && $value->password == $_REQUEST["password"]){
                    $_SESSION["username"] = $_REQUEST["username"];
                    $name = $value->name;
                    header("Location: http://localhost/Pharmacy24/view/admin/adminProfile.php");
                }
                else{
                    $loginError = 'No User found';
                }
            }
        }
}
?>