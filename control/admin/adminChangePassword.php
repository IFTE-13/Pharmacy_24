<?php
    session_start();
    include($_SERVER['DOCUMENT_ROOT'] . "/Pharmacy24/model/databaseConnection.php");
    $adminUsername = $_SESSION["username"];
    $passwordChangeError = "";

    if(isset($_POST["changepassword"])){

        $current = $_REQUEST['current'];
        $new = $_REQUEST['new'];
        $confirm = $_REQUEST['confirm'];

        if(empty($current) || empty($new) || empty($confirm)){
            $passwordChangeError = "<p class='warning'>Please fill out the fields<p>";
        }
        elseif(empty($current)){
            $passwordChangeError = "<p class='warning'>Please provide current password<p>";
        }
        else{
            $connection = new databaseConnection();
            $connectionObject = $connection->openConnection();
                
                {
                if(strlen($new)< 6 || strlen($confirm) < 6){
                    $passwordChangeError = "<p class='warning'>Password must be atleast 8 charecters";
                }
                else{
                    if($new == $confirm){
                        $updatePassword = $connection->adminChangePassword($connectionObject, "admin", $_SESSION["username"], $new);
                        if($updatePassword ==TRUE){
                            $passwordChangeError = "Password Changed";
                        }
                    }
                    else{
                        $passwordChangeError = "<p class='warning'>New and confirm password didn't matched<p>";
                    }
                }
                
            }
        }
        }
?>