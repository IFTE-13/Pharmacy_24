<?php
    include("../../model/databaseConnection.php");
    session_start();
    $loginError = "";
    $name = "";
    $username = "";
    $email = "";
    $dob = "";
    $gender = "";
    $nationality = "";
    $address = "";
    $phone = "";

    

    
    //$verifyAdmin = file_get_contents("http://localhost/Pharmacy24/data/adminData.json", true);
    //$data =  json_decode($verifyAdmin);
        
        if(isset($_POST["submit"])){
            if(empty($_REQUEST["username"])){
            $loginError = 'please insert your username';
        }
        elseif(empty($_REQUEST["password"])){
            $loginError = 'please provide a valid password';
        }
        else{
                $connection = new databaseConnection();
                $connectionObject = $connection->openConnection();
                $user = $connection->adminLogin($connectionObject, "admin", $_REQUEST["username"], $_REQUEST["password"]);
                if($user->num_rows > 0){
                            while($myrow = $user->fetch_assoc())
                               {$name = $myrow['name'];
                               $username = $myrow['username'];
                               $email = $myrow['email'];
                               $dob = $myrow['dob'];
                               $gender = $myrow['gender'];
                               $nationality = $myrow['nationality'];
                               $address = $myrow['address'];
                               $phone = $myrow['phone'];}
                        
                        $_SESSION["role"] = "admin";
                        header("Location: http://localhost/Pharmacy24/view/admin/adminProfile.php");
                        } 
                        else{
                            $loginError = "No user found";
                        }
                    }
                // foreach($data as $key=>$value){
                //     if($value->username == $_REQUEST["username"] && $value->password == $_REQUEST["password"]){
                //         $_SESSION["username"] = $_REQUEST["username"];
                //         $_SESSION["role"] = "admin";
                //         $_SESSION["name"] = $value->name;
                //         $_SESSION["email"] = $value->email;
                //         $_SESSION["dateofbirth"] = $value->dateofbirth;
                //         $_SESSION["gender"] = $value->gender;
                //         $_SESSION["nationality"] = $value->nationality;
                //         $_SESSION["address"] = $value->address;
                //         $_SESSION["phone"] = $value->phone;
    
                //         header("Location: http://localhost/Pharmacy24/view/admin/adminProfile.php");
                //     }
                //     else{
                //         $loginError = 'No User found';
                //     }
                $connection->closeConnection($connectionObject);
            }
?>