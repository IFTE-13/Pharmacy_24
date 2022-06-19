<?php
$sellerAdded = "";
    if(isset($_POST['adminAddSeller'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $dob = $_REQUEST['dob'];
        $gender = $_REQUEST['gender'];
        $joiningDate = $_REQUEST['joiningDate'];

        $filecontents=file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/sellerData.json',true);
        $arrphp = json_decode($filecontents);

        $myarray = array(
            "name" => $name,
            'email' => $email,
            'username' => $username,
            'password' => '00000000',
            'dateofbirth' => $dob,
            'gender' => $gender,
            'joiningDate' => $joiningDate,
            'status' => 'unblock'
            
        );
            $arrphp []=$myarray;
            $jsonarr= json_encode($arrphp,JSON_PRETTY_PRINT);
            if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/sellerData.json',$jsonarr)){
                $sellerAdded = "Seller added successfully.";
            }
            else{
                $sellerAdded = "Couldn't add Seller";
            }
    }

    
?>