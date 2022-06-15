<?php
    session_start();
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
                if($new < 8 || $confirm < 8){
                    $passwordChangeError = 'Password must be atleast 8 charecters';
                }
                else{
                    if($new != $confirm){
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