<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/Pharmacy24/model/databaseConnection.php");
    session_start();
    $loginError = "";
    $update = "";
        
        if(isset($_POST["submit"])){
            if(empty($_REQUEST["username"])){
            $loginError = 'Username cannot be empty';
        }
        elseif(empty($_REQUEST["password"])){
            $loginError = 'Please input your password';
        }
        else{
                $connection = new databaseConnection();
                $connectionObject = $connection->openConnection();
                $user = $connection->adminLogin($connectionObject, "admin", $_REQUEST["username"], $_REQUEST["password"]);
                if($user->num_rows > 0){
                    $userdata = $connection->adminProfile($connectionObject, "admin", $_REQUEST["username"]);
                    while($myrow = $userdata->fetch_assoc())
                    {$_SESSION['name'] = $myrow['name'];
                    $_SESSION['username'] = $myrow['username'];
                    $_SESSION['email'] = $myrow['email'];
                    $_SESSION['dob'] = $myrow['dob'];
                    $_SESSION['gender'] = $myrow['gender'];
                    $_SESSION['nationality'] = $myrow['nationality'];
                    $_SESSION['address'] = $myrow['address'];
                    $_SESSION['phone'] = $myrow['phone'];}
                        
                        $_SESSION["role"] = "admin";
                        header("Location: http://localhost/Pharmacy24/view/admin/admin/adminProfile.php");
                        } 
                        else{
                            $loginError = "No user found";
                        }
                    }
                $connection->closeConnection($connectionObject);
            }

            if(isset($_POST["update"])){
                $connection = new databaseConnection();
                $connectionObject = $connection->openConnection();
                $updateUser = $connection->adminUpdateProfile($connectionObject, $_REQUEST["username"], $_REQUEST["name"], $_REQUEST["email"], $_REQUEST["dob"], $_REQUEST["gender"], $_REQUEST["nationality"], $_REQUEST["address"], $_REQUEST["phone"]);
                if($updateUser == TRUE){
                    $update = "information updated"."<br> <small class='warning'>please login again to see the update</small>";
                }
                else{
                    $update = "operation failed";
                }
                $connection->closeConnection($connectionObject);
            }
?>