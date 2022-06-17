<?php
$supplierAdded = "";
    if(isset($_POST['adminAddSupplier'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $dob = $_REQUEST['dob'];
        $gender = $_REQUEST['gender'];
        $company = $_REQUEST['company'];

        $filecontents=file_get_contents("supplierData.json",true);
        $arrphp = json_decode($filecontents);

        $myarray = array(
            "name" => $name,
            'email' => $email,
            'username' => $username,
            'password' => '00000000',
            'dateofbirth' => $dob,
            'gender' => $gender,
            'company' => $company,
            'status' => 'unblock'
            
        );
            $arrphp []=$myarray;
            $jsonarr= json_encode($arrphp,JSON_PRETTY_PRINT);
            if(file_put_contents("supplierData.json",$jsonarr)){
                $supplierAdded = "Supplier added successfully.";
            }
            else{
                $supplierAdded = "Couldn't add supplier";
            }
    }

    
?>