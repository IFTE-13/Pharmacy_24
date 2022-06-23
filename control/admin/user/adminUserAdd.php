<?php
$userAdded = "";
    if(isset($_POST['adminAddUser'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $dob = $_REQUEST['dob'];
        $status = "unblock";

        $filecontents=file_get_contents("http://localhost/Pharmacy24/data/userData.json",true);
        $arrphp = json_decode($filecontents);

        $myarray = array(
            "name" => $name,
            'email' => $email,
            'username' => $username,
            'password' => "00000000",
            'dateofbirth' => $dob,
            'gender' => "male",
            'status' => $status
            
        );
            $arrphp []=$myarray;
            $jsonarr= json_encode($arrphp,JSON_PRETTY_PRINT);
            if(empty($name) || empty($email) || empty($username) || empty($dob) || empty($gender) || empty($status)){
                $userAdded = "Please fill up all the fields";
            }
            else{
                if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/userData.json',$jsonarr)){
                    $userAdded = "User added successfully.";
                }
                else{
                    $userAdded = "Couldn't add user";
                }
            }
    }

    
?>