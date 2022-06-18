<?php
    session_start();
    require("../data/adminData");
    $adminUsername = $_SESSION["username"];
    $passwordChangeError = "";

    if(isset($_POST["changepassword"])){
        $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/data/adminData.json", true);
        $data =  json_decode($verifyAdmin);

        $current = $_REQUEST['current'];
        $new = $_REQUEST['new'];
        $confirm = $_REQUEST['confirm'];

    foreach($data as $key=>$value){
        if(empty($current) || empty($new) || empty($confirm)){
            $passwordChangeError = 'None of the field can be empty';
        }
        else{
            if($value->username == $adminUsername && $value->password == $current){
                if(strlen($new)< 8 || strlen($confirm) < 8){
                    $passwordChangeError = 'Password must be atleast 8 charecters';
                }
                else{
                    if($new == $confirm){
                        $value->password = $new;
                        $new_data = json_encode($data,JSON_PRETTY_PRINT);
                        if(file_put_contents("adminData.json",$new_data)){
                            $passwordChangeError = "Password Changed";
                        }
                        $passwordChangeError = "Confirm password didn't matched"; 
                    }
                    else{
                        $passwordChangeError = "Operation successful";
                    }
                }
                
            }
            else{
                $passwordChangeError = 'Operation unsuccessful';
                }
        }
        }
    }
?>