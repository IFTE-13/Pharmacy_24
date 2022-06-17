<?php
$sellerAdded = "";
    if(isset($_POST['adminAddSeller'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $dob = $_REQUEST['dob'];
        $gender = $_REQUEST['gender'];
        $joiningDate = $_REQUEST['joiningDate'];
        $password = "00000000";

        $filecontents=file_get_contents("sellerData.json",true);
        $arrphp = json_decode($filecontents);

        $myarray = array(
            "name" => $name,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'dateofbirth' => $dob,
            'gender' => $gender,
            'joiningDate' => $joiningDate
            
        );
            $arrphp []=$myarray;
            $jsonarr= json_encode($arrphp,JSON_PRETTY_PRINT);
            if(file_put_contents("sellerData.json",$jsonarr)){
                $sellerAdded = "Seller added successfully.";
            }
            else{
                $sellerAdded = "Couldn't add Seller";
            }
    }

    
?>