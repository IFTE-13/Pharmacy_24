<?php
$usernameError="";
$passwordError="";
$nameError="";
$emailError="";
if(isset($_POST["submission"]))
{
    $username=$_REQUEST["username"];

    $name=$_REQUEST["name"];
    $email = $_REQUEST["email"];
    $password=$_REQUEST["password"];
    $dob=$_REQUEST["dob"];
    
    
    if(empty($name))
    {
        $nameError= "name is empty";
    }
    if(empty($email))
    {
        $emailError= "Email should not be empty";
    }

    if(empty($username))
    {
        $usernameError= "the username is empty"."<br>";
    }

    
    if(strlen($password) <6)
    {
        $passwordError= "Password should be more than 6 characters" ."<br>";
    }   
    $gender="";
    if(empty($gender))
    {
        $gender= "Must select gender"."<br>";
    }

    $cusreg=file_get_contents("../../view/admin/userData.json",true);
    $arrcus=json_decode($cusreg);
    $cusarray = array(
        "Name"=>$name,
        "Email"=>$email,
        "Username"=>$username,
        "Password"=>$password,
        "DateofBirth"=>$dob
    );
    
    $arrcus []=$cusarray;
    $jsonarr= json_encode($arrcus,JSON_PRETTY_PRINT);
    if(file_put_contents("../../view/admin/userData.json",$jsonarr))
    {
        header("location: ../customer/customerlogin.php");
    }
    else
    {
        echo "Registration Error";
    }
}
?>    