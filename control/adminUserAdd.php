<?php
$userAdded = "";
    if(isset($_POST['adminAddUser'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $dob = $_REQUEST['dob'];
        $gender = $_REQUEST['gender'];
        $status = "unblock";

        $filecontents=file_get_contents("userData.json",true);
        $arrphp = json_decode($filecontents);

        $myarray = array(
            "name" => $name,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'dateofbirth' => $dob,
            'gender' => $gender,
            'status' => $status
            
        );
            $arrphp []=$myarray;
            $jsonarr= json_encode($arrphp,JSON_PRETTY_PRINT);
            if(file_put_contents("userData.json",$jsonarr)){
                $userAdded = "User added successfully.";
            }
            else{
                $userAdded = "Couldn't add user";
            }
    }

    
?>