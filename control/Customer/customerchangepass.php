<?php
    session_start();
    $customeremail = $_SESSION["email"];
    $passwordChangeError = "";
    if(isset($_POST["customerpasscng"])){
        $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/view/admin/userData.json", true);
        $data =  json_decode($verifyAdmin);

        $oldpass = $_REQUEST['oldpass'];
        $newpass = $_REQUEST['newpass'];
        $confirmnewpass = $_REQUEST['confirmnewpass'];

    foreach($data as $key=>$value){
        if(empty($oldpass) || empty($newpass) || empty($confirmnewpass)){
            $passwordChangeError = 'None of the field can be empty';
        }
        else{
            if($value->email == $customeremail && $value->password == $oldpass){
                if(strlen($newpass)< 8 || strlen($confirmnewpass) < 8){
                    $passwordChangeError = 'Password must be atleast 8 charecters';
                }
                else{
                    if($newpass == $confirmnewpass){
                        $value->password = $newpass;
                        $newpass_data = json_encode($data,JSON_PRETTY_PRINT);
                        if(file_put_contents("../../Data/userData.json",$newpass_data)){
                            $passwordChangeError = "Password Changed";
                        } 
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