<?php
    session_start();
    $adminUsername = $_SESSION["username"];
    $adminUpdateProfileError = "";
    $username = "";

    if(isset($_POST["adminUpdateProfile"])){
        $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/data/adminData.json", true);
        $data =  json_decode($verifyAdmin);

        if(empty($_REQUEST["username"])){
            $username = $_SESSION["username"];
        }
        else{
            $username = $_REQUEST['username'];
        }
        if(empty($_REQUEST["name"])){
            $name = $_SESSION["name"];
        }
        else{
            $name = $_REQUEST['name'];
        }
        if(empty($_REQUEST["email"])){
            $email = $_SESSION["email"];
        }
        else{
            $email = $_REQUEST['email'];
        }
        if(empty($_REQUEST["dateofbirth"])){
            $dateofbirth = $_SESSION["dateofbirth"];
        }
        else{
            $dateofbirth = $_REQUEST['dateofbirth'];
        }
        if(empty($_REQUEST["nationality"])){
            $nationality = $_SESSION["nationality"];
        }
        else{
            $nationality = $_REQUEST['nationality'];
        }
        if(empty($_REQUEST["gender"])){
            $gender = $_SESSION["gender"];
        }
        else{
            $gender = $_REQUEST['gender'];
        }
        if(empty($_REQUEST["address"])){
            $address = $_SESSION["address"];
        }
        else{
            $address = $_REQUEST['address'];
        }
        if(empty($_REQUEST["phone"])){
            $phone = $_SESSION["phone"];
        }
        else{
            $phone = $_REQUEST['phone'];
        }

    foreach($data as $key=>$value){
        if($value->username == $_SESSION['username']){
            $value->username = $username;
            $value->name = $name;
            $value->email = $email;
            $value->gender = $gender;
            $value->address = $address;
            $value->phone = $phone;
            $value->nationality = $nationality;
            $value->dateofbirth = $dateofbirth;
            $new_data = json_encode($data,JSON_PRETTY_PRINT);
                        if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/adminData.json',$new_data)){
                            $adminUpdateProfileError = "Please logout and login again to see updates on your profile";
                        }
                        else{
                            $adminUpdateProfileError = "Operation failed";
                        }
        }
                    }
    }
?>